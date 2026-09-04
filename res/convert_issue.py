#!/usr/bin/env python3
"""Convert a College Bound Word issue draft (.docx) into responsive HTML.

The converter is intentionally conservative:
- preserves source order and wording;
- preserves bold/italic/underline and real Word hyperlinks;
- recognizes the issue masthead, volume/date, BELOW list, and recurring section headings;
- groups article paragraphs using blank lines in the Word file;
- does not invent/rewrite headings or move stories between sections.

Usage:
    python convert_issue.py CB926.rcs.docx Sept26.html
    python convert_issue.py CB1026.docx Oct26.html --css issue.css
"""

from __future__ import annotations

import argparse
import html
import re
from pathlib import Path
from typing import Iterable, Optional

from docx import Document
from docx.oxml.ns import qn
from docx.text.run import Run

MONTH_RE = re.compile(
    r"^(January|February|March|April|May|June|July|August|September|October|November|December)\s+(20\d{2})$",
    re.I,
)
VOLUME_RE = re.compile(r"^Vol\.\s*(\d+),\s*No\.\s*(\d+)$", re.I)
URL_RE = re.compile(r"(?P<url>https?://[^\s<]+|www\.[^\s<]+)")

DISPLAY_HEADINGS = {
    "ADMISSION WATCH": "Admission Watch",
    "ADMISSIONS WATCH": "Admissions Watch",
    "ENROLLMENT TRENDS": "Enrollment Trends",
    "FINANCIAL MATTERS": "Financial Matters",
    "CURRICULUM CAPSULES": "Curriculum Capsules",
    "COUNSELOR’S BOOKSHELF": "Counselor’s Bookshelf",
    "COUNSELOR'S BOOKSHELF": "Counselor's Bookshelf",
    "NEWS YOU CAN USE": "News You Can Use",
    "SCHOLARSHIP SCOOPS": "Scholarship Scoops",
}

KNOWN_SECTIONS = {
    "ADMISSION WATCH",
    "ADMISSIONS WATCH",
    "ENROLLMENT TRENDS",
    "FINANCIAL MATTERS",
    "CURRICULUM CAPSULES",
    "COUNSELOR’S BOOKSHELF",
    "COUNSELOR'S BOOKSHELF",
    "NEWS YOU CAN USE",
    "SCHOLARSHIP SCOOPS",
}


def is_blank(paragraph) -> bool:
    return not paragraph.text.strip()


def normalize_section_name(text: str) -> str:
    return re.sub(r"\s+", " ", text.strip()).upper()


def looks_like_section_heading(paragraph) -> bool:
    text = paragraph.text.strip()
    if not text or len(text) > 90:
        return False
    normalized = normalize_section_name(text)
    if normalized in {s.upper() for s in KNOWN_SECTIONS}:
        return True
    letters = [c for c in text if c.isalpha()]
    if len(letters) < 5:
        return False
    uppercase_ratio = sum(c.isupper() for c in letters) / len(letters)
    return uppercase_ratio >= 0.92 and len(text.split()) <= 6


def paragraph_all_bold(paragraph) -> bool:
    meaningful = []
    for r in paragraph.runs:
        if r.text.strip():
            meaningful.append(bool(r.bold))
    return bool(meaningful) and all(meaningful)


def clean_url_punctuation(url: str) -> tuple[str, str]:
    trailing = ""
    while url and url[-1] in ".,;:!?)]}" + "’”":
        trailing = url[-1] + trailing
        url = url[:-1]
    return url, trailing


def linkify_text(text: str) -> str:
    """Escape text and turn plain URLs into links."""
    text = text.replace("\t", "").replace("\u00a0", " ")
    parts = []
    pos = 0
    for match in URL_RE.finditer(text):
        parts.append(html.escape(text[pos : match.start()]))
        raw = match.group("url")
        url, trailing = clean_url_punctuation(raw)
        href = url if url.lower().startswith(("http://", "https://")) else "https://" + url
        parts.append(
            f'<a href="{html.escape(href, quote=True)}" target="_blank" rel="noopener noreferrer">'
            f"{html.escape(url)}</a>{html.escape(trailing)}"
        )
        pos = match.end()
    parts.append(html.escape(text[pos:]))
    return "".join(parts).replace("\n", "<br>")


def run_html(run: Run, hyperlink: Optional[str] = None) -> str:
    text = run.text.replace("\t", "")
    if not text:
        return ""
    content = html.escape(text).replace("\n", "<br>") if hyperlink else linkify_text(text)
    if run.bold:
        content = f"<strong>{content}</strong>"
    if run.italic:
        content = f"<em>{content}</em>"
    if run.underline:
        content = f"<u>{content}</u>"
    if hyperlink:
        content = (
            f'<a href="{html.escape(hyperlink, quote=True)}" target="_blank" rel="noopener noreferrer">'
            f"{content}</a>"
        )
    return content


def merge_adjacent_tags(markup: str) -> str:
    """Collapse adjacent identical formatting wrappers Word often splits across runs."""
    previous = None
    while previous != markup:
        previous = markup
        for tag in ("strong", "em", "u"):
            markup = re.sub(rf"</{tag}>\s*<{tag}>", "", markup)
            markup = re.sub(rf"</{tag}>(\s+)<{tag}>", r"\1", markup)
    return markup


def paragraph_inline_html(paragraph) -> str:
    """Render paragraph inline content, including w:hyperlink children."""
    chunks: list[str] = []
    for child in paragraph._p:
        if child.tag == qn("w:r"):
            chunks.append(run_html(Run(child, paragraph)))
        elif child.tag == qn("w:hyperlink"):
            rid = child.get(qn("r:id"))
            href = None
            if rid and rid in paragraph.part.rels:
                href = paragraph.part.rels[rid].target_ref
            for r_el in child.findall(qn("w:r")):
                chunks.append(run_html(Run(r_el, paragraph), href))
    return merge_adjacent_tags("".join(chunks).strip())


def extract_leading_bold_title(paragraph) -> tuple[Optional[str], str]:
    """If a paragraph begins with bold title text ending in '.', return (title, remainder_html)."""
    inline = paragraph_inline_html(paragraph)
    match = re.match(r"^(<strong>.*?</strong>)(.*)$", inline, re.S)
    if not match:
        return None, inline
    title_html = match.group(1)
    remainder = match.group(2).lstrip()
    title_plain = re.sub(r"<[^>]+>", "", title_html).strip()
    # Prefer titles that look like story headlines (end with period or are short-ish bold leads)
    if not title_plain:
        return None, inline
    if title_plain.endswith(".") or (len(title_plain) <= 120 and remainder):
        return title_plain, remainder
    return None, inline


def paragraph_html(paragraph, extra_class: str = "") -> str:
    classes = []
    if paragraph.text.startswith("\t"):
        classes.append("indent")
    if extra_class:
        classes.append(extra_class)
    class_attr = f' class="{" ".join(classes)}"' if classes else ""
    return f"<p{class_attr}>{paragraph_inline_html(paragraph)}</p>"


def story_html(group: list, article_index: int) -> str:
    """Render a story group; promote leading bold title to h3 when detectable."""
    parts: list[str] = []
    for para_index, p in enumerate(group):
        if para_index == 0:
            title, remainder = extract_leading_bold_title(p)
            if title:
                parts.append(f'<h3 class="cbn-story-title">{html.escape(title)}</h3>')
                if remainder.strip():
                    indent = " indent" if p.text.startswith("\t") else ""
                    parts.append(f'<p class="article-start{indent}">{remainder}</p>')
                continue
            parts.append(paragraph_html(p, "article-start"))
        else:
            parts.append(paragraph_html(p))
    return f'<article class="story" data-story="{article_index}">\n' + "\n".join(parts) + "\n</article>"


def group_nonblank_paragraphs(paragraphs: Iterable) -> list[list]:
    groups: list[list] = []
    current: list = []
    for p in paragraphs:
        if is_blank(p):
            if current:
                groups.append(current)
                current = []
        else:
            current.append(p)
    if current:
        groups.append(current)
    return groups


def section_slug(name: str) -> str:
    return re.sub(r"[^a-z0-9]+", "-", name.lower()).strip("-")


def toc_items_for_sections(contents: list[str], sections: list[dict]) -> list[tuple[str, str]]:
    """Build TOC from BELOW list, linking only to sections that exist. Do not invent entries."""
    section_by_norm = {
        normalize_section_name(DISPLAY_HEADINGS.get(normalize_section_name(s["heading"]), s["heading"])): s
        for s in sections
    }
    # Also index raw headings
    for s in sections:
        section_by_norm[normalize_section_name(s["heading"])] = s

    items: list[tuple[str, str]] = []
    if contents:
        for item in contents:
            key = normalize_section_name(item)
            section = section_by_norm.get(key)
            if section is None:
                # Try display-name match
                display = DISPLAY_HEADINGS.get(key, item)
                section = section_by_norm.get(normalize_section_name(display))
            if section is None:
                continue  # do not invent / link missing sections
            display_heading = DISPLAY_HEADINGS.get(
                normalize_section_name(section["heading"]), section["heading"]
            )
            items.append((display_heading, section_slug(section["heading"])))
    if items:
        return items
    # If BELOW list empty or matched nothing, fall back to actual detected sections only
    for section in sections:
        display_heading = DISPLAY_HEADINGS.get(
            normalize_section_name(section["heading"]), section["heading"]
        )
        items.append((display_heading, section_slug(section["heading"])))
    return items


def parse_document(docx_path: Path) -> dict:
    doc = Document(docx_path)
    paragraphs = doc.paragraphs

    # Header metadata and intro
    title_idx = next(
        (i for i, p in enumerate(paragraphs) if p.text.strip().upper().startswith("COLLEGE BOUND:")),
        None,
    )
    vol_idx = next((i for i, p in enumerate(paragraphs) if VOLUME_RE.match(p.text.strip())), None)
    date_idx = next((i for i, p in enumerate(paragraphs) if MONTH_RE.match(p.text.strip())), None)
    below_idx = next((i for i, p in enumerate(paragraphs) if p.text.strip().upper() == "BELOW"), None)

    if title_idx is None or vol_idx is None or date_idx is None:
        raise ValueError("Could not find required masthead/title, volume, and date fields in the DOCX.")

    volume_match = VOLUME_RE.match(paragraphs[vol_idx].text.strip())
    date_match = MONTH_RE.match(paragraphs[date_idx].text.strip())
    assert volume_match and date_match

    intro_paragraphs = [p for p in paragraphs[:title_idx] if not is_blank(p)]
    masthead_line = paragraphs[title_idx].text.strip()
    volume_text = paragraphs[vol_idx].text.strip()
    issue_month = date_match.group(1).title()
    issue_year = date_match.group(2)
    date_text = f"{issue_month} {issue_year}"

    contents: list[str] = []
    if below_idx is not None:
        i = below_idx + 1
        while i < len(paragraphs) and not is_blank(paragraphs[i]):
            item = paragraphs[i].text.strip()
            item = re.sub(r"^[\.•\-–—]+\s*", "", item).strip()
            if item:
                contents.append(item)
            i += 1

    section_starts = [i for i, p in enumerate(paragraphs) if looks_like_section_heading(p)]
    section_starts = [i for i in section_starts if below_idx is None or i > below_idx]
    if not section_starts:
        raise ValueError("No newsletter sections were detected.")

    sections = []
    for n, start in enumerate(section_starts):
        end = section_starts[n + 1] if n + 1 < len(section_starts) else len(paragraphs)
        heading = paragraphs[start].text.strip()
        groups = group_nonblank_paragraphs(paragraphs[start + 1 : end])

        deck = None
        if groups and len(groups[0]) == 1 and paragraph_all_bold(groups[0][0]):
            deck = groups.pop(0)[0]

        sections.append({"heading": heading, "deck": deck, "groups": groups})

    return {
        "doc": doc,
        "intro_paragraphs": intro_paragraphs,
        "masthead_line": masthead_line,
        "volume_text": volume_text,
        "volume": int(volume_match.group(1)),
        "issue_number": int(volume_match.group(2)),
        "date_text": date_text,
        "month": issue_month,
        "year": int(issue_year),
        "contents": contents,
        "sections": sections,
    }


def render_html(data: dict, css_href: str = "issue.css") -> str:
    title = f"College Bound — {data['date_text']}"
    intro_html = "\n".join(paragraph_html(p) for p in data["intro_paragraphs"])

    toc_items = toc_items_for_sections(data["contents"], data["sections"])
    contents_html = "\n".join(
        f'<li><a href="#{slug}">{html.escape(label)}</a></li>' for label, slug in toc_items
    )

    sections_html: list[str] = []
    for idx, section in enumerate(data["sections"]):
        heading = section["heading"]
        display_heading = DISPLAY_HEADINGS.get(normalize_section_name(heading), heading)
        slug = section_slug(heading)
        lead_class = " section--lead" if idx == 0 else ""
        deck_html = paragraph_html(section["deck"], "section-deck") if section["deck"] else ""

        articles_html = [
            story_html(group, article_index)
            for article_index, group in enumerate(section["groups"], start=1)
        ]

        sections_html.append(
            f'''<section class="issue-section{lead_class}" id="{slug}">
  <h2>{html.escape(display_heading)}</h2>
  {deck_html}
  <div class="story-grid">
    {''.join(articles_html)}
  </div>
</section>'''
        )

    return f'''<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="College Bound: Issues & Trends for the College Admissions Advisor — {html.escape(data['date_text'])}">
  <title>{html.escape(title)}</title>
  <link rel="stylesheet" href="{html.escape(css_href, quote=True)}">
</head>
<body>
  <main class="newsletter" id="top">
    <header class="masthead">
      <div class="brand">College Bound</div>
      <div class="brand-rule"></div>
      <div class="tagline">ISSUES &amp; TRENDS FOR THE COLLEGE ADMISSIONS ADVISOR</div>
      <div class="issue-meta">
        <span>{html.escape(data['volume_text'])}</span>
        <span>{html.escape(data['date_text'])}</span>
      </div>
    </header>

    <section class="welcome" aria-label="Welcome note">
      {intro_html}
    </section>

    <nav class="contents" aria-label="In this issue">
      <div class="contents-title">BELOW</div>
      <ul>
        {contents_html}
      </ul>
    </nav>

    {''.join(sections_html)}

    <footer class="site-footer">
      <a href="#top">Back to top</a>
      <span>College Bound · {html.escape(data['date_text'])}</span>
    </footer>
  </main>
</body>
</html>
'''


def main() -> None:
    parser = argparse.ArgumentParser(description="Convert a College Bound DOCX newsletter to responsive HTML.")
    parser.add_argument("docx", type=Path, help="Input Word .docx file")
    parser.add_argument("output", type=Path, nargs="?", help="Output .html file")
    parser.add_argument("--css", default="issue.css", help="CSS href to write into the generated HTML")
    args = parser.parse_args()

    if not args.docx.exists():
        raise SystemExit(f"Input does not exist: {args.docx}")

    data = parse_document(args.docx)
    output = args.output or Path(f"{data['month'][:4]}{str(data['year'])[-2:]}.html")
    output.parent.mkdir(parents=True, exist_ok=True)
    output.write_text(render_html(data, css_href=args.css), encoding="utf-8")

    print(f"Created: {output}")
    print(f"Issue: {data['volume_text']} — {data['date_text']}")
    print("Sections:")
    for section in data["sections"]:
        print(f"  - {section['heading']}: {len(section['groups'])} story groups")


if __name__ == "__main__":
    main()

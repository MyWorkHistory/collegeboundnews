# Implementation report — 2026–2027 rollover + DOCX→HTML

Date: 2026-09-04

## Decisions applied

1. Used existing `res/Sept26.html` (DOCX not in repo; regenerate later when available).
2. Kept `members/articles.php` shell; left intro from DB `CurrentIssues`; center hard-coded for 2026–2027 / Sept26.html.

## Backups created

- `members/articles.php.bak-20260904`
- `backissues/index.html.bak-20260904`

## Files changed / created

### Newsletter tooling (`res/`)

- `convert_issue.py` — leading-bold → `h3.cbn-story-title`, merge adjacent strong/em/u, TOC only links sections that exist
- `issue.css` — story-title styles + light cbn-* alias comments
- `verify_issue.py` — stronger PASS/FAIL checks (CSS link, empty body, etc.)
- `requirements.txt` — `python-docx>=1.1.0`
- `Sept26.html` — unchanged content (existing first-pass)

### Current year (`members/26-27issues/`)

- `issue.css` (copied)
- `Sept26.html` (copied)
- `articles.php` (Volume 41, September → `Sept26.html` only)

### Current Issues routing

- `members/articles.php` — center replaced with **2026-2027 Issues / Volume 41 / September 2026 → `26-27issues/Sept26.html`**; left column still DB

### Archive (`25-26issues/`)

- Copied 10 PDFs from `members/25-26issues/` (Sept25–June26); originals left in place
- `articles.php` from `articles_Mar26.php` template; PDF hrefs are same-folder filenames; added June/May/Apr link-only entries (no invented teasers); Current Issues nav → `../members/articles.php`

### Back Issues

- `backissues/index.html` — **2025-2026 Issues** added at top → `../25-26issues/articles.php`

## Paths summary

| Role | Path |
|------|------|
| Live Current Issues | `/members/articles.php` |
| Sept 2026 HTML | `/members/26-27issues/Sept26.html` |
| Year companion listing | `/members/26-27issues/articles.php` |
| Public 25–26 archive | `/25-26issues/articles.php` + `*.pdf` |
| Back Issues entry | `/backissues/index.html` → 2025-2026 first |

## QA performed

- `python res/verify_issue.py members/26-27issues/Sept26.html` → **PASS**
- Confirmed no `Sept26.pdf` in 26-27issues
- Confirmed archive articles.php has no `/members/25-26issues/` paths
- Confirmed 10 archive PDFs present
- Confirmed backissues lists 2025-2026 above 2024-2025

## Uncertainties / follow-ups

1. **CB926.rcs.docx** not in workspace — re-run converter when provided to refresh Sept26.html.
2. **Admin `CurrentIssuesPage`** no longer drives the live center; monthly updates: edit center of `members/articles.php` (and optionally `26-27issues/articles.php`) and upload new HTML under `26-27issues/`.
3. Archive teasers for **June/May/April 2026** are link-only (no client summaries in the Mar26 snapshot).
4. Filename is **`June26.pdf`** (not `Jun26.pdf`).
5. Visual PDF comparison / mobile browser QA should be done on staging after upload.
6. Do not delete `members/25-26issues/` until client approves public archive.

## Future month workflow

```bat
py -m pip install -r res/requirements.txt
py res/convert_issue.py "INPUT.docx" "members/26-27issues/Oct26.html" --css issue.css
py res/verify_issue.py members/26-27issues/Oct26.html --expect-date "October 2026" --expect-volume "Vol. 41, No. 2"
```

Then add October at the **top** of the center listing in `members/articles.php`.

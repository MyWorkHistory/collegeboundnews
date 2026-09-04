#!/usr/bin/env python3
"""QA checker for generated College Bound HTML newsletters."""
from __future__ import annotations

import argparse
import re
from pathlib import Path

REQUIRED_SECTIONS = [
    "Admission Watch",
    "Enrollment Trends",
    "Financial Matters",
    "Curriculum Capsules",
    "Counselor’s Bookshelf",
    "News You Can Use",
]


def main() -> None:
    ap = argparse.ArgumentParser()
    ap.add_argument("html_file", type=Path)
    ap.add_argument("--expect-volume", default="Vol. 41, No. 1")
    ap.add_argument("--expect-date", default="September 2026")
    ap.add_argument("--css", default="issue.css", help="Expected stylesheet href")
    args = ap.parse_args()

    failures: list[str] = []

    if not args.html_file.exists():
        print("FAIL")
        print(f" - HTML file does not exist: {args.html_file}")
        raise SystemExit(1)

    text = args.html_file.read_text(encoding="utf-8")
    if not text.strip():
        failures.append("HTML file is empty")

    body_match = re.search(r"<body\b[^>]*>(.*)</body>", text, re.I | re.S)
    if not body_match or not re.sub(r"<[^>]+>", "", body_match.group(1)).strip():
        failures.append("Document body appears empty")

    for expected in [args.expect_volume, args.expect_date]:
        if expected not in text:
            failures.append(f"Missing expected text: {expected}")

    css_pattern = re.compile(
        rf'<link[^>]+href=["\'][^"\']*{re.escape(args.css)}["\']',
        re.I,
    )
    if not css_pattern.search(text):
        failures.append(f"Stylesheet not linked correctly (expected href containing {args.css})")

    lowered = text.lower()
    if "sept26.pdf" in lowered:
        failures.append("Found obsolete Sept26.pdf reference; new issue must be HTML")
    if "/members/25-26issues/" in lowered:
        failures.append("Found old-year members path in generated issue")

    plain = re.sub(r"<[^>]+>", " ", text)
    plain = re.sub(r"\s+", " ", plain)
    for section in REQUIRED_SECTIONS:
        if section.lower() not in plain.lower():
            # Allow straight/curly apostrophe variants for Bookshelf
            alt = section.replace("’", "'")
            if alt.lower() not in plain.lower():
                failures.append(f"Missing section: {section}")

    if failures:
        print("FAIL")
        for item in failures:
            print(" -", item)
        raise SystemExit(1)

    print("PASS")
    print(f"Verified {args.html_file}")
    print(f" - {args.expect_volume}")
    print(f" - {args.expect_date}")
    print(f" - stylesheet linked ({args.css})")
    print(" - no Sept26.pdf reference")
    print(" - no /members/25-26issues/ reference")
    print(" - expected sections found")
    print(" - body content present")


if __name__ == "__main__":
    main()

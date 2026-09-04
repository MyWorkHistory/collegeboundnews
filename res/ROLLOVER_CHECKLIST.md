# 2025–2026 → 2026–2027 rollover checklist

## A. Back up first

- Back up the full College Bound site.
- Download working copies of `/members/25-26issues/articles.php`, `/backissues/index.html`, `/members/articles.php` (if present), and a prior public archive `articles.php`.
- Do not delete or move the old member files until all tests pass.

## B. Archive completed 2025–2026 year

1. Create `/25-26issues/`.
2. Copy PDFs and `articles.php` from `/members/25-26issues/` to `/25-26issues/`.
3. Update the copied archive `articles.php` so its PDF URLs point into `/25-26issues/`, not `/members/25-26issues/`.
4. Add **2025-2026 Issues** at the top of `/backissues/index.html` linking to `/25-26issues/articles.php`.
5. Test every archived month publicly.

## C. Build the new current-year area

1. Create `/members/26-27issues/`.
2. Copy the old `articles.php` only as a structural template.
3. Change the page heading to **2026-2027 Issues**.
4. Change the volume to **Volume 41**.
5. Remove all 2025–2026 month listings from the new copy.
6. Upload `issue.css`.
7. Generate `Sept26.html` from the supplied September Word file.
8. Upload `Sept26.html`.
9. Add **September 2026** to the new `articles.php` and link it to `Sept26.html`.
10. Do not create or link `Sept26.pdf` under the new workflow unless the client explicitly asks for a parallel downloadable PDF later.

## D. Switch Current Issues only after the new page works

- Identify the actual controller/link/redirect for Current Issues.
- If `/members/articles.php` contains a hard-coded `25-26issues` path, change it to `26-27issues`.
- Do not modify routing if the site already resolves the current year dynamically.

## E. Final QA

- Current Issues opens 2026–2027.
- Page shows Volume 41.
- September 2026 appears and opens HTML.
- September HTML works on desktop and phone.
- All source editorial content is present and in source order.
- Back Issues → 2025–2026 works publicly.
- All 2025–2026 PDF links work without member paths.
- No new-page references still point to 25–26.
- Keep old member files until the client approves the rollout.

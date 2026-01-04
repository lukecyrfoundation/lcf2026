# Definition of Done

## Purpose
This document defines the minimum acceptable standard for any completed task, pull request, or phase in the **LCF 2025 theme modernization** project.

No task is considered complete unless all applicable criteria below are met.

---

## 1. Functional Correctness
* All existing site functionality remains intact unless explicitly approved otherwise.
* No regressions in:
  * navigation
  * donations or forms
  * critical content pages
* PHP errors and warnings must be **zero** with `WP_DEBUG` enabled.
* Responsive behavior must be verified on mobile and desktop breakpoints.
* **Editorial Safety:** Content editors must be able to edit existing pages without layout breakage.

---

## 2. Performance Requirements
All performance work must demonstrate **measurable improvement** or **no regression**.

### Baseline rules
* Measure on **mobile first**
* Use the same page and test method before and after
* Performance must be measured and recorded for any task that touches templates, assets, or media.

### Targets
* Lighthouse Performance score: **no regression**
* Largest Contentful Paint (LCP): improved or unchanged
* Cumulative Layout Shift (CLS): **≤ 0.1**
* Total page weight: reduced where applicable
* Render blocking resources: reduced or unchanged

Performance changes must be documented in the PR description.

---

## 3. Accessibility (Minimum Standard)
Accessibility is a baseline requirement, not an enhancement.

Each PR must confirm:
* Valid heading hierarchy
* Proper landmarks (`header`, `main`, `footer`)
* Visible focus states
* Forms use associated `<label>` elements
* Interactive elements are keyboard accessible

If accessibility is out of scope for a specific task, this must be explicitly stated and justified.

---

## 4. Code Quality and Architecture
* **Build Integrity:** Changes to styles must be made in SCSS source files, not compiled CSS. `npm run build` must complete without errors.
* **Modernization:** Changes to global design values (colors, typography, spacing) must be expressed via `theme.json` once introduced.
* Code follows WordPress Coding Standards.
* Theme PHP functions are namespaced or prefixed.
* No new global variables unless unavoidable.
* No duplicated logic across templates.
* No unused CSS or JS introduced.

Refactors must be scoped to the task. Broad rewrites are not allowed without prior approval.

---

## 5. Asset Management
* Scripts and styles are enqueued properly via `functions.php`.
* Assets load only where required. Global enqueues must be justified.
* **No new jQuery:** jQuery dependency must not be expanded.
* **Bootstrap containment:** Bootstrap usage must not expand beyond existing scope; prefer custom CSS for new features.
* New assets must have a clear purpose and removal path.

---

## 6. Security
* All output is properly escaped.
* All input is sanitized.
* No hardcoded secrets or API keys.
* No new inline scripts unless unavoidable.

Security-related changes must be documented.

---

## 7. Documentation
Each completed task must update documentation if applicable:
* `Theme Inventory.md` (critical for tracking asset/template changes).
* Inline code comments where logic is non-obvious.
* PR description includes:
  * summary of changes
  * risks
  * testing performed

---

## 8. GitHub Workflow
* One task per branch.
* One focused PR per branch.
* PR must:
  * pass CI checks (if configured)
  * include before/after notes
  * include screenshots for UI changes

---

## 9. Explicit Non Goals (Phase 1)
The following are **not** considered part of completion unless explicitly approved:
* Full block theme conversion
* Visual redesign or rebranding
* Plugin replacement
* Major content restructuring

---

## 10. Acceptance
A task or phase is considered **Done** only when:
* All relevant sections above are satisfied
* No known regressions exist
* Documentation is updated
* Changes are reviewed and merged

---

## How to use this document
* **Agents:** Read this file before generating code. Verify your output against Sections 1, 4, and 5 specifically.
* **Humans:** Use this as the checklist during PR review.

---

## Final note
This definition favors:
* stability over novelty
* measured improvement over refactors
* long-term maintainability over short-term speed

If a change violates this philosophy, it is not done.
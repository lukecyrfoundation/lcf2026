# Codex Prompt Templates

## Purpose
This document defines the **standard prompt formats** used when working with the Codex agent on the **LCF 2025 theme modernization** project.

All Codex work must:
- reference existing project documentation
- remain scoped to a single task per branch
- comply with `Definition of Done.md`
- avoid speculative refactors or architectural drift

Codex is treated as a junior engineer operating under strict constraints.

---

## Global Rules (Applies to All Prompts)

Every Codex prompt must implicitly or explicitly enforce the following:

- WordPress 6.9+
- PHP 8.4
- Bootstrap 5.3.x (no expansion of usage)
- No new jQuery usage
- SCSS is the source of truth for styles
- `functions.php` controls all asset loading
- Accessibility is baseline, not optional
- Performance must be measured if assets or templates are touched

Codex must consult:
- `Theme Inventory.md`
- `Definition of Done.md`
- Website Audit PDF
- Theme Codebase Review PDF

---

## Required Prompt Structure

Every Codex prompt must follow this structure exactly.

### Prompt Template

**Task**  
One clear sentence describing the goal. No compound tasks.

**Context**  
Short explanation of why this task exists. Reference relevant files or audits.

**Files to Touch**  
Explicit list of files Codex is allowed to modify.  
Anything not listed must not be changed.

**Constraints**  
Non-negotiable technical rules.

**Acceptance Criteria**  
Bullet list of measurable outcomes.

**Testing Steps**  
Exact steps a human will perform to verify the work.

**Out of Scope**  
Explicit list of things Codex must not attempt.

---

## Prompt Template (Copy/Paste)

```text
Task:
[One sentence. One outcome.]

Context:
This task supports Option A modernization and must comply with Theme Inventory.md and Definition of Done.md.

Files to Touch:
- [file path]
- [file path]

Constraints:
- WordPress 6.9+
- PHP 8.4
- Bootstrap 5.3.x
- No new jQuery
- SCSS source only (no compiled CSS edits)
- Assets must be conditionally loaded
- Accessibility baseline required

Acceptance Criteria:
- [Measurable outcome]
- [Measurable outcome]
- [No regressions]

Testing Steps:
1. [Exact step]
2. [Exact step]
3. [Expected result]

Out of Scope:
- Visual redesign
- Plugin changes
- Broad refactors

---
## Phase 0 Prompt Templates (Baseline & Guardrails)

### Prompt: Baseline Metrics Documentation

Task:
Create baseline performance documentation for the homepage and one interior page.

Context:
This establishes before-metrics required by Definition of Done.md before modernization begins.

Files to Touch:
- knowledge_bank/testing/baseline_metrics.md

Constraints:
- No code changes
- Measure mobile first

Acceptance Criteria:
- Lighthouse metrics recorded
- Page weight noted
- Core Web Vitals noted

Testing Steps:
1. Run Lighthouse on homepage (mobile)
2. Run Lighthouse on one interior page
3. Record results in markdown

Out of Scope:
- Any theme or asset changes

### Prompt: CI Linting Setup

Task:
Add basic PHP linting and WordPress Coding Standards checks.

Context:
Prevents regressions during modernization.

Files to Touch:
- .github/workflows/[workflow file]

Constraints:
- No theme logic changes
- CI must fail on syntax errors

Acceptance Criteria:
- CI runs on PR
- CI fails on PHP errors

Testing Steps:
1. Push branch
2. Verify CI runs
3. Verify failure on broken PHP

Out of Scope:
- Feature development

---

## Phase 1 Prompt Templates (Performance)

### Prompt: Hero Image Modernization

Task:
Convert the homepage hero image to modern formats and implement responsive delivery.

Context:
Hero image is a primary LCP bottleneck identified in the audit.

Files to Touch:
- front-page.php
- lib/img/
- functions.php (if needed)

Constraints:
- Use WebP and AVIF with fallback
- No visual change
- Prevent CLS

Acceptance Criteria:
- Hero image size reduced
- LCP improves or stays neutral
- CLS ≤ 0.1

Testing Steps:
1. Load homepage on mobile
2. Confirm image renders correctly
3. Verify no layout shift

Out of Scope:
- Changing copy or layout

### Prompt: Asset Deferment and Cleanup

Task:
Defer non-critical scripts and remove unnecessary render-blocking assets.

Context:
Audit identified blocking JS and global asset loading.

Files to Touch:
- functions.php

Constraints:
- No new libraries
- Preserve existing behavior

Acceptance Criteria:
- Fewer render-blocking resources
- No JS errors
- Navigation and forms still function

Testing Steps:
1. Load pages with DevTools open
2. Verify no console errors
3. Test navigation and donation flow

Out of Scope:
- Rewriting JS logic

---

## Phase 2 Prompt Templates (Accessibility)

### Prompt: Form Label Remediation

Task:
Ensure all form inputs have associated labels.

Context:
Accessibility audit flagged missing or placeholder-only labels.

Files to Touch:
- page templates containing forms
- related partials

Constraints:
- Do not alter form behavior
- Labels may be visually hidden if needed

Acceptance Criteria:
- All inputs have labels
- Keyboard navigation works
- Screen reader compatible

Testing Steps:
1. Tab through form
2. Inspect label association
3. Confirm no layout issues

Out of Scope:
- Plugin replacement

---

## Phase 3 Prompt Templates (Architecture)

### Prompt: Introduce theme.json Tokens

Task:
Introduce theme.json with initial design tokens.

Context:
Moves global design values out of ad hoc CSS.

Files to Touch:
- theme.json
- SCSS files (as needed)

Constraints:
- No visual redesign
- Tokens must reflect existing styles

Acceptance Criteria:
- theme.json loads without errors
- Styles remain visually consistent

Testing Steps:
1. Load multiple pages
2. Confirm typography and colors unchanged

Out of Scope:
- Block theme conversion

---

## Phase 4 Prompt Templates (Security)

### Prompt: Output Escaping Audit

Task:
Audit and fix output escaping in theme templates.

Context:
Security review requires strict escaping for all output.

Files to Touch:
- Template files with dynamic output

Constraints:
- No logic changes
- Use WordPress escaping functions

Acceptance Criteria:
- All dynamic output escaped
- No PHP warnings

Testing Steps:
1. Load pages with WP_DEBUG enabled
2. Verify no warnings or errors

Out of Scope:
- Plugin code

---

## Codex Behavior Rules
Codex must:
- Ask for clarification if scope is ambiguous
- Avoid touching files not listed
- Avoid refactors beyond task
- Never introduce new dependencies
- Reference Definition of Done.md internally

Failure to follow these rules invalidates the PR.

## Final Note
This prompt system exists to:
- reduce cognitive load
- prevent scope creep
- enable safe parallel work
- keep the site stable while modernizing

If a task cannot be expressed using these templates, it is too large and must be split.

# Pull Request Checklist — LCF Theme Modernization

## Summary

**What does this PR do?**
One clear sentence. One outcome. No compound work.

---

## Scope Control

* [ ] This PR addresses **one task only**
* [ ] No files outside the declared scope were modified
* [ ] No undocumented architectural changes introduced

If scope expanded, explain **why** and **where it is documented**.

---

## Files Touched

*List all files changed. Nothing else should be modified.*

*
*
*

---

## Functional Correctness

* [ ] Navigation works on desktop and mobile
* [ ] Donation flows complete end-to-end
* [ ] Forms submit successfully and show errors correctly
* [ ] No layout regressions on key pages
* [ ] WP_DEBUG enabled with **zero** PHP notices or warnings

---

## Performance Verification (Required if templates, assets, or media changed)

* [ ] Mobile-first testing performed
* [ ] Before/after metrics recorded
* [ ] No Lighthouse regression
* [ ] LCP improved or unchanged
* [ ] CLS ≤ 0.1
* [ ] Render blocking resources reduced or unchanged

## **Pages tested:**

*

---

## Accessibility Baseline

* [ ] Valid heading hierarchy
* [ ] Semantic landmarks (`header`, `main`, `footer`)
* [ ] Visible focus states
* [ ] All form inputs have associated `<label>`
* [ ] Keyboard navigation verified

If accessibility was explicitly out of scope, explain why.

---

## Asset & Dependency Discipline

* [ ] Assets enqueued via `functions.php`
* [ ] Assets load only where required
* [ ] No new global assets without justification
* [ ] No new jQuery introduced
* [ ] Bootstrap usage **not expanded**
* [ ] New UI uses theme-owned components where applicable

---

## Security

* [ ] All dynamic output properly escaped
* [ ] All input sanitized
* [ ] No hardcoded secrets or keys
* [ ] No new inline scripts without justification

**Rule reminder:** sanitize on input, escape on output.

---

## Integration Safety

* [ ] Donation plugins verified
* [ ] Forms verified
* [ ] Analytics/tracking unaffected
* [ ] Graceful behavior if plugins are disabled

---

## Documentation Updates

* [ ] Theme Inventory updated if templates/assets changed
* [ ] Decision Log updated if architectural decisions were made
* [ ] Inline comments added where logic is non-obvious

---

## Testing Performed

*Check all that apply.*

* [ ] Local environment
* [ ] Staging
* [ ] Mobile viewport
* [ ] Desktop viewport

Describe any manual testing performed beyond the checklist.

---

## Screenshots (Required for UI changes)

*Before and after screenshots.*

---

## Out of Scope Confirmation

This PR does **not**:

* [ ] Introduce a visual redesign
* [ ] Replace plugins
* [ ] Perform broad refactors
* [ ] Convert to a block theme

---

## Reviewer Notes

*Risks, follow-ups, or items to watch.*

---

### Review Policy

PRs may be **rejected without revision** if:

* any checkbox is skipped without explanation
* scope exceeds one task
* performance or accessibility is unverified
* documentation is not updated where required
# Testing Playbook

## Purpose
Define a repeatable, auditable testing process to ensure quality and prevent regressions.

Testing is mandatory for every task.

---

## Functional Smoke Tests

### Navigation
- Main menu loads
- Mobile menu opens/closes
- Footer links functional

### Donations
- Donation page loads
- Payment redirect works
- Confirmation page renders
- No JS or PHP errors

### Forms
- Contact form submission
- Validation errors display correctly
- Success messages appear

### Content
- Key pages render correctly:
  - Home
  - About
  - Donate
  - Road to Resilience
  - Resources
- No layout breakage in editor

---

## Responsive Testing
- Mobile (small viewport)
- Tablet
- Desktop

---

## Performance Testing
- Lighthouse run (mobile + desktop)
- Core Web Vitals comparison
- No regressions allowed without approval

---

## Accessibility Checks
- Keyboard navigation
- Focus states visible
- Color contrast acceptable
- Semantic markup preserved

---

## Error Checks
- WP_DEBUG enabled
- Zero PHP warnings or notices
- No JS console errors

---

## Sign-Off
A task is not complete until all applicable tests pass.
# Theme Inventory

## Theme Name
**LCF 2025**
* **Version:** 0.1
* **Status:** Active custom theme, pre-modernization
* **Author:** Mark Carlucci

---

## Key Templates
Primary PHP templates responsible for page rendering.
* `front-page.php`
    * **Role:** Homepage layout.
    * **Context:** Likely contains heavy media usage and custom queries unique to the landing experience. Performance critical.
* `page.php`
    * **Role:** Default page template.
    * **Context:** Fallback for static content.
* `single.php`
    * **Role:** Single post template.
    * **Context:** Standard blog post layout.
* `page-templates/blog.php`
    * **Role:** Blog index/listing.
    * **Context:** Custom template for aggregating posts.
* `page-templates/events.php`
    * **Role:** Events listing.
    * **Context:** Custom template, likely interfaces with an events custom post type or category.
* `page-templates/poems.php`
    * **Role:** Poem archive.
    * **Context:** Custom template specific to the "Poems" content type.

---

## Key Components
Shared structural files and reusable partials.
* `header.php`
    * **Role:** Global navigation and branding.
    * **Dependencies:** Loads Google Fonts (`Lato`, `Montserrat`) and Bootstrap Icons.
* `footer.php`
    * **Role:** Footer navigation and credits.
* `functions.php`
    * **Role:** Theme setup, asset management, and logic.
    * **Status:** Primary modernization target. Contains functional logic mixed with configuration.
* `templates/content/poem.php`
    * **Role:** Content fragment.
    * **Context:** Reusable markup for individual poem entries.
* `templates/content/single.php`
    * **Role:** Content fragment.
    * **Context:** Reusable markup for single post content.

---

## CSS and JS Entry Points

### CSS
**Enqueued frontend styles**
* `lib/css/custom_bs.css`
    * **Intent:** Bootstrap overrides and custom layout rules.
    * **Risk:** Likely contains significant legacy code and unused selectors. Needs audit before refactoring.
* `lib/css/main.css`
    * **Intent:** Theme-specific styling.
    * **Scope:** Global load.
* `style.css`
    * **Intent:** WordPress theme metadata only. Not used for styling.

**Source Pipeline**
* **Location:** `lib/scss`
* **Entry:** `custom.scss` (Primary)
* **Build:** npm scripts (`build`, `watch`) using Sass.
* **Deficiency:** No clear separation of critical vs. non-critical CSS.

### JavaScript
**Enqueued scripts**
* `lib/js/bootstrap.min.js`
    * **Intent:** Bootstrap 5 framework logic.
    * **Dependency:** Loaded globally.
* `jquery`
    * **Intent:** Legacy DOM manipulation.
    * **Status:** **High Priority Audit.** Determine if this is required by plugins or if it can be removed in favor of vanilla JS.

---

## Critical Plugins and Integrations
*Note: These are system-level dependencies inferred from the theme structure. They affect modernization decisions.*

**Theme-adjacent systems (Requires Audit)**
* **Donation / Forms:** Specific plugins unknown (TBD). Critical for functional parity during rebuild.
* **SEO:** No explicit theme support found beyond basic title tags.
* **Analytics:** Scripts likely hardcoded in header/footer (TBD).

**Frontend Libraries**
* **Bootstrap 5.3.0:** Core framework (Local asset). Used for grid and components. Long-term goal is partial decoupling in favor of tokenized styles.
* **Bootstrap Icons 1.11.3:** Icon set (CDN).
* **Google Fonts:** Lato, Montserrat (CDN).

---

## Known Issues / Modernization Targets
* **Architecture:** No `theme.json` configuration. Global scope for all assets creates unnecessary bloat.
* **CSS:** Stylesheets are split arbitrarily (`custom_bs` vs `main`) rather than modularly.
* **JavaScript:** jQuery dependency forces legacy load mode. No module/bundler system for JS (plain script tags).
* **Accessibility:** Likely inconsistent given the lack of standardized component usage in templates.
* **Editorial Risk:** Layout consistency depends on PHP templates rather than reusable patterns or editor-level constraints.

---

## Non Goals (Phase 1)
* Full block theme conversion
* Visual redesign or rebranding
* Plugin replacement unless required for security or performance
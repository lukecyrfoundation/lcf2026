# Plugin & Integrations Inventory

## Purpose
This document defines all plugins and external integrations that the theme must support without regression.

Theme work must assume these are required unless explicitly deprecated.

---

## Donations & Payments
- PayPal integration
- Donation forms (custom or plugin-based)
- Recurring and one-time donation flows
- Confirmation and redirect behavior

## Forms
- Contact forms
- Newsletter signup forms
- Event or volunteer submission forms
- Validation and error states

## Analytics & Tracking
- Google Analytics or equivalent
- Facebook / Meta pixel (if present)
- Conversion tracking for donations

## SEO
- SEO plugin (Yoast, RankMath, or equivalent)
- Schema output
- Meta title and description handling

## Caching & Performance
- Server-side caching (host-level)
- Plugin-based caching if enabled
- Asset minification rules

## Security
- Security plugin (Wordfence or similar)
- Login protection
- Firewall considerations

## Content & Media
- Media optimization plugins
- Image compression
- Responsive image handling

## Shortcodes & Custom Blocks
- Donation shortcodes
- Campaign embeds
- Road to Resilience components
- Crisis messaging banners

## Editorial Dependencies
- Gutenberg blocks
- Classic editor compatibility
- Custom fields or ACF usage

---

## Integration Rules
- Theme must not hardcode plugin internals
- Graceful degradation required
- No fatal errors if plugin disabled
- Clear fallback UI where applicable

## Validation
Each release must verify:
- Donations work end-to-end
- Forms submit successfully
- Tracking events still fire
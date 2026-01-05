# Luke Cyr Foundation Website  
Theme Modernization Project (2025–2026)

## Purpose
This repository contains the documentation, standards, and operational knowledge required to modernize and maintain the Luke Cyr Foundation WordPress theme to a professional, performant, and accessible standard.

This project follows a controlled modernization approach:
- Improve performance, accessibility, and maintainability
- Preserve all existing site functionality
- Avoid unnecessary re-platforming or CMS disruption

## Project Goals
- Achieve measurable improvements in Core Web Vitals
- Maintain donation, form, and content integrity
- Modernize theme architecture without breaking editorial workflows
- Establish a sustainable, auditable development process

## Non-Goals
- No CMS migration
- No redesign of content strategy unless explicitly approved
- No plugin replacement unless required to fix regressions or security issues
- No visual redesign that breaks brand consistency

## Scope
- WordPress theme only
- PHP templates, CSS/SCSS, JS, assets
- Integration-aware but not plugin-owned development

## Repository Contents
- Theme Inventory
- Definition of Done
- Codex Prompt Templates
- Audits and reviews (PDF)
- Baseline metrics and testing documentation
- Decision log

## Environments
- Local development: WordPress with WP_DEBUG enabled
- Staging: mirrors production plugins and content
- Production: lukecyrfoundation.org

## Required Tooling
- Node.js (LTS)
- npm
- WordPress local environment
- Lighthouse / PageSpeed Insights

## Build Commands
Run these from `src/` (the Node workspace for this repo).
- npm ci
- npm run build
- npm run watch

## Development Workflow
1. Create a single-purpose branch per task
2. Implement changes
3. Run build pipeline
4. Validate against Definition of Done
5. Smoke test using Testing Playbook
6. Document changes if architectural
7. Merge only when complete

## Source of Truth
The following documents override assumptions:
- Definition of Done.md
- Decisions Log.md
- Plugin & Integrations Inventory.md

If a rule is not documented, it is not guaranteed.

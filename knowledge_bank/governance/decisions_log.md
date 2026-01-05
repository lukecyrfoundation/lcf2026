# Decisions Log

## Purpose
Record key architectural and strategic decisions to prevent re-litigation and drift.

---

## Decision Format
- Date
- Decision
- Context
- Impact
- Alternatives Considered

---

## Example Entry

### 2026-01-XX  
**Decision:** Retain Bootstrap 5

**Context:**  
Bootstrap is currently used across templates. Removing it would introduce high regression risk.

**Impact:**  
- Bootstrap remains allowed
- Usage must be controlled and scoped
- No unnecessary overrides

**Alternatives Considered:**  
- Full removal (rejected)
- Partial replacement (deferred)

---

## Active Principles
- Stability over novelty
- Measurable improvements only
- One change at a time
- No silent architectural shifts

This document is authoritative.
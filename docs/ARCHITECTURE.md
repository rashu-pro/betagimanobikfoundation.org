# Architecture — Betagi Manobik Foundation

> High-level overview of the site structure, page hierarchy, URL map,
> and how templates connect to Meta Box fields.
>
> **Keep this file updated** whenever a new page is added, a URL slug changes,
> a template is created, or the tab/routing structure on any page changes.

---

## Site Overview

| Property | Value |
|---|---|
| Domain | betagimanobikfoundation.org |
| CMS | WordPress |
| Language | Bangla (bn-BD) |
| Theme | GeneratePress + generatepress-child |
| Custom Fields | Meta Box plugin |
| Design Source | Stitch + Claude |

---

## Theme File Structure

```
wp-content/themes/generatepress-child/
├── style.css                        # Child theme header + custom CSS
├── functions.php                    # Parent enqueue, hooks, font loading
├── templates/
│   ├── blank.php                    # Blank canvas — Stitch-designed pages
│   └── full-width.php               # Full width with GP header/footer
└── inc/
    └── meta-boxes/                  # Create folder on first registration
        ├── hero-fields.php          # Shared hero fields (bmf_hero)
        ├── home-fields.php          # Home page sections (bmf_home)
        ├── about-fields.php         # About Us page sections (bmf_about)
        ├── contact-fields.php       # Contact page fields (bmf_contact)
        ├── works-fields.php         # Our Works page fields (bmf_works)
        └── seo-fields.php           # SEO/meta fields (bmf_seo)
```

---

## Page Hierarchy & URL Map

| Page (Bangla) | Page (English) | URL Slug | Template | Field Groups | Design |
|---|---|---|---|---|---|
| হোম | Home | `/` | `blank.php` | `bmf_hero`, `bmf_home` | `designs/home.html` |
| আমাদের সম্পর্কে | About Us | `/about` | `blank.php` | `bmf_hero`, `bmf_about` | `designs/about_us.html` |
| যোগাযোগ | Contact | `/contact` | `blank.php` | `bmf_hero`, `bmf_contact` | `designs/contact.html` |
| আমাদের কার্যক্রম | Our Works | `/our-works` | `blank.php` | `bmf_hero`, `bmf_works` | `designs/our_works.html` |

*(Expand this table as new pages are added)*

---

## How a Page Gets Built

```
Stitch Design
     ↓
Page Template (templates/blank.php)
     ↓
Meta Box Fields (bmf_ prefixed)
     ↓
rwmb_meta() calls in template PHP
     ↓
Rendered HTML page
```

### Example Flow — About Us Page

1. Editor opens **আমাদের সম্পর্কে** in WordPress admin
2. Selects **Blank Canvas** page template
3. Fills in Meta Box fields (history text, team members, reports etc.)
4. `templates/blank.php` renders by calling `rwmb_meta('bmf_*')` fields
5. Tab routing via URL param: `?tab=history`, `?tab=team`, etc.

---

## Tab Convention

The About Us page is a **single-scroll layout** (not a tab-routed page). Only the **Income-Expenditure Policy** section uses a 3-tab switch, driven by JavaScript click events (not URL params).

| Tab (Bangla) | Tab (English) | JS ID |
|---|---|---|
| আয়ের উৎস | Income Sources | `income-content` |
| সেবা ব্যয় | Service Expenditure | `service-content` |
| ব্যবস্থাপনা ব্যয় | Management Expenditure | `management-content` |

Default visible tab: আয়ের উৎস (Income Sources)

---

## Meta Box Integration Pattern

Field groups are registered as separate files under `/inc/meta-boxes/` and loaded from `functions.php`:

```php
// functions.php
foreach ( glob( get_stylesheet_directory() . '/inc/meta-boxes/*.php' ) as $file ) {
    require_once $file;
}
```

Each field file follows the pattern in `docs/META-BOX-FIELDS.md`.

---

## WordPress Configuration Notes

- Permalink structure: `/%postname%/` (post name)
- `lang` attribute on `<html>`: `bn` (set in blank.php template)
- Hind Siliguri font enqueued globally via `functions.php`
- No page builder plugins — layout is entirely template-driven

---

## Decisions & Rationale

| Decision | Reason |
|---|---|
| GeneratePress over Blocksy | Lighter (~30KB), better for speed |
| Blank canvas template for custom pages | Prevents GP default styles conflicting with Stitch designs |
| Meta Box over ACF | Lighter, no bloat, code-first field registration |
| `bmf_` field prefix | Avoids collisions with plugins, clearly namespaced |
| Hind Siliguri font | Best Bangla rendering + Latin fallback in one font |
| URL param tab routing | Enables deep-linking to specific tabs without JS router |

---

## Future Pages (Planned)

Screenshots exist in `designs/assets/screenshots/` for all pages below.

| Page (Bangla) | Page (English) | URL Slug |
|---|---|---|
| ব্লগ | Blog | `/blog` |
| গ্যালারি | Gallery | `/gallery` |
| নোটিশ | Notice | `/notice` |
| দান করুন | Donate | `/donate` |
| আমাদের সাথে যুক্ত হন | Connect With Us | `/connect` |

*(Move to the pages table above when an HTML design file is ready)*

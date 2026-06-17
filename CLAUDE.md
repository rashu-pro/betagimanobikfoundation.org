# Betagi Manobik Foundation — WordPress Website

**Organization:** Betagi Manobik Foundation
**Website:** betagimanobikfoundation.org
**Language:** Bangla (bn-BD)

---

## Project Overview

Bangla-language WordPress website for Betagi Manobik Foundation.
Pages are designed in Stitch + Claude and implemented using a GeneratePress child theme with Meta Box custom fields.

---

## Stack

| Layer               | Tool                                           |
| ------------------- | ---------------------------------------------- |
| CMS                 | WordPress 7.0                                  |
| Theme               | GeneratePress (parent) + `generatepress-child` |
| Custom Fields       | Meta Box 5.12.1 (`plugins/meta-box/`)          |
| Design Tool         | Stitch + Claude                                |
| UI Language         | Bangla (bn-BD)                                 |
| Font                | Hind Siliguri (Google Fonts)                   |
| Primary Brand Color | `#008e48`                                      |
| Dark Brand Color    | `#0a251c`                                      |
| Accent Color        | `#fbbd08`                                      |

---

## Project Structure

```
wp-content/themes/generatepress-child/
├── style.css                  # Child theme styles — brand CSS goes here
├── functions.php              # Enqueue parent style, custom hooks
├── templates/
│   ├── blank.php              # Blank canvas — for all Stitch-designed pages
│   └── full-width.php         # Full width with GP header/footer
└── inc/
    └── meta-boxes/            # Meta Box field group registrations (create when first group is added)
```

> **Note:** The `inc/meta-boxes/` directory does not exist yet — create it when registering the first Meta Box field group. Meta Box plugin is installed and active (`wp-content/plugins/meta-box/`).

---

## Key Conventions

- All custom page templates go in `/templates/`
- Meta Box field groups are registered in `/inc/meta-boxes/`
- All field IDs are prefixed with `bmf_` (e.g. `bmf_hero_title`)
- Use `rwmb_meta()` to retrieve Meta Box fields in templates
- Custom CSS goes in `style.css` — never inline
- Bangla text always uses **Hind Siliguri** from Google Fonts
- Do NOT edit parent GeneratePress theme files directly
- Do NOT use Elementor or any page builder
- Do NOT use inline styles for brand colors

### Translation Compatibility

All PHP code in templates and `functions.php` must be written translation-ready:

- Wrap every hardcoded UI string in a translation function — never echo a raw string
- Text domain for this theme: `'generatepress-child'`
- Use the correct function for the context:

```php
// Output escaped — use for plain text
esc_html_e( 'আমাদের সম্পর্কে', 'generatepress-child' );

// Return escaped — use inside attributes or concatenation
$label = esc_html__( 'দান করুন', 'generatepress-child' );

// Output with allowed HTML (links, <strong> etc.)
echo wp_kses_post( __( 'আমাদের <strong>লক্ষ্য</strong>', 'generatepress-child' ) );

// Inside a printf/sprintf
printf(
    esc_html__( '%s জন উপকারভোগী', 'generatepress-child' ),
    esc_html( $count )
);
```

- Load the text domain in `functions.php`:

```php
add_action( 'after_setup_theme', function() {
    load_child_theme_textdomain(
        'generatepress-child',
        get_stylesheet_directory() . '/languages'
    );
});
```

- Translation strings go in `wp-content/themes/generatepress-child/languages/`
- Content entered via Meta Box fields (editor-controlled) does NOT need wrapping — only hardcoded template strings do

---

## Meta Box Usage

```php
// Text field
$value = rwmb_meta( 'bmf_field_id' );

// Image field
$image = rwmb_meta( 'bmf_image_field', ['size' => 'full'] );

// Repeater / group
$items = rwmb_meta( 'bmf_group_id' );
foreach ( $items as $item ) {
    echo $item['title'];
}
```

---

## Pages

| Page (Bangla)   | Page (English) | Template  | Status          |
| --------------- | -------------- | --------- | --------------- |
| হোম             | Home           | blank.php | Design complete |
| আমাদের সম্পর্কে | About Us       | blank.php | Design complete |
| যোগাযোগ         | Contact        | blank.php | Design complete |
| আমাদের কার্যক্রম | Our Works      | blank.php | Design complete |

_(Add new pages here as they are built)_

---

## Design System

- **Primary:** `#008e48`
- **Dark:** `#0a251c`
- **Accent (gold):** `#fbbd08`
- **Font:** Hind Siliguri, sans-serif
- **Tab/Nav active color:** `#008e48`
- **About Us page:** Single-scroll layout; only the Income-Expenditure Policy section has tabs (3 JS tabs, not URL-param routed)

Full design tokens → `docs/DESIGN-SYSTEM.md`

---

## References

> **Note:** The `docs/` folder does not exist yet. Create these files as the project grows.

- Full design tokens & spacing: `docs/DESIGN-SYSTEM.md` _(planned)_
- Meta Box field registry: `docs/META-BOX-FIELDS.md` _(planned)_
- Page architecture & URL structure: `docs/ARCHITECTURE.md` _(planned)_

---

## Out of Scope

- No Elementor or other page builders
- No inline styles
- No direct edits to GeneratePress parent theme
- No English-language UI (site is Bangla-first)

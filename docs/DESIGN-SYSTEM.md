# Design System — Betagi Manobik Foundation

> Reference this file when building or styling any page template.
> All values here come from the Stitch + Claude designs.
>
> **Keep this file updated** whenever a color, spacing value, font setting,
> or reusable component changes in the designs or in `style.css`.

---

## Brand Colors

| Token | Hex | Usage |
|---|---|---|
| `--color-primary` | `#008e48` | Buttons, active tabs, links, headings |
| `--color-primary-dark` | `#0a251c` | Dark hero/footer backgrounds |
| `--color-primary-light` | `#E8F5F1` | Highlighted cards, light backgrounds |
| `--color-accent` | `#fbbd08` | CTA highlights, badges, donation amounts |
| `--color-accent-light` | `#FFF8E1` | Light yellow backgrounds |
| `--color-text` | `#1A1A1A` | Body text |
| `--color-text-muted` | `#6B7280` | Secondary text, captions |
| `--color-border` | `#E5E7EB` | Dividers, card borders |
| `--color-white` | `#FFFFFF` | Card backgrounds, nav |
| `--color-bg` | `#F9FAFB` | Page background |

### CSS Variables (add to style.css)

```css
:root {
  --color-primary:       #008e48;
  --color-primary-dark:  #0a251c;
  --color-primary-light: #E8F5F1;
  --color-accent:        #fbbd08;
  --color-accent-light:  #FFF8E1;
  --color-text:          #1A1A1A;
  --color-text-muted:    #6B7280;
  --color-border:        #E5E7EB;
  --color-white:         #FFFFFF;
  --color-bg:            #F9FAFB;
}
```

---

## Typography

### Font Family

| Role | Font | Source |
|---|---|---|
| Primary (Bangla + Latin) | Hind Siliguri | Google Fonts |
| Fallback | sans-serif | System |

### Google Fonts Import

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

Or enqueue in `functions.php`:

```php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'hind-siliguri',
        'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap',
        [],
        null
    );
});
```

### Type Scale

| Token | Size | Weight | Usage |
|---|---|---|---|
| `--text-xs` | `0.75rem / 12px` | 400 | Labels, badges |
| `--text-sm` | `0.875rem / 14px` | 400 | Captions, meta |
| `--text-base` | `1rem / 16px` | 400 | Body text |
| `--text-lg` | `1.125rem / 18px` | 500 | Lead text |
| `--text-xl` | `1.25rem / 20px` | 600 | Card titles |
| `--text-2xl` | `1.5rem / 24px` | 600 | Section headings |
| `--text-3xl` | `1.875rem / 30px` | 700 | Page headings |
| `--text-4xl` | `2.25rem / 36px` | 700 | Hero headings |

```css
:root {
  --text-xs:   0.75rem;
  --text-sm:   0.875rem;
  --text-base: 1rem;
  --text-lg:   1.125rem;
  --text-xl:   1.25rem;
  --text-2xl:  1.5rem;
  --text-3xl:  1.875rem;
  --text-4xl:  2.25rem;
}
```

### Line Height

- Body: `1.7` (important for Bangla readability)
- Headings: `1.3`

---

## Spacing Scale

```css
:root {
  --space-1:  0.25rem;   /*  4px */
  --space-2:  0.5rem;    /*  8px */
  --space-3:  0.75rem;   /* 12px */
  --space-4:  1rem;      /* 16px */
  --space-5:  1.25rem;   /* 20px */
  --space-6:  1.5rem;    /* 24px */
  --space-8:  2rem;      /* 32px */
  --space-10: 2.5rem;    /* 40px */
  --space-12: 3rem;      /* 48px */
  --space-16: 4rem;      /* 64px */
  --space-20: 5rem;      /* 80px */
}
```

---

## Layout

| Token | Value | Usage |
|---|---|---|
| Max content width | `1200px` | Main container |
| Content padding (desktop) | `0 2rem` | Side gutters |
| Content padding (mobile) | `0 1rem` | Side gutters |
| Section vertical padding | `4rem 0` | Desktop |
| Section vertical padding | `2.5rem 0` | Mobile |

```css
.bmf-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

@media (max-width: 768px) {
  .bmf-container {
    padding: 0 1rem;
  }
}
```

---

## Border Radius

```css
:root {
  --radius-sm:   4px;
  --radius-md:   8px;
  --radius-lg:   12px;
  --radius-xl:   16px;
  --radius-full: 9999px;
}
```

---

## Shadows

```css
:root {
  --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
  --shadow-md: 0 4px 12px rgba(0,0,0,0.10);
  --shadow-lg: 0 8px 24px rgba(0,0,0,0.12);
}
```

---

## Components

### Tabs

Used in the About Us income-expenditure policy section (3 tabs). Switching is JavaScript-driven (not URL params).

- Active tab: `background: var(--color-primary)`, `color: #fff`
- Inactive tab: `background: transparent`, `color: var(--color-primary)`, `border: 1px solid var(--color-primary)`
- Tab bar border-bottom: `2px solid var(--color-primary)`

```javascript
function switchTab(tab) {
  document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById(tab + '-content').classList.remove('hidden');
  document.querySelector(`[data-tab="${tab}"]`).classList.add('active');
}
```

### Buttons

```css
/* Primary */
.bmf-btn-primary {
  background: var(--color-primary);
  color: #fff;
  padding: var(--space-3) var(--space-6);
  border-radius: var(--radius-md);
  font-family: 'Hind Siliguri', sans-serif;
  font-weight: 600;
  border: none;
  cursor: pointer;
}
.bmf-btn-primary:hover {
  background: var(--color-primary-dark);
}

/* Accent (gold) — used for donation CTAs */
.bmf-btn-accent {
  background: var(--color-accent);
  color: var(--color-primary-dark);
  padding: var(--space-3) var(--space-6);
  border-radius: var(--radius-md);
  font-family: 'Hind Siliguri', sans-serif;
  font-weight: 700;
  border: none;
  cursor: pointer;
}

/* Outline */
.bmf-btn-outline {
  background: transparent;
  color: var(--color-primary);
  border: 2px solid var(--color-primary);
  padding: var(--space-3) var(--space-6);
  border-radius: var(--radius-md);
  font-family: 'Hind Siliguri', sans-serif;
  font-weight: 600;
  cursor: pointer;
}
```

### Cards

```css
.bmf-card {
  background: var(--color-white);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
}
```

### Bento Grid

Used in About Us (history section) and Contact page layout.

```css
.bmf-bento {
  display: grid;
  gap: var(--space-4);
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
}
/* Spanning cells — use Tailwind col-span-2 or equivalent */
```

### Glassmorphism Card

Used in Contact page info cards.

```css
.bmf-glass-card {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: var(--radius-xl);
  padding: var(--space-6);
}
```

### Progress Bar

Used in Our Works and Home page fundraising campaigns.

```css
.bmf-progress-track {
  background: var(--color-border);
  border-radius: var(--radius-full);
  height: 8px;
  overflow: hidden;
}
.bmf-progress-fill {
  background: var(--color-primary);
  height: 100%;
  border-radius: var(--radius-full);
  transition: width 0.4s ease;
}
```

### Hero Gradient Overlay

Consistent across all page hero sections.

```css
.bmf-hero {
  position: relative;
  background-size: cover;
  background-position: center;
}
.bmf-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to right, rgba(10,37,28,0.85), rgba(0,142,72,0.6));
}
```

---

## Bangla Typography Notes

- Always use `font-family: 'Hind Siliguri', sans-serif`
- Set `line-height: 1.7` for body — Bangla conjuncts need more vertical space
- Avoid `letter-spacing` on Bangla text — breaks conjunct characters
- Avoid `text-transform` — has no effect on Bangla but can break mixed content
- Minimum font size for Bangla body text: `16px`
- Use `lang="bn"` on the `<html>` tag for correct rendering

---

## Breakpoints

| Name | Width | Usage |
|---|---|---|
| Mobile | `< 640px` | Single column |
| Tablet | `640px – 1024px` | 2-column |
| Desktop | `> 1024px` | Full layout |
| Wide | `> 1200px` | Constrained by max-width |

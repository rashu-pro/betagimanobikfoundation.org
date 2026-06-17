# Meta Box Field Registry — Betagi Manobik Foundation

> All Meta Box field groups and field IDs are documented here.
> Field ID prefix convention: `bmf_`
>
> **Keep this file updated** whenever a field group or individual field is added,
> removed, or renamed — and log the change in the Changelog at the bottom.

---

## How to Retrieve Fields in Templates

```php
// Single value
$value = rwmb_meta( 'bmf_field_id' );

// Image (returns URL)
$image_url = rwmb_meta( 'bmf_image_field', ['size' => 'full'] );

// Repeater / group (returns array)
$items = rwmb_meta( 'bmf_group_id' );
foreach ( $items as $item ) {
    echo $item['sub_field_id'];
}

// Output with fallback
echo rwmb_meta( 'bmf_title' ) ?: 'Default Title';
```

---

## Field Groups

---

### 1. Hero Section — `bmf_hero`

**File:** `inc/meta-boxes/hero-fields.php`
**Post type:** `page`
**Used on:** All pages (Home, About Us, Contact, Our Works)

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_hero_title` | Text | হিরো শিরোনাম | Main heading |
| `bmf_hero_subtitle` | Textarea | হিরো সাবটাইটেল | Supporting text |
| `bmf_hero_image` | Image | হিরো ছবি | Background image with gradient overlay |
| `bmf_hero_cta_text` | Text | বাটন টেক্সট | Primary CTA label |
| `bmf_hero_cta_url` | URL | বাটন লিঙ্ক | Primary CTA URL |
| `bmf_hero_cta2_text` | Text | দ্বিতীয় বাটন টেক্সট | Secondary CTA label (optional) |
| `bmf_hero_cta2_url` | URL | দ্বিতীয় বাটন লিঙ্ক | Secondary CTA URL (optional) |

---

### 2. Home Page — `bmf_home`

**File:** `inc/meta-boxes/home-fields.php`
**Post type:** `page`
**Page:** হোম (`/`)
**Design:** `designs/home.html`

#### Services Section (3 fixed cards)

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_services` | Group (repeater) | সেবাসমূহ | Education, Self-reliance, Disaster Relief |
| `bmf_services.title` | Text | সেবার নাম | |
| `bmf_services.description` | Textarea | বিবরণ | |
| `bmf_services.icon` | Text | আইকন | Material Symbols icon name |

#### Ongoing Projects Section

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_projects` | Group (repeater) | চলমান প্রকল্প | Fundraising campaigns with progress bars |
| `bmf_projects.title` | Text | প্রকল্পের নাম | |
| `bmf_projects.description` | Textarea | বিবরণ | |
| `bmf_projects.image` | Image | প্রকল্পের ছবি | |
| `bmf_projects.goal_amount` | Number | লক্ষ্যমাত্রা (টাকা) | Target donation amount |
| `bmf_projects.raised_amount` | Number | সংগৃহীত (টাকা) | Amount raised so far |

#### Donation Categories Section

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_donation_categories` | Group (repeater) | দানের ধরন | Zakat, General, Emergency etc. |
| `bmf_donation_categories.title` | Text | ধরনের নাম | e.g. যাকাত |
| `bmf_donation_categories.description` | Textarea | বিবরণ | |
| `bmf_donation_categories.icon` | Text | আইকন | Material Symbols icon name |

#### Media Section

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_media_video_url` | URL | ভিডিও লিঙ্ক | YouTube or direct video URL |
| `bmf_media_thumbnail` | Image | ভিডিও থাম্বনেইল | Displayed with play button overlay |

---

### 3. About Us Page — `bmf_about`

**File:** `inc/meta-boxes/about-fields.php`
**Post type:** `page`
**Page:** আমাদের সম্পর্কে (`/about`)
**Design:** `designs/about_us.html`
**Layout:** Single-scroll page with multiple sections (not tab-routed)

#### Mission & Local Roots Section

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_about_mission_text` | Textarea | লক্ষ্য বিবরণ | Mission statement paragraph |
| `bmf_about_roots_text` | Textarea | স্থানীয় শিকড় | Local roots narrative paragraph |
| `bmf_about_stats` | Group (repeater) | পরিসংখ্যান | Stats boxes (members, year, branches etc.) |
| `bmf_about_stats.label` | Text | লেবেল | e.g. সদস্য সংখ্যা |
| `bmf_about_stats.value` | Text | মান | e.g. ৫০০+ |

#### History Section (Bento Grid)

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_history_content` | WYSIWYG | ইতিহাসের বিবরণ | Full founding story |
| `bmf_history_founded_year` | Text | প্রতিষ্ঠার বছর | e.g. ২০১০ |
| `bmf_history_image` | Image | ঐতিহাসিক ছবি | Historical photo for bento grid |

#### Global Connection Section (Expat Branches)

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_expat_branches` | Group (repeater) | প্রবাসী শাখা | e.g. ওমান, কাতার |
| `bmf_expat_branches.country` | Text | দেশ | Country name in Bangla |
| `bmf_expat_branches.details` | Textarea | বিবরণ | Branch description |
| `bmf_expat_branches.image` | Image | ছবি | Branch or country image |

#### Income-Expenditure Policy Section (3 JS tabs)

| Field ID | Type | Label (Bangla) | Tab |
|---|---|---|---|
| `bmf_income_sources` | WYSIWYG | আয়ের উৎস বিবরণ | আয়ের উৎস |
| `bmf_service_expenditure` | WYSIWYG | সেবা ব্যয় বিবরণ | সেবা ব্যয় |
| `bmf_management_expenditure` | WYSIWYG | ব্যবস্থাপনা ব্যয় বিবরণ | ব্যবস্থাপনা ব্যয় |

---

### 4. Contact Page — `bmf_contact`

**File:** `inc/meta-boxes/contact-fields.php`
**Post type:** `page`
**Page:** যোগাযোগ (`/contact`)
**Design:** `designs/contact.html`

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_contact_address` | Textarea | ঠিকানা | Full postal address |
| `bmf_contact_phone` | Text | ফোন | Phone number(s) |
| `bmf_contact_email` | Text | ইমেইল | Contact email address |
| `bmf_contact_facebook_url` | URL | ফেসবুক লিঙ্ক | Facebook page URL |
| `bmf_contact_map_image` | Image | মানচিত্র ছবি | Screenshot or embed of map location |

---

### 5. Our Works Page — `bmf_works`

**File:** `inc/meta-boxes/works-fields.php`
**Post type:** `page`
**Page:** আমাদের কার্যক্রম (`/our-works`)
**Design:** `designs/our_works.html`

#### Activity Cards

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_works_activities` | Group (repeater) | কার্যক্রমসমূহ | Self-Reliance, Disaster Relief, Tree Planting, Education |
| `bmf_works_activities.title` | Text | কার্যক্রমের নাম | |
| `bmf_works_activities.description` | Textarea | বিবরণ | |
| `bmf_works_activities.image` | Image | ছবি | |
| `bmf_works_activities.goal_amount` | Number | লক্ষ্যমাত্রা (টাকা) | Target amount |
| `bmf_works_activities.raised_amount` | Number | সংগৃহীত (টাকা) | Raised so far (for progress bar) |

#### Stats Section

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_works_domestic_branches` | Text | দেশীয় শাখা | e.g. ১৫+ |
| `bmf_works_expat_units` | Text | প্রবাসী ইউনিট | e.g. ৬ |
| `bmf_works_volunteers` | Text | স্বেচ্ছাসেবক | e.g. ৫০০+ |
| `bmf_works_beneficiaries` | Text | উপকারভোগী | e.g. ৫০০০+ |

---

### 6. SEO / Meta — `bmf_seo`

**File:** `inc/meta-boxes/seo-fields.php`
**Post type:** `page`

| Field ID | Type | Label (Bangla) | Notes |
|---|---|---|---|
| `bmf_meta_title` | Text | মেটা শিরোনাম | Override page title for SEO |
| `bmf_meta_description` | Textarea | মেটা বিবরণ | SEO description (max 160 chars) |
| `bmf_og_image` | Image | OG ছবি | Social share image |

---

## Adding New Field Groups

When registering a new field group in `/inc/meta-boxes/`:

1. Use `bmf_` prefix for all field IDs
2. Add the group and all fields to this file immediately
3. Note which page/template the group applies to
4. Note the post type condition

### Registration Example

```php
// /inc/meta-boxes/contact-fields.php

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
    $meta_boxes[] = [
        'title'  => 'যোগাযোগ পৃষ্ঠা',
        'id'     => 'bmf_contact',
        'pages'  => ['page'],
        'fields' => [
            [
                'id'   => 'bmf_contact_address',
                'type' => 'textarea',
                'name' => 'ঠিকানা',
            ],
            [
                'id'   => 'bmf_contact_phone',
                'type' => 'text',
                'name' => 'ফোন',
            ],
        ],
    ];
    return $meta_boxes;
});
```

Load all field files from `functions.php`:

```php
foreach ( glob( get_stylesheet_directory() . '/inc/meta-boxes/*.php' ) as $file ) {
    require_once $file;
}
```

---

## Changelog

| Date | Change |
|---|---|
| 2026-06-18 | Initial field registry created |
| 2026-06-18 | Restructured to match actual HTML designs; added bmf_home, bmf_contact, bmf_works; revised bmf_about to match single-scroll layout |

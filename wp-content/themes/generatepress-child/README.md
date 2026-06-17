# GeneratePress Child Theme

Custom child theme for use with **Meta Box** plugin and **Stitch**-designed page templates.

## Included Page Templates

| Template | File | Use Case |
|---|---|---|
| Blank Canvas | `templates/blank.php` | Full custom pages, no GP header/footer |
| Full Width | `templates/full-width.php` | Full-width with site header/footer |

## Using Meta Box Fields in Templates

```php
// Get a text field
$value = rwmb_meta( 'your_field_id' );

// Get an image field
$image = rwmb_meta( 'your_image_field', ['size' => 'large'] );

// Get a repeater group
$items = rwmb_meta( 'your_group_id' );
foreach ( $items as $item ) {
    echo $item['title'];
}
```

## Installation
1. Upload this folder to `/wp-content/themes/`
2. Activate via **Appearance → Themes**
3. Make sure **GeneratePress** (parent) is also installed

## Adding Custom CSS
Edit `style.css` — your styles load after the parent theme.

## Adding Custom PHP
Edit `functions.php` — already set up to enqueue the parent stylesheet.

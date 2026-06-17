<?php
/**
 * Template Name: Blank Canvas
 * Description: Full-width blank template — no header, footer, or sidebar.
 *              Use this for Stitch-designed pages with Meta Box fields.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
// -----------------------------------------------
// Your page content goes here.
// Use Meta Box helper functions to pull fields:
//
//   $value = rwmb_meta( 'your_field_id' );
//   echo $value;
//
// Or use the_content() for the default editor.
// -----------------------------------------------
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

<?php wp_footer(); ?>
</body>
</html>

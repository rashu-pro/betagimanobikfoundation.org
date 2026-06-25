<?php
/**
 * Template Name: FAQ
 * Template Post Type: page
 *
 * @package generatepress-child
 */

add_filter( 'generate_sidebar_layout', fn() => 'no-sidebar' );

get_header();

get_template_part( 'template-parts/faq/hero' );
get_template_part( 'template-parts/faq/accordion' );
get_template_part( 'template-parts/faq/cta' );

get_footer();

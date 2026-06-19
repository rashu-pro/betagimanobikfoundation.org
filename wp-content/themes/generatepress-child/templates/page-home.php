<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * @package generatepress-child
 */

get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/services' );
get_template_part( 'template-parts/home/activities' );

get_footer();

<?php
/**
 * Template Name: Donate Page
 * Description: Donation page with bento grid layout.
 *              Loads modular template parts from template-parts/donate/.
 *
 * @package generatepress-child
 */

get_header();

get_template_part( 'template-parts/donate/hero' );
get_template_part( 'template-parts/donate/bento' );

get_footer();

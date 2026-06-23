<?php
/**
 * Template Name: About Us Page
 * Description: Single-scroll About Us page with Meta Box fields.
 *              Loads modular template parts from template-parts/about/.
 *
 * @package generatepress-child
 */

get_header();

get_template_part( 'template-parts/about/hero' );
get_template_part( 'template-parts/about/mission' );
get_template_part( 'template-parts/about/history' );
get_template_part( 'template-parts/about/global' );
get_template_part( 'template-parts/about/policy' );
get_template_part( 'template-parts/about/cta' );

get_footer();

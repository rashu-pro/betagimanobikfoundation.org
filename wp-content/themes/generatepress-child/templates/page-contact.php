<?php
/**
 * Template Name: Contact Page
 * Description: যোগাযোগ page with Meta Box fields.
 *              Loads modular template parts from template-parts/contact/.
 *
 * @package generatepress-child
 */

get_header();

get_template_part( 'template-parts/contact/hero' );
get_template_part( 'template-parts/contact/bento' );
get_template_part( 'template-parts/contact/cta' );

get_footer();

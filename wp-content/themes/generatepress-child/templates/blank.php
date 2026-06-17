<?php
/**
 * Template Name: Blank Canvas
 * Description: Full-width blank template — no sidebar.
 *              Use this for Stitch-designed pages with Meta Box fields.
 */

get_header();

while ( have_posts() ) :
	the_post();
	the_content();
endwhile;

get_footer();

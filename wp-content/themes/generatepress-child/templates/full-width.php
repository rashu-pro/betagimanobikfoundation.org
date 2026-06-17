<?php
/**
 * Template Name: Full Width (with Header & Footer)
 * Description: Full-width layout keeping GP header/footer.
 *              Good for landing pages that still need site navigation.
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();

        // -----------------------------------------------
        // Pull Meta Box custom fields here.
        // Example:
        //   $hero_title  = rwmb_meta( 'hero_title' );
        //   $hero_image  = rwmb_meta( 'hero_image', ['size' => 'full'] );
        // -----------------------------------------------

        the_content();

    endwhile;
    ?>
</main>

<?php get_footer(); ?>

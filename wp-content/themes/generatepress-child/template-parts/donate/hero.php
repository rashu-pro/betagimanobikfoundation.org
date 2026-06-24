<?php
/**
 * Donate page — Hero section
 *
 * @package generatepress-child
 */

$title    = rwmb_meta( 'bmf_donate_hero_title' );
$subtitle = rwmb_meta( 'bmf_donate_hero_subtitle' );

if ( ! $title && ! $subtitle ) {
    return;
}
?>
<section class="py-12 text-center bg-slate-50">
    <div class="container mx-auto px-4">
        <?php if ( $title ) : ?>
            <h1 class="text-3xl md:text-5xl text-primary mb-4">
                <?php echo esc_html( $title ); ?>
            </h1>
        <?php endif; ?>
        <?php if ( $subtitle ) : ?>
            <p class="text-base text-slate-500 max-w-2xl mx-auto">
                <?php echo esc_html( $subtitle ); ?>
            </p>
        <?php endif; ?>
    </div>
</section>

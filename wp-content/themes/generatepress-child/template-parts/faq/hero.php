<?php
/**
 * Template part: FAQ page — hero section
 *
 * @package generatepress-child
 */

$title    = rwmb_meta( 'bmf_faq_hero_title' ) ?: __( 'প্রায়শই জিজ্ঞাসিত প্রশ্নসমূহ', 'generatepress-child' );
$subtitle = rwmb_meta( 'bmf_faq_hero_subtitle' );

if ( ! $title ) {
	return;
}
?>

<section class="mb-12 text-center pt-12 px-4">
	<h1 class="text-3xl md:text-5xl text-primary mb-4">
		<?php echo esc_html( $title ); ?>
	</h1>
	<?php if ( $subtitle ) : ?>
		<p class="text-base text-slate-500 max-w-2xl mx-auto">
			<?php echo esc_html( $subtitle ); ?>
		</p>
	<?php endif; ?>
</section>

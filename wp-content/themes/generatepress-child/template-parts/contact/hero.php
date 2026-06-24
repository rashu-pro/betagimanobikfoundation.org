<?php
/**
 * Template part: Contact page — Hero section
 *
 * @package generatepress-child
 */

$hero_title    = rwmb_meta( 'bmf_contact_hero_title' );
$hero_subtitle = rwmb_meta( 'bmf_contact_hero_subtitle' );

if ( ! $hero_title ) {
	return;
}
?>

<section class="text-center container mx-auto px-4 pt-12 pb-4 mb-8">
	<h1 class="text-3xl md:text-5xl text-primary-dark mb-4 font-bold">
		<?php echo esc_html( $hero_title ); ?>
	</h1>
	<?php if ( $hero_subtitle ) : ?>
		<p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
			<?php echo esc_html( $hero_subtitle ); ?>
		</p>
	<?php endif; ?>
</section>

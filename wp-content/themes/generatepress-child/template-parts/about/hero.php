<?php
/**
 * Template part: About Us — Hero section
 *
 * @package generatepress-child
 */

$hero_image_raw = rwmb_meta( 'bmf_about_hero_image' );
$hero_image     = is_array( $hero_image_raw ) ? ( $hero_image_raw['full_url'] ?? $hero_image_raw['sizes']['large']['url'] ?? '' ) : (string) $hero_image_raw;
$hero_title    = rwmb_meta( 'bmf_about_hero_title' );
$hero_subtitle = rwmb_meta( 'bmf_about_hero_subtitle' );

if ( ! $hero_image && ! $hero_title ) {
	return;
}
?>

<section class="py-8 md:py-12 bg-slate-50">
	<div class="container mx-auto px-4">
		<div class="relative rounded-xl overflow-hidden h-[400px] md:h-[500px]">

			<?php if ( $hero_image ) : ?>
				<img
					src="<?php echo esc_url( $hero_image ); ?>"
					alt="<?php echo esc_attr( $hero_title ); ?>"
					class="w-full h-full object-cover"
				/>
			<?php else : ?>
				<div class="w-full h-full bg-primary-dark"></div>
			<?php endif; ?>

			<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex items-end p-8 md:p-12">
				<div class="max-w-3xl">
					<?php if ( $hero_title ) : ?>
						<h1 class="text-white text-3xl md:text-5xl mb-6 leading-tight">
							<?php echo esc_html( $hero_title ); ?>
						</h1>
					<?php endif; ?>
					<?php if ( $hero_subtitle ) : ?>
						<p class="text-white/90 text-base md:text-lg leading-relaxed">
							<?php echo esc_html( $hero_subtitle ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</section>

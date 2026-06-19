<?php
/**
 * Template part: Home page hero section
 *
 * @package generatepress-child
 */

$hero_title    = rwmb_meta( 'bmf_hero_title' );
$hero_subtitle = rwmb_meta( 'bmf_hero_subtitle' );
$hero_image    = rwmb_meta( 'bmf_hero_image' );
$cta_text      = rwmb_meta( 'bmf_hero_cta_text' );
$cta_url       = rwmb_meta( 'bmf_hero_cta_url' );
$cta2_text     = rwmb_meta( 'bmf_hero_cta2_text' );
$cta2_url      = rwmb_meta( 'bmf_hero_cta2_url' );

$bg_style = $hero_image ? '--hero-bg: url(\'' . esc_url( $hero_image['sizes']['large']['url'] ) . '\');' : '';
?>

<section
	class="hero-gradient min-h-[500px] flex items-center justify-center text-center text-white px-4"
	<?php if ( $bg_style ) : ?>style="<?php echo esc_attr( $bg_style ); ?>"<?php endif; ?>
>
	<div class="container mx-auto">

		<?php if ( $hero_title ) : ?>
			<h1 class="text-4xl md:text-6xl mb-6 leading-tight">
				<?php echo esc_html( $hero_title ); ?>
			</h1>
		<?php endif; ?>

		<?php if ( $hero_subtitle ) : ?>
			<p class="text-lg md:text-xl mb-8 text-slate-200">
				<?php echo esc_html( $hero_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( $cta_text || $cta2_text ) : ?>
			<div class="flex flex-wrap justify-center gap-4">

				<?php if ( $cta_text ) : ?>
					<a
						href="<?php echo esc_url( $cta_url ?: '#' ); ?>"
						class="bg-primary text-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 hover:text-white transition"
					>
						<?php echo esc_html( $cta_text ); ?>
					</a>
				<?php endif; ?>

				<?php if ( $cta2_text ) : ?>
					<a
						href="<?php echo esc_url( $cta2_url ?: '#' ); ?>"
						class="bg-transparent text-white border border-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-white hover:text-primary-dark transition"
					>
						<?php echo esc_html( $cta2_text ); ?>
					</a>
				<?php endif; ?>

			</div>
		<?php endif; ?>

	</div>
</section>

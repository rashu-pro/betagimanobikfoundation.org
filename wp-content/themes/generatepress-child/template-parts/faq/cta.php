<?php
/**
 * Template part: FAQ page — CTA section
 *
 * @package generatepress-child
 */

$cta_image_raw = rwmb_meta( 'bmf_faq_cta_image' );
$cta_image     = is_array( $cta_image_raw ) ? ( $cta_image_raw['full_url'] ?? $cta_image_raw['sizes']['large']['url'] ?? '' ) : (string) $cta_image_raw;
$cta_head      = rwmb_meta( 'bmf_faq_cta_head' );
$cta_body      = rwmb_meta( 'bmf_faq_cta_body' );
$cta_btn1_text = rwmb_meta( 'bmf_faq_cta_btn1_text' );
$cta_btn1_url  = rwmb_meta( 'bmf_faq_cta_btn1_url' );
$cta_btn2_text = rwmb_meta( 'bmf_faq_cta_btn2_text' );
$cta_btn2_url  = rwmb_meta( 'bmf_faq_cta_btn2_url' );

if ( ! $cta_head ) {
	return;
}
?>

<section class="py-8 pb-16 bg-slate-50">
	<div class="container mx-auto px-4">
		<div class="relative rounded-3xl overflow-hidden">

			<!-- Background image -->
			<?php if ( $cta_image ) : ?>
				<div class="absolute inset-0">
					<img
						src="<?php echo esc_url( $cta_image ); ?>"
						alt=""
						class="w-full h-full object-cover"
						aria-hidden="true"
					/>
					<div class="absolute inset-0 bg-gradient-to-r from-primary-dark/90 via-primary-dark/70 to-transparent"></div>
				</div>
			<?php else : ?>
				<div class="absolute inset-0 bg-primary-dark"></div>
			<?php endif; ?>

			<!-- Content -->
			<div class="relative z-10 px-8 md:px-16 py-16 md:py-24 max-w-2xl">

				<span class="text-accent uppercase text-sm font-semibold tracking-widest mb-4 block">
					<?php esc_html_e( 'মানবতার ডাকে সাড়া দিন', 'generatepress-child' ); ?>
				</span>

				<h2 class="text-white text-3xl md:text-4xl font-bold mb-4 leading-tight">
					<?php echo esc_html( $cta_head ); ?>
				</h2>

				<?php if ( $cta_body ) : ?>
					<p class="text-white/80 text-lg mb-8 leading-relaxed">
						<?php echo esc_html( $cta_body ); ?>
					</p>
				<?php endif; ?>

				<div class="flex flex-wrap gap-4">
					<?php if ( $cta_btn1_text && $cta_btn1_url ) : ?>
						<a
							href="<?php echo esc_url( $cta_btn1_url ); ?>"
							class="bg-primary text-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 hover:text-white transition shadow-md"
						>
							<?php echo esc_html( $cta_btn1_text ); ?>
						</a>
					<?php endif; ?>

					<?php if ( $cta_btn2_text && $cta_btn2_url ) : ?>
						<a
							href="<?php echo esc_url( $cta_btn2_url ); ?>"
							class="bg-transparent text-white border border-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-white hover:text-primary-dark transition"
						>
							<?php echo esc_html( $cta_btn2_text ); ?>
						</a>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</section>

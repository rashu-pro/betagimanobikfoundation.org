<?php
/**
 * Template part: About Us — Mission & Local Roots section
 *
 * @package generatepress-child
 */

$mission_image_raw = rwmb_meta( 'bmf_about_mission_image' );
$mission_image     = is_array( $mission_image_raw ) ? ( $mission_image_raw['full_url'] ?? $mission_image_raw['sizes']['large']['url'] ?? '' ) : (string) $mission_image_raw;
$mission_head  = rwmb_meta( 'bmf_about_mission_head' );
$mission_body  = rwmb_meta( 'bmf_about_mission_body' );
?>

<section class="py-16 bg-slate-50">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

			<!-- Text column -->
			<div class="order-2 md:order-1">
				<span class="text-primary uppercase tracking-wider text-sm mb-4 block font-semibold">
					<?php esc_html_e( 'আমাদের লক্ষ্য', 'generatepress-child' ); ?>
				</span>

				<?php if ( $mission_head ) : ?>
					<h2 class="text-3xl md:text-4xl mb-6 text-primary-dark font-bold leading-snug">
						<?php echo esc_html( $mission_head ); ?>
					</h2>
				<?php endif; ?>

				<?php if ( $mission_body ) : ?>
					<p class="text-slate-600 text-base md:text-lg leading-relaxed mb-8">
						<?php echo esc_html( $mission_body ); ?>
					</p>
				<?php endif; ?>

				<!-- Stat boxes (hardcoded brand values) -->
				<div class="grid grid-cols-2 gap-6">

					<!-- Transparency box -->
					<div class="p-6 bg-primary/10 rounded-lg border border-primary/20">
						<svg class="w-7 h-7 text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
						</svg>
						<h4 class="font-bold text-primary mb-1">
							<?php esc_html_e( '১০০% স্বচ্ছতা', 'generatepress-child' ); ?>
						</h4>
						<p class="text-sm text-slate-600">
							<?php esc_html_e( 'প্রতিটি পয়সার হিসাব জনসম্মুখে প্রকাশ করা হয়।', 'generatepress-child' ); ?>
						</p>
					</div>

					<!-- Local roots box -->
					<div class="p-6 bg-accent/10 rounded-lg border border-accent/20">
						<svg class="w-7 h-7 text-accent mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
						<h4 class="font-bold text-accent mb-1">
							<?php esc_html_e( 'স্থানীয় শিকড়', 'generatepress-child' ); ?>
						</h4>
						<p class="text-sm text-slate-600">
							<?php esc_html_e( '৭ নং ওয়ার্ডের প্রতিটি মানুষের দ্বারে আমরা পৌঁছে যাই।', 'generatepress-child' ); ?>
						</p>
					</div>

				</div>
			</div>

			<!-- Image column -->
			<div class="order-1 md:order-2 rounded-xl overflow-hidden shadow-lg min-h-[300px] bg-primary-light">
				<?php if ( $mission_image ) : ?>
					<img
						src="<?php echo esc_url( $mission_image ); ?>"
						alt="<?php echo esc_attr( $mission_head ); ?>"
						class="w-full h-full object-cover"
						style="min-height: 300px;"
					/>
				<?php else : ?>
					<div class="w-full h-full min-h-[300px] bg-primary-light flex items-center justify-center">
						<svg class="w-16 h-16 text-primary opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
						</svg>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>

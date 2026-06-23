<?php
/**
 * Template part: About Us — Global Connection (Expat Network) section
 *
 * @package generatepress-child
 */

$global_head = rwmb_meta( 'bmf_about_global_head' );
$global_body = rwmb_meta( 'bmf_about_global_body' );

if ( ! $global_head && ! $global_body ) {
	return;
}
?>

<section class="py-8 bg-slate-50">
	<div class="container mx-auto px-4">
		<div class="bg-primary-dark text-white rounded-3xl p-8 md:p-12 overflow-hidden relative">

			<!-- Decorative globe (background) -->
			<div class="absolute top-0 right-0 w-1/3 h-full opacity-10 flex items-center justify-end pr-8 pointer-events-none">
				<svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24">
					<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
				</svg>
			</div>

			<div class="relative z-10 max-w-4xl">
				<span class="text-green-200 uppercase text-sm font-semibold tracking-wider mb-4 block">
					<?php esc_html_e( 'গ্লোবাল নেটওয়ার্ক', 'generatepress-child' ); ?>
				</span>

				<?php if ( $global_head ) : ?>
					<h2 class="text-3xl md:text-4xl font-bold mb-6 leading-snug">
						<?php echo esc_html( $global_head ); ?>
					</h2>
				<?php endif; ?>

				<?php if ( $global_body ) : ?>
					<p class="text-slate-100 leading-relaxed mb-12 text-base md:text-lg">
						<?php echo esc_html( $global_body ); ?>
					</p>
				<?php endif; ?>

				<!-- Expat branches (hardcoded — structural org locations) -->
				<div class="flex flex-wrap gap-10 md:gap-12">

					<!-- Oman -->
					<div class="flex items-center gap-5">
						<div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center shrink-0">
							<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
							</svg>
						</div>
						<div>
							<h4 class="font-bold text-lg">
								<?php esc_html_e( 'ওমান শাখা', 'generatepress-child' ); ?>
							</h4>
							<p class="text-sm text-white/70">
								<?php esc_html_e( 'প্রবাসী সমন্বয় কমিটি', 'generatepress-child' ); ?>
							</p>
						</div>
					</div>

					<!-- Qatar -->
					<div class="flex items-center gap-5">
						<div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center shrink-0">
							<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
							</svg>
						</div>
						<div>
							<h4 class="font-bold text-lg">
								<?php esc_html_e( 'কাতার শাখা', 'generatepress-child' ); ?>
							</h4>
							<p class="text-sm text-white/70">
								<?php esc_html_e( 'প্রবাসী দাতা সদস্যবৃন্দ', 'generatepress-child' ); ?>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

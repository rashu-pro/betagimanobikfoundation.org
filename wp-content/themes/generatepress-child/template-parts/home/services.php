<?php
/**
 * Template part: Home page — Core Services section
 *
 * @package generatepress-child
 */

// SVG icon paths hardcoded per position (Education, Self-reliance, Disaster Relief).
$services = [
	[
		'title'       => rwmb_meta( 'bmf_service_1_title' ),
		'description' => rwmb_meta( 'bmf_service_1_desc' ),
		'icon'        => '<path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>',
	],
	[
		'title'       => rwmb_meta( 'bmf_service_2_title' ),
		'description' => rwmb_meta( 'bmf_service_2_desc' ),
		'icon'        => '<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>',
	],
	[
		'title'       => rwmb_meta( 'bmf_service_3_title' ),
		'description' => rwmb_meta( 'bmf_service_3_desc' ),
		'icon'        => '<path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>',
	],
];
?>

<section class="py-20 bg-white">
	<div class="container mx-auto px-4">

		<div class="text-center mb-16">
			<h2 class="text-3xl font-bold text-primary-dark mb-4">
				<?php esc_html_e( 'অসহায়দের কল্যাণে আমাদের সেবা', 'generatepress-child' ); ?>
			</h2>
			<div class="w-24 h-1 bg-primary mx-auto"></div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
			<?php foreach ( $services as $service ) : ?>
			<div class="group">
				<div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary transition-colors duration-300">
					<svg class="w-10 h-10 text-primary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<?php echo $service['icon']; // SVG path — hardcoded, no user input ?>
					</svg>
				</div>
				<?php if ( ! empty( $service['title'] ) ) : ?>
					<h3 class="text-xl font-bold mb-3">
						<?php echo esc_html( $service['title'] ); ?>
					</h3>
				<?php endif; ?>
				<?php if ( ! empty( $service['description'] ) ) : ?>
					<p class="text-slate-600 text-sm leading-relaxed">
						<?php echo esc_html( $service['description'] ); ?>
					</p>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="mt-12 text-center">
			<a
				href="<?php echo esc_url( home_url( '/our-works' ) ); ?>"
				class="inline-flex items-center gap-2 text-primary font-semibold border border-primary px-6 py-3 rounded-lg text-base hover:bg-primary hover:text-white transition"
			>
				<?php esc_html_e( 'সবগুলো দেখুন ➔', 'generatepress-child' ); ?>
			</a>
		</div>

	</div>
</section>

<?php
/**
 * Template part: Home page — অনদান তহবিলসমূহ (Donation Funds) section
 *
 * Queries up to 3 funds with bmf_fund_featured checked.
 *
 * @package generatepress-child
 */

$funds_query = new WP_Query( [
	'post_type'      => 'fund',
	'posts_per_page' => 3,
	'meta_query'     => [
		[
			'key'   => 'bmf_fund_featured',
			'value' => '1',
		],
	],
] );

if ( ! $funds_query->have_posts() ) {
	return;
}
?>

<section class="py-20 bg-white">
	<div class="container mx-auto px-4">

		<div class="text-center mb-16">
			<h2 class="text-3xl font-bold text-primary-dark mb-4">
				<?php esc_html_e( 'অনদান তহবিলসমূহ', 'generatepress-child' ); ?>
			</h2>
			<p class="text-slate-600">
            আপনার দান সঠিক পথে ব্যয় করতে নির্দিষ্ট তহবিল নির্বাচন করুন
          </p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			<?php while ( $funds_query->have_posts() ) : $funds_query->the_post(); ?>
			<?php
			$donate_url = rwmb_meta( 'bmf_fund_donate_url' );
			$button_url = ! empty( $donate_url ) ? $donate_url : get_permalink();
			$desc       = rwmb_meta( 'bmf_fund_desc' );
			?>
			<div class="bg-white p-2 rounded-2xl shadow-lg border border-slate-100 flex flex-col">

				<?php if ( has_post_thumbnail() ) : ?>
					<img
						src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>"
						alt="<?php echo esc_attr( get_the_title() ); ?>"
						class="rounded-xl h-48 w-full object-cover mb-6"
					/>
				<?php else : ?>
					<div class="rounded-xl h-48 w-full bg-primary-light flex items-center justify-center mb-6">
						<svg class="w-12 h-12 text-primary opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
						</svg>
					</div>
				<?php endif; ?>

				<div class="px-4 pb-6 flex flex-col flex-grow">
					<h3 class="text-xl font-bold mb-4">
						<?php the_title(); ?>
					</h3>

					<?php if ( $desc ) : ?>
						<p class="text-slate-600 text-sm mb-6 flex-grow">
							<?php echo esc_html( $desc ); ?>
						</p>
					<?php endif; ?>

					<a
						href="<?php echo esc_url( $button_url ); ?>"
						class="block w-full text-center bg-primary text-white py-3 rounded-lg font-semibold text-base hover:bg-green-800 transition mt-auto"
					>
						<?php esc_html_e( 'দান করুন', 'generatepress-child' ); ?>
					</a>
				</div>

			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

	</div>
</section>

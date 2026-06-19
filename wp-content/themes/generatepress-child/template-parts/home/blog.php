<?php
/**
 * Template part: Home page — সবশেষ খবর ও ব্লগ (Latest News & Blog) section
 *
 * Displays the 3 most recent published posts.
 *
 * @package generatepress-child
 */

$blog_query = new WP_Query( [
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
] );

if ( ! $blog_query->have_posts() ) {
	return;
}
?>

<section class="py-20 bg-white">
	<div class="container mx-auto px-4">

		<div class="text-center mb-16">
			<h2 class="text-3xl font-bold text-primary-dark mb-4">
				<?php esc_html_e( 'সবশেষ খবর ও ব্লগ', 'generatepress-child' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
			<article class="bg-white border rounded-xl overflow-hidden shadow-sm flex flex-col">

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="block shrink-0" tabindex="-1" aria-hidden="true">
					<?php if ( has_post_thumbnail() ) : ?>
						<img
							src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>"
							alt="<?php echo esc_attr( get_the_title() ); ?>"
							class="w-full h-48 object-cover"
						/>
					<?php else : ?>
						<div class="w-full h-48 bg-primary-light flex items-center justify-center">
							<svg class="w-12 h-12 text-primary opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
							</svg>
						</div>
					<?php endif; ?>
				</a>

				<div class="p-6 flex flex-col flex-grow">
					<span class="text-xs text-slate-400">
						<?php echo get_the_date( 'j F, Y' ); ?>
					</span>

					<h3 class="text-lg font-bold mt-2 mb-3 hover:text-primary transition leading-snug">
						<a href="<?php echo esc_url( get_permalink() ); ?>">
							<?php echo esc_html( get_the_title() ); ?>
						</a>
					</h3>

					<?php $excerpt = get_the_excerpt(); ?>
					<?php if ( $excerpt ) : ?>
						<p class="text-slate-600 text-sm line-clamp-3 mb-4 flex-grow">
							<?php echo esc_html( $excerpt ); ?>
						</p>
					<?php endif; ?>

					<a
						href="<?php echo esc_url( get_permalink() ); ?>"
						class="text-primary font-bold text-sm uppercase mt-auto"
					>
						<?php esc_html_e( 'আরও পড়ুন', 'generatepress-child' ); ?>
					</a>
				</div>

			</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<div class="mt-12 text-center">
			<a
				href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/blog' ) ); ?>"
				class="bg-primary text-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 hover:text-white transition"
			>
				<?php esc_html_e( 'সবগুলো ব্লগ পোস্ট', 'generatepress-child' ); ?>
			</a>
		</div>

	</div>
</section>

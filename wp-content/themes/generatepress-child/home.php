<?php
/**
 * Blog Posts Page Template (home.php)
 *
 * WordPress uses this file — not archive.php — when a static page is set
 * as the "Posts page" in Settings → Reading. Renders the full card grid
 * matching the homepage blog section style.
 *
 * @package generatepress-child
 */

add_filter( 'generate_sidebar_layout', fn() => 'no-sidebar' );

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Header -->
	<div class="py-8">
		<div class="container mx-auto px-4 text-center">
			<h1 class="text-3xl font-bold text-primary-dark mb-2">
				<?php esc_html_e( 'ব্লগ ও খবর', 'generatepress-child' ); ?>
			</h1>
			<nav class="text-sm text-slate-500" aria-label="<?php esc_attr_e( 'Breadcrumb', 'generatepress-child' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary transition">
					<?php esc_html_e( 'হোম', 'generatepress-child' ); ?>
				</a>
				<span class="mx-2">›</span>
				<span class="text-primary-dark"><?php esc_html_e( 'ব্লগ', 'generatepress-child' ); ?></span>
			</nav>
		</div>
	</div>

	<!-- Posts Grid -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4">

			<?php if ( have_posts() ) : ?>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
					<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white border rounded-xl overflow-hidden shadow-sm flex flex-col' ); ?>>

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
								<?php echo esc_html( get_the_date( 'j F, Y' ) ); ?>
							</span>

							<h2 class="text-lg font-bold mt-2 mb-3 hover:text-primary transition leading-snug">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php echo esc_html( get_the_title() ); ?>
								</a>
							</h2>

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
				</div>

				<!-- Pagination -->
				<div class="bmf-pagination mt-16 flex justify-center">
					<?php
					the_posts_pagination( [
						'mid_size'  => 2,
						'prev_text' => '&#8592; ' . esc_html__( 'আগের পাতা', 'generatepress-child' ),
						'next_text' => esc_html__( 'পরের পাতা', 'generatepress-child' ) . ' &#8594;',
					] );
					?>
				</div>

			<?php else : ?>

				<p class="text-center text-slate-500 py-20">
					<?php esc_html_e( 'কোনো পোস্ট পাওয়া যায়নি।', 'generatepress-child' ); ?>
				</p>

			<?php endif; ?>

		</div>
	</section>

</main>

<?php get_footer(); ?>

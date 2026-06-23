<?php
/**
 * Single Post Template — Blog Detail Page
 *
 * Full-width layout: hero image, post content, prev/next navigation,
 * and a related posts strip using the same card style as the homepage.
 *
 * @package generatepress-child
 */

add_filter( 'generate_sidebar_layout', fn() => 'no-sidebar' );

get_header();
?>

<main id="primary" class="site-main">
<?php while ( have_posts() ) : the_post(); ?>

	<!-- Hero Image -->
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="w-full" style="max-height:420px;overflow:hidden;">
			<img
				src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>"
				alt="<?php echo esc_attr( get_the_title() ); ?>"
				class="w-full object-cover"
				style="max-height:420px;"
			/>
		</div>
	<?php else : ?>
		<div class="w-full bg-primary-light flex items-center justify-center" style="height:260px;">
			<svg class="w-16 h-16 text-primary opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
			</svg>
		</div>
	<?php endif; ?>

	<!-- Article Body -->
	<section class="py-16 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-3xl mx-auto">

				<!-- Breadcrumb -->
				<nav class="text-sm text-slate-400 mb-6" aria-label="<?php esc_attr_e( 'Breadcrumb', 'generatepress-child' ); ?>">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary transition">
						<?php esc_html_e( 'হোম', 'generatepress-child' ); ?>
					</a>
					<span class="mx-2">›</span>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/blog' ) ); ?>" class="hover:text-primary transition">
						<?php esc_html_e( 'ব্লগ', 'generatepress-child' ); ?>
					</a>
					<span class="mx-2">›</span>
					<span class="text-slate-600"><?php echo esc_html( get_the_title() ); ?></span>
				</nav>

				<!-- Date & Categories -->
				<div class="flex flex-wrap items-center gap-3 mb-4">
					<span class="text-xs text-slate-400">
						<?php echo esc_html( get_the_date( 'j F, Y' ) ); ?>
					</span>
					<?php
					$categories = get_the_category();
					if ( $categories ) :
						foreach ( $categories as $cat ) :
					?>
						<a
							href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
							class="text-xs bg-primary-light text-primary font-semibold px-3 py-1 rounded-full hover:bg-primary hover:text-white transition"
						>
							<?php echo esc_html( $cat->name ); ?>
						</a>
					<?php
						endforeach;
					endif;
					?>
				</div>

				<!-- Title -->
				<h1 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">
					<?php echo esc_html( get_the_title() ); ?>
				</h1>

				<!-- Author Row -->
				<div class="flex items-center gap-3 mb-8 pb-8 border-b border-slate-100">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', '', [ 'class' => 'rounded-full w-10 h-10' ] ); ?>
					<div>
						<p class="text-sm font-semibold text-primary-dark">
							<?php echo esc_html( get_the_author() ); ?>
						</p>
						<?php
						$word_count  = str_word_count( wp_strip_all_tags( get_the_content() ) );
						$read_time   = max( 1, (int) ceil( $word_count / 200 ) );
						?>
						<p class="text-xs text-slate-400">
							<?php
							printf(
								/* translators: %d: read time in minutes */
								esc_html__( '%d মিনিটে পড়ুন', 'generatepress-child' ),
								$read_time
							);
							?>
						</p>
					</div>
				</div>

				<!-- Post Content -->
				<div class="bmf-post-content">
					<?php the_content(); ?>
				</div>

				<!-- Tags -->
				<?php
				$tags = get_the_tags();
				if ( $tags ) :
				?>
					<div class="flex flex-wrap gap-2 mt-10 pt-8 border-t border-slate-100">
						<?php foreach ( $tags as $tag ) : ?>
							<a
								href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
								class="text-xs border border-slate-200 text-slate-500 px-3 py-1 rounded-full hover:border-primary hover:text-primary transition"
							>
								#<?php echo esc_html( $tag->name ); ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</section>

	<!-- Prev / Next Navigation -->
	<?php
	$prev_post = get_previous_post();
	$next_post = get_next_post();
	if ( $prev_post || $next_post ) :
	?>
	<section class="py-12 bg-slate-50 border-t border-slate-100">
		<div class="container mx-auto px-4">
			<div class="max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

				<?php if ( $prev_post ) : ?>
				<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="group flex items-center gap-4 bg-white border rounded-xl p-5 shadow-sm hover:border-primary transition">
					<?php if ( has_post_thumbnail( $prev_post ) ) : ?>
						<img
							src="<?php echo esc_url( get_the_post_thumbnail_url( $prev_post, 'thumbnail' ) ); ?>"
							alt="<?php echo esc_attr( get_the_title( $prev_post ) ); ?>"
							class="w-16 h-16 rounded-lg object-cover shrink-0"
						/>
					<?php endif; ?>
					<div class="min-w-0">
						<p class="text-xs text-slate-400 mb-1">&#8592; <?php esc_html_e( 'আগের পোস্ট', 'generatepress-child' ); ?></p>
						<p class="text-sm font-semibold text-primary-dark group-hover:text-primary transition line-clamp-2">
							<?php echo esc_html( get_the_title( $prev_post ) ); ?>
						</p>
					</div>
				</a>
				<?php else : ?>
				<div></div>
				<?php endif; ?>

				<?php if ( $next_post ) : ?>
				<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="group flex items-center gap-4 bg-white border rounded-xl p-5 shadow-sm hover:border-primary transition md:flex-row-reverse text-right">
					<?php if ( has_post_thumbnail( $next_post ) ) : ?>
						<img
							src="<?php echo esc_url( get_the_post_thumbnail_url( $next_post, 'thumbnail' ) ); ?>"
							alt="<?php echo esc_attr( get_the_title( $next_post ) ); ?>"
							class="w-16 h-16 rounded-lg object-cover shrink-0"
						/>
					<?php endif; ?>
					<div class="min-w-0">
						<p class="text-xs text-slate-400 mb-1"><?php esc_html_e( 'পরের পোস্ট', 'generatepress-child' ); ?> &#8594;</p>
						<p class="text-sm font-semibold text-primary-dark group-hover:text-primary transition line-clamp-2">
							<?php echo esc_html( get_the_title( $next_post ) ); ?>
						</p>
					</div>
				</a>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Related Posts -->
	<?php
	$categories  = get_the_category();
	$cat_ids     = $categories ? wp_list_pluck( $categories, 'term_id' ) : [];
	$related     = new WP_Query( [
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
		'post__not_in'   => [ get_the_ID() ],
		'category__in'   => $cat_ids,
		'orderby'        => 'rand',
	] );
	if ( $related->have_posts() ) :
	?>
	<section class="py-16 bg-white border-t border-slate-100">
		<div class="container mx-auto px-4">

			<h2 class="text-2xl font-bold text-primary-dark mb-10 text-center">
				<?php esc_html_e( 'সম্পর্কিত পোস্ট', 'generatepress-child' ); ?>
			</h2>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<?php while ( $related->have_posts() ) : $related->the_post(); ?>

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
							<?php echo esc_html( get_the_date( 'j F, Y' ) ); ?>
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

		</div>
	</section>
	<?php endif; ?>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>

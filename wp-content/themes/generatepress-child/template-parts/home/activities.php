<?php
/**
 * Template part: Home page — চলমান কার্যক্রমসমূহ (Ongoing Activities) section
 *
 * Queries up to 3 projects with bmf_project_featured checked.
 *
 * @package generatepress-child
 */

$activities_query = new WP_Query( [
	'post_type'      => 'project',
	'posts_per_page' => 3,
	'meta_query'     => [
		'relation' => 'AND',
		[
			'key'   => 'bmf_project_featured',
			'value' => '1',
		],
		[
			'relation' => 'OR',
			[
				'key'   => 'bmf_project_status',
				'value' => 'current',
			],
			[
				'key'     => 'bmf_project_status',
				'compare' => 'NOT EXISTS',
			],
		],
	],
] );

if ( ! $activities_query->have_posts() ) {
	return;
}
?>

<section class="py-20 bg-slate-50">
	<div class="container mx-auto px-4">

		<div class="text-center mb-16">
			<h2 class="text-3xl font-bold text-primary-dark mb-4">
				<?php esc_html_e( 'চলমান কার্যক্রমসমূহ', 'generatepress-child' ); ?>
			</h2>
			<p class="text-slate-600">
            আমাদের বর্তমান প্রকল্পগুলোতে আপনার সহায়তা কামনা করছি
          </p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			<?php while ( $activities_query->have_posts() ) : $activities_query->the_post(); ?>
			<article class="bg-white rounded-2xl shadow-sm overflow-hidden group hover:shadow-md transition-shadow duration-300">

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="block relative aspect-video overflow-hidden">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="w-full h-full">
							<?php the_post_thumbnail( 'large', [
								'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500',
								'alt'   => esc_attr( get_the_title() ),
							] ); ?>
						</div>
					<?php else : ?>
						<div class="w-full h-full bg-primary-light flex items-center justify-center">
							<svg class="w-12 h-12 text-primary opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
							</svg>
						</div>
					<?php endif; ?>
				</a>

				<div class="p-6">
					<?php $category = rwmb_meta( 'bmf_project_category' ); ?>
					<?php if ( $category ) : ?>
						<span class="text-primary text-xs font-bold uppercase">
							<?php echo esc_html( $category ); ?>
						</span>
					<?php endif; ?>

					<h3 class="text-lg font-bold mt-2 mb-4 leading-snug">
						<?php the_title(); ?>
					</h3>

					<?php
					$goal      = (int) rwmb_meta( 'bmf_project_goal' );
					$collected = (int) rwmb_meta( 'bmf_project_collected' );
					$percent   = ( $goal > 0 ) ? min( 100, round( ( $collected / $goal ) * 100 ) ) : 0;
					?>
					<?php if ( $goal > 0 ) : ?>
						<div class="w-full bg-slate-200 h-2 rounded-full mb-2">
							<div class="bg-primary h-2 rounded-full" style="width: <?php echo esc_attr( $percent ); ?>%"></div>
						</div>
						<div class="flex justify-between text-sm text-slate-500 mb-6">
							<span>
								<?php
								printf(
									/* translators: %s: goal amount */
									esc_html__( 'লক্ষ্য: ৳ %s', 'generatepress-child' ),
									esc_html( number_format( $goal ) )
								);
								?>
							</span>
							<span>
								<?php
								printf(
									/* translators: %s: collected amount */
									esc_html__( 'সংগৃহীত: ৳ %s', 'generatepress-child' ),
									esc_html( number_format( $collected ) )
								);
								?>
							</span>
						</div>
					<?php endif; ?>

					<a
						href="<?php echo esc_url( get_permalink() ); ?>"
						class="block text-center border border-slate-200 py-3 rounded-lg font-semibold text-base text-slate-600 hover:bg-primary hover:text-white hover:border-primary transition"
					>
						<?php esc_html_e( 'বিস্তারিত দেখুন', 'generatepress-child' ); ?>
					</a>
				</div>

			</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
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

<?php
/**
 * Single Project Template
 *
 * Project detail page: hero image, two-column layout (content + stats sidebar),
 * breadcrumb pointing to our-works, and a donate CTA. No blog elements.
 *
 * @package generatepress-child
 */

add_filter( 'generate_sidebar_layout', fn() => 'no-sidebar' );

get_header();
?>

<main id="primary" class="site-main">
<?php while ( have_posts() ) : the_post();

	$status    = get_post_meta( get_the_ID(), 'bmf_project_status', true );
	$is_past   = ( 'past' === $status );
	$category  = rwmb_meta( 'bmf_project_category' );
	$goal      = (int) rwmb_meta( 'bmf_project_goal' );
	$collected = (int) rwmb_meta( 'bmf_project_collected' );
	$percent   = ( $goal > 0 ) ? min( 100, round( ( $collected / $goal ) * 100 ) ) : 0;
?>

	<!-- Hero Image -->
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="w-full overflow-hidden" style="max-height:480px;">
			<img
				src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>"
				alt="<?php echo esc_attr( get_the_title() ); ?>"
				class="w-full object-cover"
				style="max-height:480px;"
			/>
		</div>
	<?php else : ?>
		<div class="w-full bg-primary-light flex items-center justify-center" style="height:300px;">
			<svg class="w-20 h-20 text-primary opacity-25" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
			</svg>
		</div>
	<?php endif; ?>

	<!-- Main Content -->
	<section class="py-16 bg-white">
		<div class="container mx-auto px-4">

			<!-- Breadcrumb -->
			<nav class="text-sm text-slate-400 mb-10" aria-label="<?php esc_attr_e( 'Breadcrumb', 'generatepress-child' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary transition">
					<?php esc_html_e( 'হোম', 'generatepress-child' ); ?>
				</a>
				<span class="mx-2">›</span>
				<a href="<?php echo esc_url( home_url( '/our-works' ) ); ?>" class="hover:text-primary transition">
					<?php esc_html_e( 'আমাদের কার্যক্রম', 'generatepress-child' ); ?>
				</a>
				<span class="mx-2">›</span>
				<span class="text-slate-600"><?php echo esc_html( get_the_title() ); ?></span>
			</nav>

			<!-- Two-column grid: content left, stats sidebar right -->
			<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

				<!-- ── Left: Project Content ───────────────────────────── -->
				<div class="lg:col-span-2">

					<!-- Badges -->
					<div class="flex flex-wrap items-center gap-2 mb-4">
						<?php if ( $category ) : ?>
							<span class="text-primary text-xs font-bold uppercase tracking-wide">
								<?php echo esc_html( $category ); ?>
							</span>
							<span class="text-slate-300">·</span>
						<?php endif; ?>
						<?php if ( $is_past ) : ?>
							<span class="bmf-status-badge bmf-status-past">
								<?php esc_html_e( 'সম্পন্ন', 'generatepress-child' ); ?>
							</span>
						<?php else : ?>
							<span class="bmf-status-badge bmf-status-current">
								<?php esc_html_e( 'চলমান', 'generatepress-child' ); ?>
							</span>
						<?php endif; ?>
					</div>

					<!-- Title -->
					<h1 class="text-3xl font-bold text-primary-dark mb-8 leading-tight">
						<?php echo esc_html( get_the_title() ); ?>
					</h1>

					<!-- Project Description -->
					<div class="bmf-post-content">
						<?php the_content(); ?>
					</div>

					<!-- Back link -->
					<div class="mt-12 pt-8 border-t border-slate-100">
						<a
							href="<?php echo esc_url( home_url( '/our-works' ) ); ?>"
							class="inline-flex items-center gap-2 text-primary font-semibold border border-primary px-6 py-3 rounded-lg text-base hover:bg-primary hover:text-white transition"
						>
							&#8592; <?php esc_html_e( 'সব কার্যক্রম দেখুন', 'generatepress-child' ); ?>
						</a>
					</div>

				</div>

				<!-- ── Right: Stats Sidebar ────────────────────────────── -->
				<div class="lg:col-span-1">
					<div class="bg-slate-50 rounded-2xl p-8 sticky top-24">

						<?php if ( $goal > 0 ) : ?>

							<!-- Progress -->
							<div class="mb-6">
								<div class="flex justify-between text-sm font-semibold text-primary-dark mb-2">
									<span><?php echo esc_html( $percent ); ?>%</span>
									<span><?php esc_html_e( 'অর্জিত', 'generatepress-child' ); ?></span>
								</div>
								<div class="w-full bg-slate-200 h-3 rounded-full">
									<div
										class="<?php echo $is_past ? 'bg-slate-400' : 'bg-primary'; ?> h-3 rounded-full transition-all"
										style="width: <?php echo esc_attr( $percent ); ?>%"
									></div>
								</div>
							</div>

							<!-- Amounts -->
							<div class="grid grid-cols-2 gap-4 mb-8">
								<div class="bg-white rounded-xl p-4 text-center shadow-sm">
									<p class="text-2xl font-bold text-primary-dark">
										৳ <?php echo esc_html( number_format( $collected ) ); ?>
									</p>
									<p class="text-xs text-slate-500 mt-1">
										<?php esc_html_e( 'সংগৃহীত', 'generatepress-child' ); ?>
									</p>
								</div>
								<div class="bg-white rounded-xl p-4 text-center shadow-sm">
									<p class="text-2xl font-bold text-primary-dark">
										৳ <?php echo esc_html( number_format( $goal ) ); ?>
									</p>
									<p class="text-xs text-slate-500 mt-1">
										<?php esc_html_e( 'লক্ষ্যমাত্রা', 'generatepress-child' ); ?>
									</p>
								</div>
							</div>

						<?php endif; ?>

						<!-- Donate CTA -->
						<?php if ( ! $is_past ) : ?>
							<a
								href="<?php echo esc_url( home_url( '/donate-now' ) ); ?>"
								class="block w-full text-center bg-primary text-white py-3 rounded-lg font-semibold text-base hover:bg-green-800 hover:text-white transition mt-auto"
							>
								<?php esc_html_e( 'এখনই দান করুন', 'generatepress-child' ); ?>
							</a>
							<p class="text-xs text-slate-400 text-center mt-3">
								<?php esc_html_e( 'আপনার প্রতিটি সহায়তা পরিবর্তন আনে', 'generatepress-child' ); ?>
							</p>
						<?php else : ?>
							<div class="text-center py-4 bg-white rounded-xl border border-slate-200">
								<p class="text-sm font-semibold text-slate-500">
									<?php esc_html_e( 'এই কার্যক্রমটি সফলভাবে সম্পন্ন হয়েছে', 'generatepress-child' ); ?>
								</p>
							</div>
						<?php endif; ?>

					</div>
				</div>

			</div>
		</div>
	</section>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>

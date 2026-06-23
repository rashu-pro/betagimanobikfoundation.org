<?php
/**
 * Template part: About Us — History Bento Grid section
 *
 * @package generatepress-child
 */

$history_story = rwmb_meta( 'bmf_about_history_story' );
?>

<section class="py-8 bg-slate-50">
	<div class="container mx-auto px-4">
		<div class="py-12 bg-white rounded-3xl px-8 md:px-12">

			<!-- Section heading -->
			<div class="text-center mb-12">
				<span class="text-accent uppercase tracking-wider text-sm font-semibold mb-4 block">
					<?php esc_html_e( 'আমাদের ইতিহাস', 'generatepress-child' ); ?>
				</span>
				<h2 class="text-3xl md:text-4xl text-primary-dark font-bold">
					<?php esc_html_e( 'প্রতিষ্ঠার শুরু থেকে সমাজসেবায় উৎসর্গকৃত', 'generatepress-child' ); ?>
				</h2>
			</div>

			<!-- Bento grid -->
			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

				<!-- Large story cell -->
				<div class="md:col-span-2 p-10 md:p-12 bg-primary text-white rounded-2xl flex flex-col justify-center relative overflow-hidden group">
					<!-- Decorative icon -->
					<div class="absolute top-0 right-0 p-8 opacity-10 group-hover:scale-110 transition-transform duration-500">
						<svg class="w-28 h-28" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
						</svg>
					</div>
					<h3 class="text-3xl font-bold mb-6">
						<?php esc_html_e( 'শুরুর গল্প', 'generatepress-child' ); ?>
					</h3>
					<?php if ( $history_story ) : ?>
						<p class="text-lg opacity-90 leading-relaxed">
							<?php echo esc_html( $history_story ); ?>
						</p>
					<?php endif; ?>
				</div>

				<!-- Milestone cell (hardcoded — structural org milestones) -->
				<div class="p-10 md:p-12 bg-slate-50 rounded-2xl flex flex-col justify-between border border-slate-200">
					<h3 class="text-2xl font-bold text-primary mb-8">
						<?php esc_html_e( 'সেবার মাইলফলক', 'generatepress-child' ); ?>
					</h3>
					<ul class="space-y-6">
						<li class="flex items-center gap-6">
							<span class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold shrink-0">
								<?php esc_html_e( '০১', 'generatepress-child' ); ?>
							</span>
							<span class="text-slate-800">
								<?php esc_html_e( 'বিনামূল্যে চিকিৎসা ক্যাম্প', 'generatepress-child' ); ?>
							</span>
						</li>
						<li class="flex items-center gap-6">
							<span class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold shrink-0">
								<?php esc_html_e( '০২', 'generatepress-child' ); ?>
							</span>
							<span class="text-slate-800">
								<?php esc_html_e( 'শিক্ষা উপকরণ বিতরণ', 'generatepress-child' ); ?>
							</span>
						</li>
						<li class="flex items-center gap-6">
							<span class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold shrink-0">
								<?php esc_html_e( '০৩', 'generatepress-child' ); ?>
							</span>
							<span class="text-slate-800">
								<?php esc_html_e( 'শীতবস্ত্র ও ত্রাণ সহায়তা', 'generatepress-child' ); ?>
							</span>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</section>

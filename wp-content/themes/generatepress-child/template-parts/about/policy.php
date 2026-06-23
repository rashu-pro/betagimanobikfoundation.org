<?php
/**
 * Template part: About Us — Income-Expenditure Policy (3 JS tabs)
 *
 * Only the Income-Expenditure section has tabs — not URL-param routed.
 * JS inlined to avoid a separate file dependency.
 *
 * @package generatepress-child
 */

$tab_income     = rwmb_meta( 'bmf_policy_income' );
$tab_service    = rwmb_meta( 'bmf_policy_service' );
$tab_management = rwmb_meta( 'bmf_policy_management' );

if ( ! $tab_income && ! $tab_service && ! $tab_management ) {
	return;
}
?>

<section class="py-16 bg-slate-50">
	<div class="container mx-auto px-4">

		<div class="text-center mb-12">
			<h2 class="text-3xl md:text-4xl text-primary-dark font-bold">
				<?php esc_html_e( 'আয়-ব্যয়ের নীতিমালা', 'generatepress-child' ); ?>
			</h2>
		</div>

		<!-- Tab buttons -->
		<div class="flex flex-wrap gap-4 justify-center mb-8">

			<button
				id="bmf-tab-btn-income"
				onclick="bmfSwitchPolicyTab('income')"
				class="bmf-tab-policy-btn flex items-center gap-2 px-6 py-3 rounded-lg font-semibold text-base transition-all bg-primary/10 text-primary border border-primary/20"
			>
				<!-- receipt icon -->
				<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
				</svg>
				<?php esc_html_e( 'আয়ের উৎস', 'generatepress-child' ); ?>
			</button>

			<button
				id="bmf-tab-btn-service"
				onclick="bmfSwitchPolicyTab('service')"
				class="bmf-tab-policy-btn flex items-center gap-2 px-6 py-3 rounded-lg font-semibold text-base transition-all text-slate-600 hover:bg-slate-100 border border-transparent"
			>
				<!-- heart/volunteer icon -->
				<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
				</svg>
				<?php esc_html_e( 'সেবামূলক ব্যয়', 'generatepress-child' ); ?>
			</button>

			<button
				id="bmf-tab-btn-management"
				onclick="bmfSwitchPolicyTab('management')"
				class="bmf-tab-policy-btn flex items-center gap-2 px-6 py-3 rounded-lg font-semibold text-base transition-all text-slate-600 hover:bg-slate-100 border border-transparent"
			>
				<!-- cog/management icon -->
				<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
				</svg>
				<?php esc_html_e( 'ব্যবস্থাপনা ব্যয়', 'generatepress-child' ); ?>
			</button>

		</div>

		<!-- Tab content panels -->
		<div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12">

			<?php if ( $tab_income ) : ?>
				<div id="bmf-tab-content-income" class="bmf-tab-policy-content bmf-post-content">
					<?php echo wp_kses_post( $tab_income ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $tab_service ) : ?>
				<div id="bmf-tab-content-service" class="bmf-tab-policy-content bmf-post-content hidden">
					<?php echo wp_kses_post( $tab_service ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $tab_management ) : ?>
				<div id="bmf-tab-content-management" class="bmf-tab-policy-content bmf-post-content hidden">
					<?php echo wp_kses_post( $tab_management ); ?>
				</div>
			<?php endif; ?>

		</div>

	</div>
</section>

<script>
function bmfSwitchPolicyTab( tab ) {
	document.querySelectorAll( '.bmf-tab-policy-content' ).forEach( function( el ) {
		el.classList.add( 'hidden' );
	} );
	document.querySelectorAll( '.bmf-tab-policy-btn' ).forEach( function( el ) {
		el.classList.remove( 'bg-primary/10', 'text-primary', 'border-primary/20' );
		el.classList.add( 'text-slate-600', 'border-transparent' );
	} );
	var content = document.getElementById( 'bmf-tab-content-' + tab );
	if ( content ) { content.classList.remove( 'hidden' ); }
	var btn = document.getElementById( 'bmf-tab-btn-' + tab );
	if ( btn ) {
		btn.classList.add( 'bg-primary/10', 'text-primary', 'border-primary/20' );
		btn.classList.remove( 'text-slate-600', 'border-transparent' );
	}
}
</script>

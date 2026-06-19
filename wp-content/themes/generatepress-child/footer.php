<?php
/**
 * Site footer — content editable via Appearance → Customize → ফুটার
 * and Appearance → Menus (footer-links, footer-support locations).
 */

$bmf_about     = get_theme_mod( 'bmf_footer_about',     'আমরা বিশ্বাস করি মানবতার সেবা সর্বোত্তম সেবা। বেতাগী উপজেলা সহ সারা দেশে অসহায় মানুষের কল্যাণে আমরা অঙ্গীকারবদ্ধ।' );
$bmf_facebook  = get_theme_mod( 'bmf_footer_facebook',  '' );
$bmf_instagram = get_theme_mod( 'bmf_footer_instagram', '' );
$bmf_youtube   = get_theme_mod( 'bmf_footer_youtube',   '' );
$bmf_address   = get_theme_mod( 'bmf_footer_address',   'বেতাগী পৌরসভা, বেতাগী, বরগুনা।' );
$bmf_phone     = get_theme_mod( 'bmf_footer_phone',     '+৮৮০১৭১২-৩৪৫৬৭৮' );
$bmf_email     = get_theme_mod( 'bmf_footer_email',     'info@betagimanobik.org' );
?>

<footer class="bg-primary-dark text-slate-400 pt-20 pb-10 font-bangla">
	<div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-slate-800 pb-16">

		<!-- Col 1: About -->
		<div>
			<div class="flex items-center gap-2 mb-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				   aria-label="<?php bloginfo( 'name' ); ?>">
					<?php if ( has_custom_logo() ) :
						the_custom_logo();
					else : ?>
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.jpg' ); ?>"
						     alt="<?php esc_attr_e( 'বেতাগী মানবিক ফাউন্ডেশন', 'generatepress-child' ); ?>"
						     class="h-12 w-auto rounded-full">
					<?php endif; ?>
				</a>
				<div>
					<span class="text-white text-xl font-bold block leading-tight"><?php esc_html_e( 'বেতাগী মানবিক', 'generatepress-child' ); ?></span>
					<span class="text-slate-400 text-sm block"><?php esc_html_e( 'ফাউন্ডেশন', 'generatepress-child' ); ?></span>
				</div>
			</div>

			<?php if ( $bmf_about ) : ?>
				<p class="text-sm leading-relaxed mb-6"><?php echo esc_html( $bmf_about ); ?></p>
			<?php endif; ?>

			<?php if ( $bmf_facebook || $bmf_instagram || $bmf_youtube ) : ?>
				<div class="flex gap-4">
					<?php if ( $bmf_facebook ) : ?>
						<a class="bg-slate-800 p-2 rounded-full hover:bg-primary transition text-white"
						   href="<?php echo esc_url( $bmf_facebook ); ?>"
						   target="_blank" rel="noopener noreferrer"
						   aria-label="<?php esc_attr_e( 'ফেসবুক', 'generatepress-child' ); ?>">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
								<path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
							</svg>
						</a>
					<?php endif; ?>

					<?php if ( $bmf_instagram ) : ?>
						<a class="bg-slate-800 p-2 rounded-full hover:bg-primary transition text-white"
						   href="<?php echo esc_url( $bmf_instagram ); ?>"
						   target="_blank" rel="noopener noreferrer"
						   aria-label="<?php esc_attr_e( 'ইন্সটাগ্রাম', 'generatepress-child' ); ?>">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
								<path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16.4a4.4 4.4 0 110-8.8 4.4 4.4 0 010 8.8zm6.487-11.59a1.108 1.108 0 11-2.216 0 1.108 1.108 0 012.216 0z"/>
							</svg>
						</a>
					<?php endif; ?>

					<?php if ( $bmf_youtube ) : ?>
						<a class="bg-slate-800 p-2 rounded-full hover:bg-primary transition text-white"
						   href="<?php echo esc_url( $bmf_youtube ); ?>"
						   target="_blank" rel="noopener noreferrer"
						   aria-label="<?php esc_attr_e( 'ইউটিউব', 'generatepress-child' ); ?>">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
								<path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
							</svg>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<!-- Col 2: Quick Links -->
		<div>
			<h4 class="bmf-footer-heading text-white font-bold text-lg mb-6">
				<?php esc_html_e( 'লিংকসমূহ', 'generatepress-child' ); ?>
			</h4>
			<?php wp_nav_menu( [
				'theme_location' => 'footer-links',
				'container'      => false,
				'menu_class'     => 'bmf-footer-nav space-y-3',
				'fallback_cb'    => false,
				'depth'          => 1,
			] ); ?>
		</div>

		<!-- Col 3: Support -->
		<div>
			<h4 class="bmf-footer-heading text-white font-bold text-lg mb-6">
				<?php esc_html_e( 'সহায়তা', 'generatepress-child' ); ?>
			</h4>
			<?php wp_nav_menu( [
				'theme_location' => 'footer-support',
				'container'      => false,
				'menu_class'     => 'bmf-footer-nav space-y-3',
				'fallback_cb'    => false,
				'depth'          => 1,
			] ); ?>
		</div>

		<!-- Col 4: Contact -->
		<div>
			<h4 class="bmf-footer-heading text-white font-bold text-lg mb-6">
				<?php esc_html_e( 'যোগাযোগ', 'generatepress-child' ); ?>
			</h4>
			<ul class="space-y-4 text-sm">
				<?php if ( $bmf_address ) : ?>
					<li class="flex items-start gap-3">
						<svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
						<span><?php echo esc_html( $bmf_address ); ?></span>
					</li>
				<?php endif; ?>

				<?php if ( $bmf_phone ) : ?>
					<li class="flex items-center gap-3">
						<svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
						</svg>
						<a href="tel:<?php echo esc_attr( preg_replace( '/[^+\d]/', '', $bmf_phone ) ); ?>"
						   class="hover:text-primary transition">
							<?php echo esc_html( $bmf_phone ); ?>
						</a>
					</li>
				<?php endif; ?>

				<?php if ( $bmf_email ) : ?>
					<li class="flex items-center gap-3">
						<svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
						</svg>
						<a href="mailto:<?php echo esc_attr( $bmf_email ); ?>"
						   class="hover:text-primary transition">
							<?php echo antispambot( esc_html( $bmf_email ) ); ?>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>

	</div>

	<!-- Copyright -->
	<div class="container mx-auto px-4 mt-10 text-center text-xs">
		<p><?php
			printf(
				/* translators: %s: four-digit year */
				esc_html__( '© %s বেতাগী মানবিক ফাউন্ডেশন। সর্বস্বত্ব সংরক্ষিত।', 'generatepress-child' ),
				esc_html( date_i18n( 'Y' ) )
			);
		?></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

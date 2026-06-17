<?php
/**
 * Site header — outputs DOCTYPE, <head>, <body> open, and sticky navigation bar.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-white shadow-md" id="bmf-header">
	<nav class="container mx-auto px-4 py-3 flex items-center justify-between">

		<!-- Logo -->
		<div class="flex items-center gap-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   class="flex items-center gap-2"
			   aria-label="<?php bloginfo( 'name' ); ?>">
				<?php if ( has_custom_logo() ) :
					the_custom_logo();
				else : ?>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.jpg' ); ?>"
					     alt="<?php esc_attr_e( 'বেতাগী মানবিক ফাউন্ডেশন', 'generatepress-child' ); ?>"
					     class="h-14 w-auto">
				<?php endif; ?>
			</a>
			<div class="hidden lg:block">
				<span class="text-primary text-xl font-bold block leading-tight">বেতাগী মানবিক</span>
				<span class="text-slate-600 text-sm block">ফাউন্ডেশন</span>
			</div>
		</div>

		<!-- Desktop Navigation -->
		<?php wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'hidden lg:flex items-center gap-6 text-sm font-medium',
			'fallback_cb'    => 'bmf_nav_fallback',
			'depth'          => 1,
		] ); ?>

		<!-- Donate button + Hamburger -->
		<div class="flex items-center gap-3">
			<a href="<?php echo esc_url( home_url( '/donate' ) ); ?>"
			   class="bmf-btn-donate bg-primary text-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 transition shadow-lg">
				<?php esc_html_e( 'দান করুন', 'generatepress-child' ); ?>
			</a>
			<button class="lg:hidden text-primary p-2"
			        id="bmf-hamburger"
			        aria-controls="bmf-mobile-menu"
			        aria-expanded="false"
			        aria-label="<?php esc_attr_e( 'মেনু খুলুন', 'generatepress-child' ); ?>">
				<svg id="bmf-icon-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
				</svg>
				<svg id="bmf-icon-close" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
				</svg>
			</button>
		</div>

	</nav>

	<!-- Mobile Menu -->
	<div class="lg:hidden border-t border-gray-200 bg-white px-4 py-4" id="bmf-mobile-menu" hidden>
		<?php wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'bmf-mobile-nav-menu',
			'fallback_cb'    => 'bmf_nav_fallback',
			'depth'          => 1,
		] ); ?>
		<a href="<?php echo esc_url( home_url( '/donate' ) ); ?>"
		   class="bmf-btn-donate bg-primary text-white block w-full text-center px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 transition shadow-lg mt-2">
			<?php esc_html_e( 'দান করুন', 'generatepress-child' ); ?>
		</a>
	</div>
</header>

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

<header class="bmf-header" id="bmf-header">
	<nav class="bmf-nav-inner">

		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
		   class="bmf-logo"
		   aria-label="<?php bloginfo( 'name' ); ?>">
			<?php if ( has_custom_logo() ) :
				the_custom_logo();
			else : ?>
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.jpg' ); ?>"
				     alt="<?php esc_attr_e( 'বেতাগী মানবিক ফাউন্ডেশন', 'generatepress-child' ); ?>"
				     class="bmf-logo__img">
			<?php endif; ?>
			<div class="bmf-logo__text">
				<span class="bmf-logo__title">বেতাগী মানবিক</span>
				<span class="bmf-logo__subtitle">ফাউন্ডেশন</span>
			</div>
		</a>

		<!-- Desktop Navigation -->
		<?php wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'bmf-nav-menu',
			'fallback_cb'    => false,
			'depth'          => 1,
		] ); ?>

		<!-- Donate button + Hamburger -->
		<div class="bmf-nav-actions">
			<a href="<?php echo esc_url( home_url( '/donate' ) ); ?>"
			   class="bmf-btn-donate">
				<?php esc_html_e( 'দান করুন', 'generatepress-child' ); ?>
			</a>
			<button class="bmf-hamburger"
			        id="bmf-hamburger"
			        aria-controls="bmf-mobile-menu"
			        aria-expanded="false"
			        aria-label="<?php esc_attr_e( 'মেনু খুলুন', 'generatepress-child' ); ?>">
				<span class="bmf-hamburger__bar"></span>
				<span class="bmf-hamburger__bar"></span>
				<span class="bmf-hamburger__bar"></span>
			</button>
		</div>

	</nav>

	<!-- Mobile Menu -->
	<div class="bmf-mobile-menu" id="bmf-mobile-menu" hidden>
		<?php wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'bmf-mobile-nav-menu',
			'fallback_cb'    => false,
			'depth'          => 1,
		] ); ?>
		<a href="<?php echo esc_url( home_url( '/donate' ) ); ?>"
		   class="bmf-btn-donate bmf-btn-donate--mobile">
			<?php esc_html_e( 'দান করুন', 'generatepress-child' ); ?>
		</a>
	</div>
</header>

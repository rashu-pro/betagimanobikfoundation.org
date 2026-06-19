<?php
/**
 * GeneratePress Child Theme Functions
 * Configured for custom page templates + Meta Box
 */

// -----------------------------------------------
// 1. Enqueue Parent Theme Stylesheet
// -----------------------------------------------
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'generatepress-parent-style',
        get_template_directory_uri() . '/style.css'
    );
});


// -----------------------------------------------
// 2. Remove unnecessary GeneratePress assets
//    on custom blank page templates
// -----------------------------------------------
add_action( 'wp_enqueue_scripts', function() {
    if ( is_page_template( [ 'templates/blank.php', 'templates/page-home.php' ] ) ) {
        wp_dequeue_style( 'generate-style' );
        wp_dequeue_script( 'generate-menu' );
    }
}, 100 );


// -----------------------------------------------
// 3. Theme support, text domain, nav menus
// -----------------------------------------------
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 56,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [
        'search-form', 'comment-form',
        'comment-list', 'gallery', 'caption',
    ]);

    load_child_theme_textdomain(
        'generatepress-child',
        get_stylesheet_directory() . '/languages'
    );

    register_nav_menus( [
        'primary'        => esc_html__( 'প্রধান মেনু', 'generatepress-child' ),
        'footer-links'   => esc_html__( 'ফুটার লিংকসমূহ', 'generatepress-child' ),
        'footer-support' => esc_html__( 'ফুটার সহায়তা', 'generatepress-child' ),
    ] );
});


// -----------------------------------------------
// 4. Enqueue Hind Siliguri (Bangla font) + nav JS
// -----------------------------------------------
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'ubuntu-sans',
        'https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap',
        [],
        null
    );

    wp_enqueue_script(
        'bmf-nav',
        get_stylesheet_directory_uri() . '/assets/js/nav.js',
        [],
        '1.0.0',
        true
    );
});


// -----------------------------------------------
// 5. Add nav-link class to all primary menu links
//    (needed for the underline animation in style.css)
// -----------------------------------------------
add_filter( 'nav_menu_link_attributes', function( $atts, $item ) {
    $atts['class'] = isset( $atts['class'] ) ? $atts['class'] . ' nav-link' : 'nav-link';
    return $atts;
}, 10, 2 );


// -----------------------------------------------
// 6. Fallback nav — shown when no WP menu is assigned.
//    wp_nav_menu() calls this automatically via fallback_cb.
//    Remove once a menu is assigned in Appearance → Menus.
// -----------------------------------------------
function bmf_nav_fallback( $args ) {
    $items = [
        [ 'url' => home_url( '/' ),          'label' => 'হোম' ],
        [ 'url' => home_url( '/about' ),     'label' => 'আমাদের সম্পর্কে' ],
        [ 'url' => home_url( '/our-works' ), 'label' => 'আমাদের কার্যক্রম' ],
        [ 'url' => '#',                      'label' => 'সাফল্যের গল্প' ],
        [ 'url' => '#',                      'label' => 'ব্লগ' ],
        [ 'url' => '#',                      'label' => 'গ্যালারি' ],
        [ 'url' => home_url( '/contact' ),   'label' => 'যোগাযোগ' ],
    ];

    $current_url = rtrim( home_url( add_query_arg( [] ) ), '/' );

    echo '<ul class="' . esc_attr( $args['menu_class'] ) . '">';
    foreach ( $items as $item ) {
        $is_active = ( rtrim( $item['url'], '/' ) === $current_url );
        $link_class = 'nav-link' . ( $is_active ? ' !text-primary' : '' );
        printf(
            '<li><a href="%s" class="%s">%s</a></li>',
            esc_url( $item['url'] ),
            esc_attr( $link_class ),
            esc_html( $item['label'] )
        );
    }
    echo '</ul>';
}


// -----------------------------------------------
// 6. Tailwind CDN — development only
//    Replace with CLI build before going to production
// -----------------------------------------------
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false // must load in <head> — not footer
    );

    wp_add_inline_script( 'tailwindcss', '
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary:        "#008e48",
                "primary-dark": "#0a251c",
                "primary-light":"#E8F5F1",
                accent:         "#fbbd08",
                "accent-light": "#FFF8E1",
            },
            fontFamily: {
                bangla: ["UbuntuSans", "Bornomala", "sans-serif"],
            },
        },
    },
}
    ', 'after' );
});


// -----------------------------------------------
// 7. Customizer — footer settings
// -----------------------------------------------
add_action( 'customize_register', function( WP_Customize_Manager $wp_customize ) {

    $wp_customize->add_section( 'bmf_footer', [
        'title'    => esc_html__( 'ফুটার', 'generatepress-child' ),
        'priority' => 130,
    ] );

    // About / mission paragraph
    $wp_customize->add_setting( 'bmf_footer_about', [
        'default'           => 'আমরা বিশ্বাস করি মানবতার সেবা সর্বোত্তম সেবা। বেতাগী উপজেলা সহ সারা দেশে অসহায় মানুষের কল্যাণে আমরা অঙ্গীকারবদ্ধ।',
        'sanitize_callback' => 'sanitize_textarea_field',
    ] );
    $wp_customize->add_control( 'bmf_footer_about', [
        'type'    => 'textarea',
        'section' => 'bmf_footer',
        'label'   => esc_html__( 'সংক্ষিপ্ত পরিচয়', 'generatepress-child' ),
    ] );

    // Social URLs
    $social_fields = [
        'bmf_footer_facebook'  => 'ফেসবুক লিংক',
        'bmf_footer_instagram' => 'ইন্সটাগ্রাম লিংক',
        'bmf_footer_youtube'   => 'ইউটিউব লিংক',
    ];
    foreach ( $social_fields as $key => $label ) {
        $wp_customize->add_setting( $key, [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ] );
        $wp_customize->add_control( $key, [
            'type'    => 'url',
            'section' => 'bmf_footer',
            'label'   => esc_html__( $label, 'generatepress-child' ),
        ] );
    }

    // Contact: address
    $wp_customize->add_setting( 'bmf_footer_address', [
        'default'           => 'বেতাগী পৌরসভা, বেতাগী, বরগুনা।',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'bmf_footer_address', [
        'type'    => 'text',
        'section' => 'bmf_footer',
        'label'   => esc_html__( 'ঠিকানা', 'generatepress-child' ),
    ] );

    // Contact: phone
    $wp_customize->add_setting( 'bmf_footer_phone', [
        'default'           => '+৮৮০১৭১২-৩৪৫৬৭৮',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'bmf_footer_phone', [
        'type'    => 'text',
        'section' => 'bmf_footer',
        'label'   => esc_html__( 'ফোন নম্বর', 'generatepress-child' ),
    ] );

    // Contact: email
    $wp_customize->add_setting( 'bmf_footer_email', [
        'default'           => 'info@betagimanobik.org',
        'sanitize_callback' => 'sanitize_email',
    ] );
    $wp_customize->add_control( 'bmf_footer_email', [
        'type'    => 'email',
        'section' => 'bmf_footer',
        'label'   => esc_html__( 'ইমেইল', 'generatepress-child' ),
    ] );
} );


// -----------------------------------------------
// 8. Load Custom Post Type registrations
// -----------------------------------------------
foreach ( glob( get_stylesheet_directory() . '/inc/post-types/*.php' ) as $file ) {
    require_once $file;
}

// -----------------------------------------------
// 9. Load Meta Box field group registrations
// -----------------------------------------------
foreach ( glob( get_stylesheet_directory() . '/inc/meta-boxes/*.php' ) as $file ) {
    require_once $file;
}

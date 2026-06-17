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
    if ( is_page_template( 'templates/blank.php' ) ) {
        wp_dequeue_style( 'generate-style' );
        wp_dequeue_script( 'generate-menu' );
    }
}, 100 );


// -----------------------------------------------
// 3. Add theme support + load text domain
// -----------------------------------------------
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form',
        'comment-list', 'gallery', 'caption',
    ]);

    load_child_theme_textdomain(
        'generatepress-child',
        get_stylesheet_directory() . '/languages'
    );
});


// -----------------------------------------------
// 4. Enqueue Hind Siliguri (Bangla font)
// -----------------------------------------------
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'hind-siliguri',
        'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap',
        [],
        null
    );
});

<?php
/**
 * Custom Post Type: fund
 *
 * @package generatepress-child
 */

add_action( 'init', function() {
	$labels = [
		'name'               => esc_html__( 'তহবিলসমূহ', 'generatepress-child' ),
		'singular_name'      => esc_html__( 'তহবিল', 'generatepress-child' ),
		'add_new'            => esc_html__( 'নতুন যোগ করুন', 'generatepress-child' ),
		'add_new_item'       => esc_html__( 'নতুন তহবিল যোগ করুন', 'generatepress-child' ),
		'edit_item'          => esc_html__( 'তহবিল সম্পাদনা করুন', 'generatepress-child' ),
		'new_item'           => esc_html__( 'নতুন তহবিল', 'generatepress-child' ),
		'view_item'          => esc_html__( 'তহবিল দেখুন', 'generatepress-child' ),
		'search_items'       => esc_html__( 'তহবিল খুঁজুন', 'generatepress-child' ),
		'not_found'          => esc_html__( 'কোনো তহবিল পাওয়া যায়নি', 'generatepress-child' ),
		'not_found_in_trash' => esc_html__( 'ট্র্যাশে কোনো তহবিল নেই', 'generatepress-child' ),
		'all_items'          => esc_html__( 'সব তহবিল', 'generatepress-child' ),
		'menu_name'          => esc_html__( 'তহবিল', 'generatepress-child' ),
	];

	register_post_type( 'fund', [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'show_in_menu'  => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-heart',
		'menu_position' => 6,
		'supports'      => [ 'title', 'thumbnail' ],
		'has_archive'   => false,
		'rewrite'       => [ 'slug' => 'fund' ],
	] );
} );

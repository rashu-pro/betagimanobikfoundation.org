<?php
/**
 * Custom Post Type: project
 *
 * @package generatepress-child
 */

add_action( 'init', function() {
	$labels = [
		'name'               => esc_html__( 'কার্যক্রমসমূহ', 'generatepress-child' ),
		'singular_name'      => esc_html__( 'কার্যক্রম', 'generatepress-child' ),
		'add_new'            => esc_html__( 'নতুন যোগ করুন', 'generatepress-child' ),
		'add_new_item'       => esc_html__( 'নতুন কার্যক্রম যোগ করুন', 'generatepress-child' ),
		'edit_item'          => esc_html__( 'কার্যক্রম সম্পাদনা করুন', 'generatepress-child' ),
		'new_item'           => esc_html__( 'নতুন কার্যক্রম', 'generatepress-child' ),
		'view_item'          => esc_html__( 'কার্যক্রম দেখুন', 'generatepress-child' ),
		'search_items'       => esc_html__( 'কার্যক্রম খুঁজুন', 'generatepress-child' ),
		'not_found'          => esc_html__( 'কোনো কার্যক্রম পাওয়া যায়নি', 'generatepress-child' ),
		'not_found_in_trash' => esc_html__( 'ট্র্যাশে কোনো কার্যক্রম নেই', 'generatepress-child' ),
		'all_items'          => esc_html__( 'সব কার্যক্রম', 'generatepress-child' ),
		'menu_name'          => esc_html__( 'কার্যক্রম', 'generatepress-child' ),
	];

	register_post_type( 'project', [
		'labels'              => $labels,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-portfolio',
		'menu_position'       => 5,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'has_archive'         => false,
		'rewrite'             => [ 'slug' => 'project' ],
	] );
} );

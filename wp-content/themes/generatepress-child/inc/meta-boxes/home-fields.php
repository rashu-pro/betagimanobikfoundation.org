<?php
/**
 * Meta Box field group: Home page
 * Restricted to the Home Page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	$meta_boxes[] = [
		'title'   => esc_html__( 'হোম পৃষ্ঠা — হিরো', 'generatepress-child' ),
		'id'      => 'bmf_home',
		'pages'   => [ 'page' ],
		'include' => [
			'is_template' => 'templates/page-home.php',
		],
		'fields'  => [
			[
				'id'   => 'bmf_hero_title',
				'type' => 'text',
				'name' => esc_html__( 'হিরো শিরোনাম', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_hero_subtitle',
				'type' => 'textarea',
				'name' => esc_html__( 'হিরো সাবটাইটেল', 'generatepress-child' ),
				'rows' => 3,
			],
			[
				'id'               => 'bmf_hero_image',
				'type'             => 'single_image',
				'name'             => esc_html__( 'হিরো ব্যাকগ্রাউন্ড ছবি', 'generatepress-child' ),
				'force_delete'     => false,
				'image_size'       => 'full',
				'return_value'     => 'url',
			],
			[
				'id'   => 'bmf_hero_cta_text',
				'type' => 'text',
				'name' => esc_html__( 'প্রাথমিক বাটন টেক্সট', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_hero_cta_url',
				'type' => 'url',
				'name' => esc_html__( 'প্রাথমিক বাটন লিঙ্ক', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_hero_cta2_text',
				'type' => 'text',
				'name' => esc_html__( 'দ্বিতীয় বাটন টেক্সট', 'generatepress-child' ),
				'desc' => esc_html__( 'ঐচ্ছিক', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_hero_cta2_url',
				'type' => 'url',
				'name' => esc_html__( 'দ্বিতীয় বাটন লিঙ্ক', 'generatepress-child' ),
				'desc' => esc_html__( 'ঐচ্ছিক', 'generatepress-child' ),
			],
		],
	];

	return $meta_boxes;
} );

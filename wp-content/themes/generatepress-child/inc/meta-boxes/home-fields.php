<?php
/**
 * Meta Box field group: Home page
 * Restricted to the Home Page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	$meta_boxes[] = [
		'title'  => esc_html__( 'হোম পৃষ্ঠা — হিরো', 'generatepress-child' ),
		'id'     => 'bmf_home',
		'pages'  => [ 'page' ],
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

			// ── Services section (3 fixed cards, icons hardcoded per position) ──
			[
				'id'   => 'bmf_service_1_title',
				'type' => 'text',
				'name' => esc_html__( 'সেবা ১ — শিরোনাম (শিক্ষা)', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_service_1_desc',
				'type' => 'textarea',
				'name' => esc_html__( 'সেবা ১ — বিবরণ', 'generatepress-child' ),
				'rows' => 2,
			],
			[
				'id'   => 'bmf_service_2_title',
				'type' => 'text',
				'name' => esc_html__( 'সেবা ২ — শিরোনাম (স্বাবলম্বীকরণ)', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_service_2_desc',
				'type' => 'textarea',
				'name' => esc_html__( 'সেবা ২ — বিবরণ', 'generatepress-child' ),
				'rows' => 2,
			],
			[
				'id'   => 'bmf_service_3_title',
				'type' => 'text',
				'name' => esc_html__( 'সেবা ৩ — শিরোনাম (দুর্যোগ ত্রাণ)', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_service_3_desc',
				'type' => 'textarea',
				'name' => esc_html__( 'সেবা ৩ — বিবরণ', 'generatepress-child' ),
				'rows' => 2,
			],
		],
	];

	// ── Video section ──
	$meta_boxes[] = [
		'title'  => esc_html__( 'হোম পৃষ্ঠা — ভিডিও', 'generatepress-child' ),
		'id'     => 'bmf_home_video',
		'pages'  => [ 'page' ],
		'fields'  => [
			[
				'id'          => 'bmf_video_url',
				'type'        => 'url',
				'name'        => esc_html__( 'ইউটিউব ভিডিও লিংক', 'generatepress-child' ),
				'desc'        => esc_html__( 'ফাঁকা রাখলে ভিডিও সেকশন দেখাবে না।', 'generatepress-child' ),
				'placeholder' => 'https://www.youtube.com/watch?v=...',
			],
			[
				'id'           => 'bmf_video_thumbnail',
				'type'         => 'single_image',
				'name'         => esc_html__( 'কাস্টম থাম্বনেইল (ঐচ্ছিক)', 'generatepress-child' ),
				'desc'         => esc_html__( 'না দিলে ইউটিউবের নিজস্ব থাম্বনেইল ব্যবহার হবে।', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'large',
				'return_value' => 'url',
			],
		],
	];

	// ── Gallery section ──
	$meta_boxes[] = [
		'title'  => esc_html__( 'হোম পৃষ্ঠা — গ্যালারি', 'generatepress-child' ),
		'id'     => 'bmf_home_gallery',
		'pages'  => [ 'page' ],
		'fields'  => [
			[
				'id'           => 'bmf_gallery_images',
				'type'         => 'image_advanced',
				'name'         => esc_html__( 'গ্যালারি ছবিসমূহ', 'generatepress-child' ),
				'desc'         => esc_html__( 'সর্বোচ্চ ৬টি ছবি দেখানো হবে।', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'large',
			],
			[
				'id'          => 'bmf_gallery_link',
				'type'        => 'url',
				'name'        => esc_html__( '"আরও ছবি দেখুন" লিংক (ঐচ্ছিক)', 'generatepress-child' ),
				'desc'        => esc_html__( 'ফাঁকা রাখলে বাটন দেখাবে না।', 'generatepress-child' ),
				'placeholder' => home_url( '/gallery' ),
			],
		],
	];

	return $meta_boxes;
} );

// Hide home meta boxes on any page that does not use the Home page template.
add_action( 'add_meta_boxes_page', function( WP_Post $post ) {
	if ( get_page_template_slug( $post->ID ) !== 'templates/page-home.php' ) {
		remove_meta_box( 'bmf_home',         'page', 'normal' );
		remove_meta_box( 'bmf_home_video',   'page', 'normal' );
		remove_meta_box( 'bmf_home_gallery', 'page', 'normal' );
	}
}, 20 );

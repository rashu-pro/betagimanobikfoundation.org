<?php
/**
 * Meta Box field groups: FAQ page
 * Restricted to the FAQ page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	$meta_boxes[] = [
		'title'  => esc_html__( 'প্রশ্নোত্তর — বিষয়বস্তু', 'generatepress-child' ),
		'id'     => 'bmf_faq',
		'pages'  => [ 'page' ],
		'fields' => [

			// Hero
			[
				'id'   => 'bmf_faq_hero_title',
				'type' => 'text',
				'name' => esc_html__( 'হিরো শিরোনাম', 'generatepress-child' ),
				'std'  => 'প্রায়শই জিজ্ঞাসিত প্রশ্নসমূহ',
			],
			[
				'id'   => 'bmf_faq_hero_subtitle',
				'type' => 'textarea',
				'name' => esc_html__( 'হিরো সাবটাইটেল', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'আমাদের সম্পর্কে আপনার মনে যত প্রশ্ন আছে, সেগুলোর উত্তর এখানে খুঁজে পাবেন। না পেলে সরাসরি আমাদের সাথে যোগাযোগ করুন।',
			],

			// CTA
			[
				'id'           => 'bmf_faq_cta_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'CTA ব্যাকগ্রাউন্ড ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'full',
				'return_value' => 'url',
			],
			[
				'id'  => 'bmf_faq_cta_head',
				'type' => 'text',
				'name' => esc_html__( 'CTA শিরোনাম', 'generatepress-child' ),
				'std'  => 'আপনার একটি দান বদলে দিতে পারে একজনের জীবন',
			],
			[
				'id'   => 'bmf_faq_cta_body',
				'type' => 'textarea',
				'name' => esc_html__( 'CTA বিবরণ', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'আজই আমাদের সাথে যুক্ত হোন এবং বেতাগীর অসহায় মানুষের পাশে দাঁড়ান।',
			],
			[
				'id'   => 'bmf_faq_cta_btn1_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ১ — টেক্সট', 'generatepress-child' ),
				'std'  => 'সরাসরি দান করুন',
			],
			[
				'id'   => 'bmf_faq_cta_btn1_url',
				'type' => 'url',
				'name' => esc_html__( 'CTA বাটন ১ — লিঙ্ক', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_faq_cta_btn2_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ২ — টেক্সট (ঐচ্ছিক)', 'generatepress-child' ),
				'std'  => 'স্বেচ্ছাসেবী হিসেবে যোগ দিন',
			],
			[
				'id'   => 'bmf_faq_cta_btn2_url',
				'type' => 'url',
				'name' => esc_html__( 'CTA বাটন ২ — লিঙ্ক (ঐচ্ছিক)', 'generatepress-child' ),
			],
		],
	];

	return $meta_boxes;
} );

// Hide FAQ meta box on any page that does not use the FAQ page template.
add_action( 'add_meta_boxes_page', function( WP_Post $post ) {
	if ( get_page_template_slug( $post->ID ) !== 'templates/page-faq.php' ) {
		remove_meta_box( 'bmf_faq', 'page', 'normal' );
	}
}, 20 );

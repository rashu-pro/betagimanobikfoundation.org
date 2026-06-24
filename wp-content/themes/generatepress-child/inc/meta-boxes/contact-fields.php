<?php
/**
 * Meta Box field groups: Contact page
 * Restricted to the Contact Page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	$meta_boxes[] = [
		'title'  => esc_html__( 'যোগাযোগ — বিষয়বস্তু', 'generatepress-child' ),
		'id'     => 'bmf_contact',
		'pages'  => [ 'page' ],
		'fields' => [

			// Hero
			[
				'id'   => 'bmf_contact_hero_title',
				'type' => 'text',
				'name' => esc_html__( 'হিরো শিরোনাম', 'generatepress-child' ),
				'std'  => 'আমাদের সাথে যোগাযোগ করুন',
			],
			[
				'id'   => 'bmf_contact_hero_subtitle',
				'type' => 'textarea',
				'name' => esc_html__( 'হিরো সাবটাইটেল', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'বেতাগী মানবিক ফাউন্ডেশনের যেকোনো কার্যক্রম সম্পর্কে জানতে বা আমাদের সাথে যুক্ত হতে নিচের মাধ্যমগুলো ব্যবহার করুন। আমরা আপনার সহযোগিতায় সবসময় পাশে আছি।',
			],

			// Bento
			[
				'id'           => 'bmf_contact_map_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'মানচিত্র ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'large',
				'return_value' => 'url',
			],
			[
				'id'   => 'bmf_contact_cf7_id',
				'type' => 'text',
				'name' => esc_html__( 'Contact Form 7 — ফর্ম আইডি', 'generatepress-child' ),
				'desc' => esc_html__( 'CF7 ফর্মের নিউমেরিক আইডি লিখুন।', 'generatepress-child' ),
			],

			// CTA
			[
				'id'           => 'bmf_contact_cta_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'CTA ব্যাকগ্রাউন্ড ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'full',
				'return_value' => 'url',
			],
			[
				'id'   => 'bmf_contact_cta_head',
				'type' => 'text',
				'name' => esc_html__( 'CTA শিরোনাম', 'generatepress-child' ),
				'std'  => 'আপনার একটি দান বদলে দিতে পারে একজনের জীবন',
			],
			[
				'id'   => 'bmf_contact_cta_body',
				'type' => 'textarea',
				'name' => esc_html__( 'CTA বিবরণ', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'আজই আমাদের সাথে যুক্ত হোন এবং বেতাগীর অসহায় মানুষের পাশে দাঁড়ান।',
			],
			[
				'id'   => 'bmf_contact_cta_btn1_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ১ — টেক্সট', 'generatepress-child' ),
				'std'  => 'সরাসরি দান করুন',
			],
			[
				'id'  => 'bmf_contact_cta_btn1_url',
				'type' => 'url',
				'name' => esc_html__( 'CTA বাটন ১ — লিঙ্ক', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_contact_cta_btn2_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ২ — টেক্সট (ঐচ্ছিক)', 'generatepress-child' ),
				'std'  => 'স্বেচ্ছাসেবী হিসেবে যোগ দিন',
			],
			[
				'id'   => 'bmf_contact_cta_btn2_url',
				'type' => 'url',
				'name' => esc_html__( 'CTA বাটন ২ — লিঙ্ক (ঐচ্ছিক)', 'generatepress-child' ),
			],
		],
	];

	return $meta_boxes;
} );

// Hide Contact meta box on any page that does not use the Contact Page template.
add_action( 'add_meta_boxes_page', function( WP_Post $post ) {
	if ( get_page_template_slug( $post->ID ) !== 'templates/page-contact.php' ) {
		remove_meta_box( 'bmf_contact', 'page', 'normal' );
	}
}, 20 );

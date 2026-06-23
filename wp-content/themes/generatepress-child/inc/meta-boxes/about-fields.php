<?php
/**
 * Meta Box field groups: About Us page
 * Restricted to the About Us Page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	// ── Main About fields (Hero, Mission, History, Global, CTA) ──
	$meta_boxes[] = [
		'title'  => esc_html__( 'আমাদের সম্পর্কে — বিষয়বস্তু', 'generatepress-child' ),
		'id'     => 'bmf_about',
		'pages'  => [ 'page' ],
		'fields'  => [

			// Hero
			[
				'id'           => 'bmf_about_hero_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'হিরো ব্যাকগ্রাউন্ড ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'full',
				'return_value' => 'url',
			],
			[
				'id'   => 'bmf_about_hero_title',
				'type' => 'text',
				'name' => esc_html__( 'হিরো শিরোনাম', 'generatepress-child' ),
				'std'  => 'মানবতার সেবায় আমরা একবদ্ধ',
			],
			[
				'id'   => 'bmf_about_hero_subtitle',
				'type' => 'textarea',
				'name' => esc_html__( 'হিরো সাবটাইটেল', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'বেতাগী ইউনিয়ন ৭ নং ওয়ার্ডের শিকড় থেকে বিশ্বজুড়ে বিস্তৃত আমাদের মানবিক যাত্রা।',
			],

			// Mission & Local Roots
			[
				'id'           => 'bmf_about_mission_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'লক্ষ্য সেকশন — ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'large',
				'return_value' => 'url',
			],
			[
				'id'   => 'bmf_about_mission_head',
				'type' => 'text',
				'name' => esc_html__( 'লক্ষ্য সেকশন — শিরোনাম', 'generatepress-child' ),
				'std'  => 'স্বচ্ছতা ও স্থানীয় শেকড়ের প্রতি দায়বদ্ধতা',
			],
			[
				'id'   => 'bmf_about_mission_body',
				'type' => 'textarea',
				'name' => esc_html__( 'লক্ষ্য সেকশন — বিবরণ', 'generatepress-child' ),
				'rows' => 4,
				'std'  => 'বেতাগী ইউনিয়ন ৭ নং ওয়ার্ডের মানুষের পাশে দাঁড়ানোর লক্ষ্য নিয়ে আমাদের যাত্রা শুরু। আমরা বিশ্বাস করি, প্রকৃত উন্নয়ন সম্ভব হয় যখন স্থানীয় সমস্যাগুলো স্থানীয় উদ্যোগের মাধ্যমেই সমাধান করা হয়। প্রতিটি দানে স্বচ্ছতা নিশ্চিত করা আমাদের অন্যতম প্রধান স্তম্ভ।',
			],

			// History
			[
				'id'   => 'bmf_about_history_story',
				'type' => 'textarea',
				'name' => esc_html__( 'ইতিহাস — শুরুর গল্প', 'generatepress-child' ),
				'rows' => 4,
				'std'  => 'বেতাগী মানবিক ফাউন্ডেশন কেবল একটি সংগঠন নয়, এটি ৭ নং ওয়ার্ডের একদল উদ্যমী তরুণের স্বপ্নের ফসল। প্রতিষ্ঠার প্রথম দিন থেকেই আমরা অসুস্থদের পাশে দাঁড়ানো, দরিদ্র শিক্ষার্থীদের সহায়তা এবং জরুরি ত্রাণ বিতরণে সর্বদা সচেষ্ট থেকেছি।',
			],

			// Global Connection
			[
				'id'   => 'bmf_about_global_head',
				'type' => 'text',
				'name' => esc_html__( 'গ্লোবাল সেকশন — শিরোনাম', 'generatepress-child' ),
				'std'  => 'প্রবাসীদের হৃদস্পন্দন: ওমান ও কাতার থেকে সমর্থন',
			],
			[
				'id'   => 'bmf_about_global_body',
				'type' => 'textarea',
				'name' => esc_html__( 'গ্লোবাল সেকশন — বিবরণ', 'generatepress-child' ),
				'rows' => 3,
				'std'  => 'আমাদের এই পথচলায় ওমান এবং কাতারে অবস্থানরত আমাদের প্রবাসী ভাইদের অবদান অনস্বীকার্য। সুদূর প্রবাসে থেকেও নিজ গ্রামের মানুষের প্রতি তাদের ভালোবাসা এবং নিয়মিত আর্থিক সহযোগিতা আমাদের কার্যক্রমকে বেগবান করছে।',
			],

			// CTA
			[
				'id'           => 'bmf_about_cta_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'CTA ব্যাকগ্রাউন্ড ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'full',
				'return_value' => 'url',
			],
			[
				'id'   => 'bmf_about_cta_head',
				'type' => 'text',
				'name' => esc_html__( 'CTA শিরোনাম', 'generatepress-child' ),
				'std'  => 'আপনার একটি দান বদলে দিতে পারে একজনের জীবন',
			],
			[
				'id'   => 'bmf_about_cta_body',
				'type' => 'textarea',
				'name' => esc_html__( 'CTA বিবরণ', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'আজই আমাদের সাথে যুক্ত হোন এবং বেতাগীর অসহায় মানুষের পাশে দাঁড়ান।',
			],
			[
				'id'   => 'bmf_about_cta_btn1_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ১ — টেক্সট', 'generatepress-child' ),
				'std'  => 'সরাসরি দান করুন',
			],
			[
				'id'          => 'bmf_about_cta_btn1_url',
				'type'        => 'url',
				'name'        => esc_html__( 'CTA বাটন ১ — লিঙ্ক', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_about_cta_btn2_text',
				'type' => 'text',
				'name' => esc_html__( 'CTA বাটন ২ — টেক্সট (ঐচ্ছিক)', 'generatepress-child' ),
				'std'  => 'স্বেচ্ছাসেবী হিসেবে যোগ দিন',
			],
			[
				'id'   => 'bmf_about_cta_btn2_url',
				'type' => 'url',
				'name' => esc_html__( 'CTA বাটন ২ — লিঙ্ক (ঐচ্ছিক)', 'generatepress-child' ),
			],
		],
	];

	// ── Income-Expenditure Policy tabs ──
	$meta_boxes[] = [
		'title'  => esc_html__( 'আয়-ব্যয়ের নীতিমালা', 'generatepress-child' ),
		'id'     => 'bmf_about_policy',
		'pages'  => [ 'page' ],
		'fields'  => [
			[
				'id'      => 'bmf_policy_income',
				'type'    => 'wysiwyg',
				'name'    => esc_html__( 'আয়ের উৎস', 'generatepress-child' ),
				'options' => [ 'toolbar' => 'simple', 'media_buttons' => false ],
			],
			[
				'id'      => 'bmf_policy_service',
				'type'    => 'wysiwyg',
				'name'    => esc_html__( 'সেবামূলক ব্যয়', 'generatepress-child' ),
				'options' => [ 'toolbar' => 'simple', 'media_buttons' => false ],
			],
			[
				'id'      => 'bmf_policy_management',
				'type'    => 'wysiwyg',
				'name'    => esc_html__( 'ব্যবস্থাপনা ব্যয়', 'generatepress-child' ),
				'options' => [ 'toolbar' => 'simple', 'media_buttons' => false ],
			],
		],
	];

	return $meta_boxes;
} );

// Hide About meta boxes on any page that does not use the About page template.
add_action( 'add_meta_boxes_page', function( WP_Post $post ) {
	if ( get_page_template_slug( $post->ID ) !== 'templates/page-about.php' ) {
		remove_meta_box( 'bmf_about',        'page', 'normal' );
		remove_meta_box( 'bmf_about_policy', 'page', 'normal' );
	}
}, 20 );

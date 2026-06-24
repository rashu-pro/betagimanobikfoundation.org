<?php
/**
 * Meta Box field groups: Donate page
 * Restricted to the Donate Page template only.
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {

	$meta_boxes[] = [
		'title'  => esc_html__( 'দান পাতা — বিষয়বস্তু', 'generatepress-child' ),
		'id'     => 'bmf_donate',
		'pages'  => [ 'page' ],
		'fields' => [

			// ── Hero ──
			[
				'id'   => 'bmf_donate_hero_title',
				'type' => 'text',
				'name' => esc_html__( 'হিরো শিরোনাম', 'generatepress-child' ),
				'std'  => 'আপনার দানে একটি পরিবার স্বাবলম্বী হোক',
			],
			[
				'id'   => 'bmf_donate_hero_subtitle',
				'type' => 'textarea',
				'name' => esc_html__( 'হিরো সাবটাইটেল', 'generatepress-child' ),
				'rows' => 2,
				'std'  => 'বেতাগী মানবিক ফাউন্ডেশনের মাধ্যমে আপনার সাহায্য পৌঁছে দিন অভাবী মানুষের হাতে। স্বচ্ছতা এবং বিশ্বস্ততার সাথে আমরা কাজ করছি মানবতার সেবায়।',
			],

			// ── Bento Image ──
			[
				'id'           => 'bmf_donate_bento_image',
				'type'         => 'single_image',
				'name'         => esc_html__( 'বেন্টো গ্রিড — বাম ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'full',
				'return_value' => 'url',
			],

			// ── Bank Details ──
			[
				'id'   => 'bmf_donate_bank_name',
				'type' => 'text',
				'name' => esc_html__( 'ব্যাংক — অ্যাকাউন্ট নাম', 'generatepress-child' ),
				'std'  => 'বেতাগী মানবিক ফাউন্ডেশন',
			],
			[
				'id'   => 'bmf_donate_bank_number',
				'type' => 'text',
				'name' => esc_html__( 'ব্যাংক — অ্যাকাউন্ট নম্বর', 'generatepress-child' ),
				'std'  => '0818502000434',
			],
			[
				'id'   => 'bmf_donate_bank_branch',
				'type' => 'text',
				'name' => esc_html__( 'ব্যাংক — ব্যাংক ও শাখা', 'generatepress-child' ),
				'std'  => 'সোনালী ব্যাংক পিএলসি, চুয়েট শাখা',
			],

			// ── Mobile Banking ──
			[
				'id'   => 'bmf_donate_mobile_number',
				'type' => 'text',
				'name' => esc_html__( 'মোবাইল ব্যাংকিং — বিকাশ নম্বর', 'generatepress-child' ),
				'std'  => '01814-396128',
			],
			[
				'id'           => 'bmf_donate_bkash_logo',
				'type'         => 'single_image',
				'name'         => esc_html__( 'মোবাইল ব্যাংকিং — লোগো ছবি', 'generatepress-child' ),
				'force_delete' => false,
				'image_size'   => 'medium',
				'return_value' => 'url',
			],

			// ── Contact Form 7 ──
			[
				'id'   => 'bmf_donate_cf7_id',
				'type' => 'text',
				'name' => esc_html__( 'Contact Form 7 — ফর্ম আইডি', 'generatepress-child' ),
				'desc' => esc_html__( 'Contact Form 7 প্লাগিন থেকে ফর্ম তৈরি করার পর এখানে ফর্মের ID নম্বরটি দিন।', 'generatepress-child' ),
			],

		],
	];

	return $meta_boxes;
} );

// Hide Donate meta boxes on any page that does not use the Donate page template.
add_action( 'add_meta_boxes_page', function( WP_Post $post ) {
	if ( get_page_template_slug( $post->ID ) !== 'templates/page-donate.php' ) {
		remove_meta_box( 'bmf_donate', 'page', 'normal' );
	}
}, 20 );

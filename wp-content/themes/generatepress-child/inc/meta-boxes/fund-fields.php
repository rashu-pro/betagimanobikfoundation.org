<?php
/**
 * Meta Box field group: Fund — Homepage featuring + card content fields
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'id'         => 'bmf_fund_settings',
		'title'      => esc_html__( 'তহবিল সেটিংস', 'generatepress-child' ),
		'post_types' => [ 'fund' ],
		'fields'     => [
			[
				'id'   => 'bmf_fund_featured',
				'type' => 'checkbox',
				'name' => esc_html__( 'হোমপেজে দেখাও', 'generatepress-child' ),
				'desc' => esc_html__( 'চেক করলে এই তহবিলটি হোমপেজের "অনদান তহবিলসমূহ" অংশে দেখাবে।', 'generatepress-child' ),
			],
			[
				'id'   => 'bmf_fund_desc',
				'type' => 'textarea',
				'name' => esc_html__( 'সংক্ষিপ্ত বিবরণ', 'generatepress-child' ),
				'desc' => esc_html__( 'কার্ডে দেখানো হবে — সংক্ষিপ্ত রাখুন।', 'generatepress-child' ),
				'rows' => 3,
			],
			[
				'id'          => 'bmf_fund_donate_url',
				'type'        => 'url',
				'name'        => esc_html__( 'দান লিংক', 'generatepress-child' ),
				'desc'        => esc_html__( 'ফাঁকা রাখলে পোস্টের নিজস্ব পেজ লিংক ব্যবহার হবে।', 'generatepress-child' ),
				'placeholder' => 'https://',
			],
		],
	];

	return $meta_boxes;
} );

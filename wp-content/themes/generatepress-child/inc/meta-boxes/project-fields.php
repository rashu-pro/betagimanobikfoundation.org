<?php
/**
 * Meta Box field group: Project — Homepage featuring checkbox
 *
 * @package generatepress-child
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'id'         => 'bmf_project_settings',
		'title'      => esc_html__( 'প্রকল্প সেটিংস', 'generatepress-child' ),
		'post_types' => [ 'project' ],
		'fields'     => [
			[
				'id'   => 'bmf_project_featured',
				'type' => 'checkbox',
				'name' => esc_html__( 'হোমপেজে দেখাও', 'generatepress-child' ),
				'desc' => esc_html__( 'চেক করলে এই কার্যক্রমটি হোমপেজের "চলমান কার্যক্রমসমূহ" অংশে দেখাবে।', 'generatepress-child' ),
			],
			[
				'id'          => 'bmf_project_category',
				'type'        => 'text',
				'name'        => esc_html__( 'বিভাগ', 'generatepress-child' ),
				'desc'        => esc_html__( 'যেমন: শিক্ষা সহায়তা, দুর্যোগ ত্রাণ', 'generatepress-child' ),
				'placeholder' => esc_html__( 'শিক্ষা সহায়তা', 'generatepress-child' ),
			],
			[
				'id'          => 'bmf_project_goal',
				'type'        => 'number',
				'name'        => esc_html__( 'লক্ষ্যমাত্রা (৳)', 'generatepress-child' ),
				'desc'        => esc_html__( 'তহবিলের লক্ষ্যমাত্রা টাকায়', 'generatepress-child' ),
				'min'         => 0,
				'placeholder' => '50000',
			],
			[
				'id'          => 'bmf_project_collected',
				'type'        => 'number',
				'name'        => esc_html__( 'সংগৃহীত (৳)', 'generatepress-child' ),
				'desc'        => esc_html__( 'এখন পর্যন্ত সংগৃহীত পরিমাণ টাকায়', 'generatepress-child' ),
				'min'         => 0,
				'placeholder' => '37500',
			],
		],
	];

	return $meta_boxes;
} );

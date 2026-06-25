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

// Admin list: add "অবস্থা" column after the title column.
add_filter( 'manage_project_posts_columns', function( $columns ) {
	$new = [];
	foreach ( $columns as $key => $label ) {
		$new[ $key ] = $label;
		if ( 'title' === $key ) {
			$new['bmf_status'] = esc_html__( 'অবস্থা', 'generatepress-child' );
		}
	}
	return $new;
} );

add_action( 'manage_project_posts_custom_column', function( $column, $post_id ) {
	if ( 'bmf_status' !== $column ) {
		return;
	}
	$status = get_post_meta( $post_id, 'bmf_project_status', true );
	if ( 'past' === $status ) {
		echo '<span class="bmf-status-badge bmf-status-past">' . esc_html__( 'সম্পন্ন', 'generatepress-child' ) . '</span>';
	} else {
		echo '<span class="bmf-status-badge bmf-status-current">' . esc_html__( 'চলমান', 'generatepress-child' ) . '</span>';
	}
}, 10, 2 );

// Admin list: filter dropdown by status.
add_action( 'restrict_manage_posts', function( $post_type ) {
	if ( 'project' !== $post_type ) {
		return;
	}
	$selected = isset( $_GET['bmf_project_status'] ) ? sanitize_key( $_GET['bmf_project_status'] ) : '';
	?>
	<select name="bmf_project_status">
		<option value=""><?php esc_html_e( 'সব অবস্থা', 'generatepress-child' ); ?></option>
		<option value="current" <?php selected( $selected, 'current' ); ?>><?php esc_html_e( 'চলমান', 'generatepress-child' ); ?></option>
		<option value="past"    <?php selected( $selected, 'past'    ); ?>><?php esc_html_e( 'সম্পন্ন', 'generatepress-child' ); ?></option>
	</select>
	<?php
} );

add_filter( 'parse_query', function( WP_Query $query ) {
	global $pagenow;
	if (
		! is_admin()
		|| 'edit.php' !== $pagenow
		|| ! $query->is_main_query()
		|| 'project' !== ( $query->query['post_type'] ?? '' )
		|| empty( $_GET['bmf_project_status'] )
	) {
		return;
	}
	$query->query_vars['meta_key']   = 'bmf_project_status';
	$query->query_vars['meta_value'] = sanitize_key( $_GET['bmf_project_status'] );
} );

// Admin list: inline badge styles, scoped to the project list screen only.
add_action( 'admin_head', function() {
	$screen = get_current_screen();
	if ( ! $screen || 'edit-project' !== $screen->id ) {
		return;
	}
	echo '<style>
	.bmf-status-badge { display:inline-block; padding:2px 10px; border-radius:9999px; font-size:12px; font-weight:600; }
	.bmf-status-current { background:#E8F5F1; color:#008e48; }
	.bmf-status-past    { background:#f1f5f9; color:#64748b; }
	</style>';
} );

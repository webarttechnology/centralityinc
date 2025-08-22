<?php
// Duplicate page
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}
	if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
		return;
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	$post = get_post( $post_id );
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
	if (isset( $post ) && $post != null) {
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
		$new_post_id = wp_insert_post( $args );
		$taxonomies = get_object_taxonomies($post->post_type);
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				if( $meta_key == '_wp_old_slug' ) continue;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	}
	return $actions;
}
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

// Classic Editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Classic Widgets
function example_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

// theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );


// Register menu location
register_nav_menus(array(
	"main_menu" => "Primary Menu",
	"footer_menu_one" => "Footer Menu",
	"copyright_menu" => "Copyright Menu",
));


function mytheme_customize_register( $wp_customize ) {
	// Add a setting for the logo
	$wp_customize->add_setting( 'custom_logo' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
		'label'        => __( 'Logo', 'mytheme' ),
		'section'    => 'title_tagline',
		'settings'   => 'custom_logo',
	) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_setup() {
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'   => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));
}

// Disable comments globally and remove comment-related features in WordPress backend
function disable_comments_backend() {
	// 1. Disable support for comments and trackbacks in all post types
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}

	// 2. Close comments on all existing posts
	add_filter('comments_open', '__return_false', 20, 2);
	add_filter('pings_open', '__return_false', 20, 2);

	// 3. Remove comments from admin menu
	add_action('admin_menu', function() {
		remove_menu_page('edit-comments.php');
	});

	// 4. Remove comments metabox from post and page edit screens
	add_action('init', function() {
		remove_meta_box('commentstatusdiv', 'post', 'normal');
		remove_meta_box('commentstatusdiv', 'page', 'normal');
		remove_meta_box('commentsdiv', 'post', 'normal');
		remove_meta_box('commentsdiv', 'page', 'normal');
	});

	// 5. Remove comments from admin bar
	add_action('wp_before_admin_bar_render', function() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('comments');
	});

	// 6. Redirect any user trying to access comments page
	add_action('admin_init', function() {
		global $pagenow;
		if ($pagenow === 'edit-comments.php' || $pagenow === 'comment.php') {
			wp_redirect(admin_url());
			exit;
		}
	});

	// 7. Disable comments in the database for new posts
	add_filter('pre_option_default_comment_status', '__return_false');
	add_filter('pre_option_default_ping_status', '__return_false');

	// 8. Remove comment-related dashboard widgets
	add_action('wp_dashboard_setup', function() {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	});
}

// Hook the function to run during initialization
add_action('init', 'disable_comments_backend');

add_action('after_setup_theme', function() {
	load_theme_textdomain('secure-custom-fields', get_template_directory() . '/languages');
});
function custom_theme_setup() {
	add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);
}

add_action('after_setup_theme', 'custom_theme_setup');
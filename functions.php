<?php
/**
 * fundraise17 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fundraise17
 */

if ( ! function_exists( 'fundraise17_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fundraise17_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fundraise17, use a find and replace
		 * to change 'fundraise17' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fundraise17', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fundraise17' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fundraise17_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fundraise17_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fundraise17_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fundraise17_content_width', 640 );
}
add_action( 'after_setup_theme', 'fundraise17_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fundraise17_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fundraise17' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fundraise17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fundraise17_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fundraise17_scripts() {
	wp_enqueue_style( 'fundraise17-style', get_stylesheet_uri() );

	wp_enqueue_script( 'fundraise17-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fundraise17-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

//materialize
	wp_enqueue_script( 'fundraise17-materialize-min', get_template_directory_uri() . '/js/materialize/bin/materialize.min.js', array(), '', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'fundraise17_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// hook to add in woocommerce
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<main id="main">';
}

function my_theme_wrapper_end() {
  echo '</main>';
}

//hide does not support message
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}







// Register Custom Post Type
function organization() {

	$labels = array(
		'name'                  => _x( 'Organizations', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Organization', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Organizations', 'text_domain' ),
		'name_admin_bar'        => __( 'Organization', 'text_domain' ),
		'archives'              => __( 'Org Archives', 'text_domain' ),
		'attributes'            => __( 'Org Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Org:', 'text_domain' ),
		'all_items'             => __( 'All Organizations', 'text_domain' ),
		'add_new_item'          => __( 'Add New Organization', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Org', 'text_domain' ),
		'edit_item'             => __( 'Edit Org', 'text_domain' ),
		'update_item'           => __( 'Update Org', 'text_domain' ),
		'view_item'             => __( 'View Org', 'text_domain' ),
		'view_items'            => __( 'View Orgs', 'text_domain' ),
		'search_items'          => __( 'Search Orgs', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into org', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Orgs list', 'text_domain' ),
		'items_list_navigation' => __( 'Orgs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter orgs list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'org',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Organization', 'text_domain' ),
		'description'           => __( 'Organization Post Type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'organization', $args );

}
add_action( 'init', 'organization', 0 );

// NEED TO CUSTOMIZE THIS FOR MY FORM

	add_filter( 'gform_upload_path', function ( $path_info, $form_id ) {
	    GFCommon::log_debug( "log_upload_path(): path_info for form #{$form_id} => " . print_r( $path_info, true ) );
	 
	    return $path_info;
	}, 1, 2 );



// // After submitting add-your-org button using a couple of the form fields we will create a new organization (== custom post type of 'organization') in draft mode using some of the data from this form



add_action("gform_after_submission_3", "create_organization_organization_from_submission", 10, 2);
function create_organization_organization_from_submission($entry, $form){
// First need to create the post in its basic form
		$new_organization = array(
		  'post_title'  	=> ucwords($entry[1]),
		  'post_type'   	=> 'organization',
		  'post_status' 	=> 'draft'
		);

// 	// set my variables for the form / posts I'm referencing
	
		$orgName 					= ($entry['1']); 
		$orgLogo 					= ($entry['2']);
		$orgDescription 	= ($entry['3']);

		$contactName 			= ($entry['5']);
		$contactEmail 		= ($entry['6']);
		$contactPhone 		= ($entry['7']);

		$theId 						= wp_insert_post($new_organization); 

		
// 	// set my variables for the form / posts I'm referencing
// 	$imageField = ($entry['25']); 
// 	$url_field = ($entry['26']);
// 	$address = ($entry['1.1']);
// 	$suite = ($entry['1.2']);
// 	$city = ($entry['1.3']);
// 	$state = ($entry['1.4']);
// 	$zipcode = ($entry['1.5']);
// 	$phone = ($entry['6']);
// 	$theId = wp_insert_post($new_organization); 



// 	// Function Reference/wp insert attachment
// 	// https://codex.wordpress.org/Function_Reference/wp_insert_attachment
// 	// $filename should be the path to a file in the upload directory, and this is found just by referencing our entry[#]
		$filename = $orgLogo;

// 	// The ID of the post this attachment is for.
		$parent_post_id = $theId;

// 	// Check the type of file. We'll use this as the 'post_mime_type'.
		$filetype = wp_check_filetype( basename( $filename ), null );

// 	// Get the path to the upload directory.
		$wp_upload_dir = wp_upload_dir();

// 	// Prepare an array of post data for the attachment.
		$attachment = array(
			'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
			'post_mime_type' => $filetype['type'],
			'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);



		// Insert the attachment.
		$attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );

		// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );

		// Generate the metadata for the attachment, and update the database record.
		$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
		wp_update_attachment_metadata( $attach_id, $attach_data );

		// push the info from our GF to our post
		// ex: update_field('acf_name', $variable_pulling_in_GF_answer, $postID)
		update_field('name_of_organization', $orgName, $theId);
		update_field('organization_logo', $attach_id, $theId);
		update_field('organization_brief_message', $orgDescription, $theId);
		update_field('contact_name', $contactName, $theId);
		update_field('contact_email', $contactEmail, $theId);
		update_field('contact_phone', $contactPhone, $theId);
 }

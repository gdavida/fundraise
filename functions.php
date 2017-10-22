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

//materialize
	wp_enqueue_script( 'fundraise17-materialize-min', get_template_directory_uri() . '/js/bin/materialize.min.js', array(), '', true );

//jquery
	wp_enqueue_script( 'fundraise17-materialize-min', get_template_directory_uri() . '/js/bin/materialize.min.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

// jQuery
wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, true );
wp_enqueue_script('jQuery');

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



// NEED TO CUSTOMIZE THIS FOR MY FORM
// // After submitting add-your-org button using a couple of the form fields we will create a new organization (== custom post type of 'institution') in draft mode using some of the data from this form



// add_action("gform_after_submission_11", "create_organization_institution_from_submission", 10, 2);
// function create_organization_institution_from_submission($entry, $form){
// 	//First need to create the post in its basic form
// 	$new_institution = array(
//         'post_title'  	=> ucwords($entry[24]),
//         'post_type'   	=> 'institution',
//         'post_status' 	=> 'draft'
        
// 	);
// 	// set my variables for the form / posts I'm referencing
// 	$imageField = ($entry['25']); 
// 	$url_field = ($entry['26']);
// 	$address = ($entry['1.1']);
// 	$suite = ($entry['1.2']);
// 	$city = ($entry['1.3']);
// 	$state = ($entry['1.4']);
// 	$zipcode = ($entry['1.5']);
// 	$phone = ($entry['6']);
// 	$theId = wp_insert_post($new_institution); 
// 	// Function Reference/wp insert attachment
// 	// https://codex.wordpress.org/Function_Reference/wp_insert_attachment
// 	// $filename should be the path to a file in the upload directory, and this is found just by referencing our entry[#]
// 	$filename = $imageField;
// 	// The ID of the post this attachment is for.
// 	$parent_post_id = $theId;
// 	// Check the type of file. We'll use this as the 'post_mime_type'.
// 	$filetype = wp_check_filetype( basename( $filename ), null );
// 	// Get the path to the upload directory.
// 	$wp_upload_dir = wp_upload_dir();
// 	// Prepare an array of post data for the attachment.
// 	$attachment = array(
// 		'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
// 		'post_mime_type' => $filetype['type'],
// 		'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
// 		'post_content'   => '',
// 		'post_status'    => 'inherit'
// 	);
// 	// Insert the attachment.
// 	$attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );
// 	// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
// 	require_once( ABSPATH . 'wp-admin/includes/image.php' );
// 	// Generate the metadata for the attachment, and update the database record.
// 	$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
// 	wp_update_attachment_metadata( $attach_id, $attach_data );
// 	// push the info from our GF to our post
// 	update_field('card_image', $attach_id, $theId);
// 	update_field('url', $url_field, $theId);
// 	update_field('address', $address, $theId);
// 	update_field('suite_num', $suite, $theId);
// 	$taxonomy4 = "city";
// 	wp_set_object_terms( $theId, $city, $taxonomy4 );
// 	$taxonomy5 = "state";
// 	wp_set_object_terms( $theId, $state, $taxonomy5 );
// 	update_field('zip', $zipcode, $theId);
// 	update_field('phone', $phone, $theId);
// }
// // Added custom validation for minimum word count
// add_filter("gform_field_validation_11_10", "validate_word_count", 10, 2);
// function validate_word_count($result, $value, $form, $field){
//     if (strlen($value) !== 9) //required number
//     {
//         $result["is_valid"] = false;
//         $result["message"] = "Please enter a 9-digit routing number";
//     }
//     return $result;
// }

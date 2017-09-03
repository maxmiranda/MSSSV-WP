<?php
/**
 * msssv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package msssv
 */

if ( ! function_exists( 'msssv_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function msssv_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on msssv, use a find and replace
	 * to change 'msssv' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'msssv', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'msssv' ),
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
	add_theme_support( 'custom-background', apply_filters( 'msssv_custom_background_args', array(
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
add_action( 'after_setup_theme', 'msssv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function msssv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'msssv_content_width', 640 );
}
add_action( 'after_setup_theme', 'msssv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function msssv_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'msssv' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'msssv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'msssv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function msssv_scripts() {
	wp_enqueue_style( 'msssv-style', get_stylesheet_uri() );

	wp_enqueue_script( 'msssv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'msssv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'msssv_scripts' );

function my_excerpt_length($length) {
return 10;
}
add_filter('excerpt_length', 'my_excerpt_length');


function my_acf_save_post( $post_id ) {
    // get new value
    $partners = get_field('partners');

		foreach($partners as $partner) {
			$page = array(
         'post_title' => $partner['attorney_name'],
				 'post_content' =>
				 "<div class = 'attorneypagetext'>".
					"<div class = 'attorneyinfo'>".
					$partner['email']. "\n". "tel ".
					$partner['telephone_number']."\n". "fax ".
					$partner['fax_number']."\n".
					$partner['college']."\n".
					$partner['law_school'].
					"</div>".
					"<div class = 'attorneybio'>".
					$partner['attorney_bio'].
					"</div>".
					"</div>" ,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_type' => 'page',
         'post_parent' => 18 // ID of the parent page
				 ,'post_excerpt' => $partner['partner_photo']
     	);

		 	$page_exists = get_page_by_title( $page['post_title'] );

    	if( $page_exists == null ) {
        	// Page doesn't exist, so lets add it
        	$insert = wp_insert_post( $page );
        	if( $insert ) {
            // Page was inserted ($insert = new page's ID)
        	}
	    } else {
				$page_exists = array(
					'ID' => $page_exists-> ID,
					'post_title' => $partner['attorney_name'],
					'post_content' =>
					"<div class = 'attorneypagetext'>".
					 "<div class = 'attorneyinfo'>".
					 $partner['email']. "\n". "tel ".
					 $partner['telephone_number']."\n". "fax ".
					 $partner['fax_number']."\n".
					 $partner['college']."\n".
					 $partner['law_school'].
					 "</div>".
					 "<div class = 'attorneybio'>".
					 $partner['attorney_bio'].
					 "</div>".
					 "</div>" ,
					'post_status' => 'publish',
					'post_author' => 1,
					'post_type' => 'page',
					'post_parent' => 18 // ID of the parent page
					,'post_excerpt' => $partner['partner_photo']
	     	);
				wp_update_post($page_exists);
        // Page already exists

			}
		}

		$associates = get_field('associates');
		foreach($associates as $associate) {
			$page = array(
         'post_title' => $associate['attorney_name'],
         'post_content' => "<div class = 'attorneypagetext'>".
					"<div class = 'attorneyinfo'>".
					$associate['email']. "\n". "tel ".
					$associate['telephone_number']."\n". "fax ".
					$associate['fax_number']."\n".
					$associate['college']."\n".
					$associate['law_school'].
					"</div>".
					"<div class = 'attorneybio'>".
					$associate['attorney_bio'].
					"</div>".
					"</div>" ,
				 'post_status' => 'publish',
         'post_author' => 1,
         'post_type' => 'page',
         'post_parent' => 18 // ID of the parent page
     	);

		 	$page_exists = get_page_by_title( $page['post_title'] );

    	if( $page_exists == null ) {
        	// Page doesn't exist, so lets add it
        	$insert = wp_insert_post( $page );
        	if( $insert ) {
            // Page was inserted ($insert = new page's ID)
        	}
	    } else {
				$page_exists = array(
					 'ID' => $page_exists-> ID,
	         'post_title' => $associate['attorney_name'],
	         'post_content' => "<div class = 'attorneypagetext'>".
						"<div class = 'attorneyinfo'>".
						$associate['email']. "\n". "tel ".
						$associate['telephone_number']."\n". "fax ".
						$associate['fax_number']."\n".
						$associate['college']."\n".
						$associate['law_school'].
						"</div>".
						"<div class = 'attorneybio'>".
						$associate['attorney_bio'].
						"</div>".
						"</div>" ,
	         'post_status' => 'publish',
	         'post_author' => 1,
	         'post_type' => 'page',
	         'post_parent' => 18 // ID of the parent page
	     	);
				wp_update_post($page_exists);
        // Page already exists
				}
			}

		$of_counsel = get_field('of_counsel');
		foreach($of_counsel as $counsel) {
			$page = array(
         'post_title' => $counsel['attorney_name'],
         'post_content' => "<div class = 'attorneypagetext'>".
					"<div class = 'attorneyinfo'>".
					$counsel['email']. "\n". "tel ".
					$counsel['telephone_number']."\n". "fax ".
					$counsel['fax_number']."\n".
					$counsel['college']."\n".
					$counsel['law_school'].
					"</div>".
					"<div class = 'attorneybio'>".
					$counsel['attorney_bio'].
					"</div>".
					"</div>",
         'post_status' => 'publish',
         'post_author' => 1,
         'post_type' => 'page',
         'post_parent' => 18 // ID of the parent page
     	);


		 	$page_exists = get_page_by_title( $page['post_title'] );

    	if( $page_exists == null ) {
        	// Page doesn't exist, so lets add it
        	$insert = wp_insert_post( $page );
        	if( $insert ) {
            // Page was inserted ($insert = new page's ID)
        	}
	    } else {
				$page_exists = array(
					 'ID' => $page_exists-> ID,
	         'post_title' => $counsel['attorney_name'],
	         'post_content' => "<div class = 'attorneyinfo'>".
					$counsel['email']. "\n".
					$counsel['telephone_number']."\n".
					$counsel['fax_number']."\n".
					$counsel['college']."\n".
					$counsel['law_school'].
					"</div>".
					"<div class = 'attorneybio'>".
					$counsel['attorney_bio'].
					"</div>".
					"</div>",
	         'post_status' => 'publish',
	         'post_author' => 1,
	         'post_type' => 'page',
	         'post_parent' => 18 // ID of the parent page
	     	);
				wp_update_post($page_exists);
        // Page already exists
				}
			}
}

    // do something



add_action('acf/save_post', 'my_acf_save_post', 20);


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
require get_template_directory() . '/inc/jetpack.php';

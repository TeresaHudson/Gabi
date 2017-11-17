<?php
/**
 * Gabrielle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gabrielle
 */

if ( ! function_exists( 'gabrielle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gabrielle_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Gabrielle, use a find and replace
	 * to change 'gabrielle' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gabrielle', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'gabrielle' ),
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
	add_theme_support( 'custom-background', apply_filters( 'gabrielle_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'gabrielle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gabrielle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gabrielle_content_width', 640 );
}
add_action( 'after_setup_theme', 'gabrielle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gabrielle_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'gabrielle' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gabrielle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'FatFooter Column 1', 'gabrielle' ),
		'id'            => 'fatfooter-1',
		'description'   => esc_html__( 'Add widgets here.', 'gabrielle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'FatFooter Column 2', 'gabrielle' ),
		'id'            => 'fatfooter-2',
		'description'   => esc_html__( 'Add widgets here.', 'gabrielle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'FatFooter Column 3', 'gabrielle' ),
		'id'            => 'fatfooter-3',
		'description'   => esc_html__( 'Add widgets here.', 'gabrielle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'FatFooter Column 4', 'gabrielle' ),
		'id'            => 'fatfooter-4',
		'description'   => esc_html__( 'Add widgets here.', 'gabrielle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gabrielle_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gabrielle_scripts() {
	

	wp_enqueue_style( 'gabrielle-style-min', get_stylesheet_uri().'/style.css' );

	wp_enqueue_script( 'gabrielle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gabrielle-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'gabrielle-style', get_stylesheet_uri() );

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,700', false );

	wp_enqueue_script( 'flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	

}
add_action( 'wp_enqueue_scripts', 'gabrielle_scripts' );


/** FLEXSLIDER **/
 
add_action( 'wp_footer', 'print_my_script' );
 
function print_my_script() {

	if ( is_front_page() ) {

  	echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
  	<script defer src='" . get_stylesheet_directory_uri() . "/js/jquery.flexslider.js'></script>

	  <script type='text/javascript'>
	    $(window).load(function(){

				$('#flex-main-header').flexslider({
				    animation: 'slide',
					namespace: 'flex-main-header'
				});

			 	$('#flex-testimonials').flexslider({
				    animation: 'slide',
				    namespace: 'flex-testimonials'
				
				});

	     		$('#flex-posts').flexslider({
				    animation: 'slide',
					namespace: 'flex-posts'
				});

				

	    });
	  </script>";
	} else {
		return;
	}
}


/** Add options page for home page **/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Home Page Setup',
		'menu_title'	=> 'Home Page Setup',
		'menu_slug' 	=> 'home-page-setup',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

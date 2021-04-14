<?php
/**
 * Off Brains functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Off_Brains
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'off_brains_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function off_brains_setup() {

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'off-brains' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'off_brains_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'off_brains_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function off_brains_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'off_brains_content_width', 640 );
}
add_action( 'after_setup_theme', 'off_brains_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function off_brains_scripts() {
	wp_enqueue_style( 'slicksliderstyles', get_template_directory_uri() . '/assets/slick-slider/slick.css', true );
	wp_enqueue_style( 'slicksliderthemestyles', get_template_directory_uri() . '/assets/slick-slider/slick-theme.css', true );
	wp_enqueue_style( 'off-brains-style', get_stylesheet_uri(), array(), _S_VERSION );
	
  	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jqueryv3.6.0.min.js', true);
  	wp_enqueue_script( 'slicksliderscripts', get_template_directory_uri() . '/assets/slick-slider/slick.min.js', true);
  	wp_register_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', true);
	wp_enqueue_script( 'mainjs' );
	$templateArray = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'mainjs', 'themeUrl', $templateArray );
}
add_action( 'wp_enqueue_scripts', 'off_brains_scripts' );


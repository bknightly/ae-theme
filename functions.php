<?php
/**
 * AE Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AE_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ae_theme_setup() {

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on AE Theme, use a find and replace
		* to change 'ae-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ae-theme', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Header', 'ae-theme' ),
			'menu-1-mobile' => esc_html__( 'Header Mobile', 'ae-theme' ),
			'menu-2' => esc_html__( 'Footer', 'ae-theme' ),
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
			'ae_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'ae_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ae_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ae_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ae_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ae_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ae-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ae-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ae_theme_widgets_init' );

// Enqueue CSS / JS assets into theme
require get_template_directory() . '/inc/enqueue.php';

// Remove RSS links from header
require get_template_directory() . '/inc/remove-header-rss-links.php';

// Remove WP Json links from header
require get_template_directory() . '/inc/remove-wp-json.php';

// Remove xmlrpc.php from header
require get_template_directory() . '/inc/remove-rsd-wlmanifest.php';

// Remove Wordpress Version from header
require get_template_directory() . '/inc/remove-wp-version.php';

// Adds class support for nav_menu() list items
require get_template_directory() . '/inc/add-nav-menu-li-class.php';

// Filter classes added to WP Pagenavi
require get_template_directory() . '/inc/filter-wp-pagenavi-classes.php';

// Filter classes added to WP Pagenavi
require get_template_directory() . '/inc/excerpt-shortener.php';

// Filter classes added to WP Pagenavi
require get_template_directory() . '/inc/search-posts-only.php';

// Add custom Wordpress Shortcodes to theme
require get_template_directory() . '/inc/shortcodes.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Adds wrapper around Block elements
require get_template_directory() . '/inc/filter-block-output.php';

// Add logo to WP login page
require get_template_directory() . '/inc/custom-wp-login.php';

// Add WP Menu title filter (for adding modal data attribute)
require get_template_directory() . '/inc/filter-wp-menu-title-for-modal.php';

// Registers custom blocks generated by Advanced Custom Fields (ACF)
require get_template_directory() . '/inc/acf-register-blocks.php';

// Add ACF Options page to Dashboard for Footer section custom fields
require get_template_directory() . '/inc/acf-options-footer-section.php';

// Disables Gutenberg Blocks & Patterns not used in content editor
require get_template_directory() . '/inc/disable-unused-gutenberg-blocks.php';
require get_template_directory() . '/inc/disable-unused-gutenberg-patterns.php';

// Remove unused inline global CSS used for FSE
require get_template_directory() . '/inc/remove-fse-inline-styles.php';
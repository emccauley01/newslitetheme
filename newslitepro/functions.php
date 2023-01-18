<?php
/**
 * News Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package News_Lite
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
function newslitepro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on News Lite, use a find and replace
		* to change 'newslitepro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'newslitepro', get_template_directory() . '/languages' );

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
	add_image_size( 'post-thumbnails', 220, 138, true );
	add_image_size( 'slide-thumbnails', 386, 266, true );


	add_action( 'after_setup_theme', 'newslitepro_setup_theme' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'social-menu' => esc_html__( 'Social Menu', 'newslitepro' ),
			'static-menu' => esc_html__( 'Static Menu', 'newslitepro' ),
			'slide-menu' => esc_html__( 'Slide Toggle Menu', 'newslitepro' )
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
			'newslitepro_custom_background_args',
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
add_action( 'after_setup_theme', 'newslitepro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newslitepro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newslitepro_content_width', 640 );
}
add_action( 'after_setup_theme', 'newslitepro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newslitepro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newslitepro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newslitepro' ),
			'before_widget' => '<div class="sleeve"><div id="%1$s" class="ad ad-mpu widget %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '',
			'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Header Ad Banner',
		'id'            => 'header-ad-banner',
		'description'   => esc_html__( 'Header Ad Banner. Recommended banner size 590x200', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Top Header Button Ads',
		'id'            => 'header-top-button',
		'description'   => esc_html__( 'Top Header Ad Button Ads. Recommended banner size 320x95', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Bottom Header Button Ads',
		'id'            => 'header-bottom-button',
		'description'   => esc_html__( 'Bottom Header Ad Button Ads. Recommended banner size 320x95', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Skin Left Ad Banner',
		'id'            => 'skin-left-banner',
		'description'   => esc_html__( 'Skin Left Ad Banner.', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Skin Right Ad Banner',
		'id'            => 'skin-right-banner',
		'description'   => esc_html__( 'Skin Right Ad Banner.', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));


//Mobile Ads widgets

register_sidebar( array(
    'name' => 'Mobile Ads 1',
    'id' => 'mob-ads1',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );

register_sidebar( array(
    'name' => 'Mobile Ads 2',
    'id' => 'mob-ads2',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );
register_sidebar( array(
    'name' => 'Mobile Ads 3',
    'id' => 'mob-ads3',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );

register_sidebar( array(
    'name' => 'Mobile Ads 4',
    'id' => 'mob-ads4',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );

register_sidebar( array(
    'name' => 'Mobile Ads 5',
    'id' => 'mob-ads5',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );


register_sidebar( array(
    'name' => 'Mobile Ads 6',
    'id' => 'mob-ads6',
    'description' => 'Add Mobile Ads Code in HTML Widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );

register_sidebar( array(
	'name' => 'Mobile Ads 7',
	'id' => 'mob-ads7',
	'description' => 'Add Mobile Ads Code in HTML Widget',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	) );
	
register_sidebar( array(
	'name' => 'Mobile Ads 8',
	'id' => 'mob-ads8',
	'description' => 'Add Mobile Ads Code in HTML Widget',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	) );

register_sidebar( array(
	'name' => 'Mobile Ads 9',
	'id' => 'mob-ads9',
	'description' => 'Add Mobile Ads Code in HTML Widget',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	) );

	register_sidebar(array(
		'name' => 'Toggle First Section',
		'id'            => 'toggle-first-section',
		'description'   => esc_html__( 'You can update content of Toogle First Section by this section', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Toggle Last Section',
		'id'            => 'toggle-last-section',
		'description'   => esc_html__( 'You can update content of Toogle Last Section by this section', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name' => 'Footer Logo',
		'id'            => 'footer-logo',
		'description'   => esc_html__( 'Upload Footer Logo from here.', 'newslitepro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

}
add_action( 'widgets_init', 'newslitepro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newslitepro_scripts() {
	wp_enqueue_style( 'newslitepro-style', get_stylesheet_uri());

	wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css', array(), NULL);



	wp_enqueue_script( 'newslitepro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, false );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, false );

	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array(), _S_VERSION, false );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, false );

	wp_enqueue_script( 'imageloaded-js', get_template_directory_uri() . '/js/imagesLoaded.js', array(), _S_VERSION, false );

	wp_enqueue_script( 'jquerycircle-js', get_template_directory_uri() . '/js/jquery.cycle.js', array(), _S_VERSION, false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newslitepro_scripts' );

function my_custom_fonts() { 
    wp_enqueue_style( 'my-custom-fonts', get_template_directory_uri() . '/fonts/font.css', false );
}
add_action( 'wp_enqueue_scripts', 'my_custom_fonts' );
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

function custom_excerpt_length( $length ) {
    return '12';
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 200 );

function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');

function my_post_time_ago_function() {
	return sprintf( esc_html__( '%s ago', 'textdomain' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
	}
	add_filter( 'the_time', 'my_post_time_ago_function' );
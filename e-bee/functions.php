<?php
/**
 * e-bee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package e-bee
 */

if ( ! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

define('CONTACT_EMAIL', 'info@e-bee.eu');
define('CONTACT_TELEGRAM', 'https://t.me');
define('CONTACT_WHATSAPP', 'https://wa.me');
define('CONTACT_INSTAGRAM', 'https://instagram.com');
define('CONTACT_APPSTORE', 'https://www.apple.com/app-store/');
define('CONTACT_GOOGLE_PLAY', 'https://play.google.com/store/games?hl=en&gl=US');

/**
 * Lang switcher polylang
 */
require get_template_directory() . '/inc/lang-switcher.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function e_bee_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on e-bee, use a find and replace
        * to change 'e-bee' to the name of your theme in all the template files.
        */
    load_theme_textdomain('e-bee', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'lp-main-menu' => esc_html__('LP Main menu', 'e-bee'),
            'second-menu'  => esc_html__("Second menu", 'e-bee'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'e_bee_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function e_bee_content_width()
{
    $GLOBALS['content_width'] = apply_filters('e_bee_content_width', 640);
}

add_action('after_setup_theme', 'e_bee_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function e_bee_scripts()
{
    wp_enqueue_style('e-bee-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_style(
        'swiper-style',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        false
    );

    wp_enqueue_script(
        'e-bee-navigation',
        get_template_directory_uri() . '/js/navigation/navigation.js',
        array(),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        false,
        true
    );

    wp_enqueue_script(
        'e-bee-slider',
        get_template_directory_uri() . '/js/slider/slider.js',
        array(),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'lang-switcher',
        get_template_directory_uri() . '/js/lang-switcher/lang-switcher.js',
        array(),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'lang-tabs',
        get_template_directory_uri() . '/js/tabs/tabs.js',
        array(),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'micromodal',
        'https://unpkg.com/micromodal/dist/micromodal.min.js',
        array(),
        false,
        true
    );

    wp_enqueue_script(
        'modal',
        get_template_directory_uri() . '/js/modal/modal.js',
        array(),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'scrollreveal',
        'https://unpkg.com/scrollreveal',
        array(),
        false,
        true
    );

    wp_enqueue_script(
        'animation',
        get_template_directory_uri() . '/js/animation/animation.js',
        array('scrollreveal'),
        _S_VERSION,
        true
    );
}

add_action('wp_enqueue_scripts', 'e_bee_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Remove Global Styles and SVG Filters from WP 5.9.1 - 2022-02-27
function remove_global_styles_and_svg_filters() {
    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'remove_global_styles_and_svg_filters');

// This snippet removes the Global Styles and SVG Filters that are mostly if not only used in Full Site Editing in WordPress 5.9.1+
// Detailed discussion at: https://github.com/WordPress/gutenberg/issues/36834
// WP default filters: https://github.com/WordPress/WordPress/blob/7d139785ea0cc4b1e9aef21a5632351d0d2ae053/wp-includes/default-filters.php


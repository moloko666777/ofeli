<?php
/**
 * Olefi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Olefi
 */

require 'inc/instagram.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'olefi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function olefi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Olefi, use a find and replace
		 * to change 'olefi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'olefi', get_template_directory() . '/languages' );

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
				'menu_header' => esc_html__( 'Шапка', 'olefi' ),
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
				'olefi_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'olefi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function olefi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'olefi_content_width', 640 );
}
add_action( 'after_setup_theme', 'olefi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function olefi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'olefi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'olefi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'olefi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function olefi_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'olefi_scripts' );

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

//Polylang strings
add_action('init', function() {
    pll_register_string('ofeli-footer-schedule-title', 'Часы работы');
    pll_register_string('ofeli-footer-about-us', 'О нас');
    pll_register_string('ofeli-online-entry', 'Онлайн запись');
    pll_register_string('ofeli-view_instagram', 'Загляните к нам в инстаграм');
    pll_register_string('ofeli-in_proccess_work', 'В ПРОЦЕССЕ РАБОТЫ');
    pll_register_string('ofeli-length_hair', 'Линейка длины волос');
    pll_register_string('ofeli-lenght_1', '1 длина до середины уха');
    pll_register_string('ofeli-lenght_2', '2 длина по плечи');
    pll_register_string('ofeli-lenght_3', '3 длина ниже плечей до лопаток');
    pll_register_string('ofeli-lenght_4', '4 длина ниже лопаток');
    pll_register_string('ofeli-lenght_5', '5 длина до пояса');
    pll_register_string('ofeli-lenght_5_1', '1 длина ниже пояса');
    pll_register_string('ofeli-close', 'Закрыть');
    pll_register_string('ofeli-price_title', 'ПРАЙС');
    pll_register_string('ofeli-child_include', 'Дети до 7 лет включительно');
    pll_register_string('ofeli-women', 'Девушки');
    pll_register_string('ofeli-men', 'Мужчины');
    pll_register_string('ofeli-kids', 'Дети');
    pll_register_string('ofeli-callback-h3', 'Быть красивой и ухоженной — мечта любой женщины!');
    pll_register_string('ofeli-callback-h4', 'Хотите записаться к нам в салон?');
    pll_register_string('ofeli-callback-p', 'Заполните форму ниже и мы, с радостью, перезвоним Вам в течении 30 минут');
    pll_register_string('ofeli-callback-name', 'Ваше имя');
    pll_register_string('ofeli-callback-phone', 'Ваш телефон');
    pll_register_string('ofeli-callback_send', 'Отправить');
    pll_register_string('ofeli-home_page_service_title', 'Услуги');
    pll_register_string('ofeli-404-not-found', 'Страница не  найдена...');
    pll_register_string('ofeli-404-not-found-to-home', 'Вернуться на главную');
    pll_register_string('ofeli-online-call-success-true', 'Спасибо за заявку. В ближайшее время мы с Вами свяжемся!');
    pll_register_string('ofeli-online-call-success-false', 'Произошла ошибка. Повторите ещё раз!');
});

//Custom
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Общие настройки',
        'menu_title' => 'Общие настройки',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function getOption($name) {
    return get_field($name, 'option');
}

add_action( 'wp_ajax_callback', 'callback' );
add_action( 'wp_ajax_nopriv_callback', 'callback' );

function callback() {
    $data = $_POST;

    if(empty($data['name']) || empty($data['phone'])) {
        $status = false;
    } else {
        $message = "Имя: " . $data['name'] . PHP_EOL;
        $message .= "Телефон: " . $data['phone'];

        $status = wp_mail(get_option('admin_email'), 'Онлайн запись - Ofeli', $message);
    }

    wp_send_json([
        'status' => $status
    ]);

    die;
}

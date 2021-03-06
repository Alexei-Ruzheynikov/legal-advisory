<?php
/**
 * legal-advisory functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package legal-advisory
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'legal_advisory_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function legal_advisory_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on legal-advisory, use a find and replace
		 * to change 'legal-advisory' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'legal-advisory', get_template_directory() . '/languages' );

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
				'menu-header' => esc_html__( 'Header Navigation', 'legal-advisory' ),
				'menu-footer-1' => esc_html__('Footer Navigation 1', 'legal-advisory'),
				'menu-footer-2' => esc_html__('Footer Navigation 2', 'legal-advisory'),
			)
		);

		//Регистрирую новые пост тайпы
		function legal_advisory_register_custom_post_type() {
			register_post_type( 'testimonial', array(
				'labels' => array(
				'name'   => 'Отзывы',
				'singular_name' => 'Отзыв',
				'add_new'  => 'Добавить новый отзыв'
				),
				'public'  => true,
				'publicly_queryable' => true,
				'show_ui'   => true,
				'show_in_menu'  => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'testimonials'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => 'dashicons-admin-customizer',
				'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
			));

			register_post_type( 'service', array(
				'labels' => array(
				'name'   => 'Услуги',
				'singular_name' => 'Услуга',
				'add_new'  => 'Добавить новую'
				),
				'public'  => true,
				'publicly_queryable' => true,
				'show_ui'   => true,
				'show_in_menu'  => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'services'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => 'dashicons-dashboard',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			));

			register_post_type( 'news', array(
				'labels' => array(
				'name'   => 'Новости',
				'singular_name' => 'Новость',
				'add_new'  => 'Добавить новую'
				),
				'public'  => true,
				'publicly_queryable' => true,
				'show_ui'   => true,
				'show_in_menu'  => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'news'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => 'dashicons-admin-site',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			));
			register_post_type( 'feature', array(
				'labels' => array(
				'name'   => 'Кейсы',
				'singular_name' => 'Кейс',
				'add_new'  => 'Добавить новый'
				),
				'public'  => true,
				'publicly_queryable' => true,
				'show_ui'   => true,
				'show_in_menu'  => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'feature'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => 'dashicons-chart-pie',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			));

			//Создание таксономии для услуги
			register_taxonomy(
				// указывается название категории и название пост тайпа
				'service-type',
				'service',
				array(
					'label' => esc_html__('Service type'),
					'rewrite' => array('slug' => 'service-type'),
					'hierarhical' => true,
				) 
			);

			//Создание таксономии для новостей
			register_taxonomy(
				// указывается название категории и название пост тайпа
				'news-category',
				'news',
				array(
					'label' => 'Категории новостей',
					'rewrite' => array('slug' => 'news-category'),
					'hierarhical' => true,
				) 
			);

			//Создание таксономии для кейсов
			register_taxonomy(
				// указывается название категории и название пост тайпа
				'feature-type',
				'feature',
				array(
					'label' => 'Case type',
					'rewrite' => array('slug' => 'case-type'),
					'hierarhical' => true,
				) 
			);
		}
		add_action('init', 'legal_advisory_register_custom_post_type');

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
				'legal_advisory_custom_background_args',
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

	add_image_size('testimonial-thumb', 225, 231, true);
	add_image_size('feature-thumb', 438, 455, true);
	add_image_size('news-thumb', 733, 476, true);
	add_image_size('testimonial-vertical', 225, 332, true);




endif;
add_action( 'after_setup_theme', 'legal_advisory_setup' );






// Подключение файлов с помощью require 

//Подключение Redux
require get_template_directory() . '/inc/options-panel-redux.php';

//Подключение хлебных крошек
require get_template_directory() . '/inc/breadcrumbs.php';

//Подключение метабоксов
require get_template_directory() . '/inc/metaboxes/metaboxes.php';
require get_template_directory() . '/inc/metaboxes/register_metabox.php';


//Подключение виджетов
require get_template_directory() . '/inc/widget/widget.php';
require get_template_directory() . '/inc/widget/widget-about.php';
require get_template_directory() . '/inc/widget/widget-customcategory.php';
require get_template_directory() . '/inc/widget/widget-subscribe.php';
require get_template_directory() . '/inc/widget/widget-customsearch.php';









/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function legal_advisory_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'legal_advisory_content_width', 640 );
}
add_action( 'after_setup_theme', 'legal_advisory_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Enqueue scripts and styles.
 */
function legal_advisory_scripts() {
	//подключение CSS
	wp_enqueue_style( 'legal-advisory', get_stylesheet_uri());
	wp_style_add_data( 'legal-advisory', 'rtl', 'replace' );

	wp_enqueue_style( 'legal-advisory-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0' );
	wp_enqueue_style( 'legal-advisory-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css', array(), '1.0' );

	//подключение JS
	wp_enqueue_script('jquery3.1.1','http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');

	wp_enqueue_script( 'legal-advisory-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0', true);
	wp_enqueue_script( 'legal-advisory-common', get_template_directory_uri() . '/assets/js/common.min.js', array(), '1.0', true);

	wp_enqueue_script( 'legal-advisory-svg-sprite', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', array(), '1.0', false);




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'legal_advisory_scripts' );

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


function legal_advisory_admin_scripts($hook){
	// Подключение скриптов метабоксов
	if ($hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php'){
		wp_enqueue_style( 'wayup-metabox', get_template_directory_uri() . '/assets/css/libs/metabox.css', array(), '1.0');
		wp_enqueue_script('wayup-metaboxes', get_template_directory_uri() . '/assets/js/libs/metaboxes.js', array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox'));
	}
}
add_action('admin_enqueue_scripts', 'legal_advisory_admin_scripts', 10);


// Создаем класс на боди для специфической страницы (на главной будет is-home, а на других inner-page)
add_filter('body_class', 'legal_advisory_body_class');
function legal_advisory_body_class($classes){
	if(is_page_template('template-home.php')){
		$classes[] = 'is-home';
	} else {
		$classes[] = 'inner-page';
	}
	return $classes;
}

// Отрезок кода отвечающий за вывод количества постов на странице архива с помощью глобальных переменных Redux
function legal_advisory_posts_per_archivepage($query){
	global $legal_advisory;
	$posts_per_page_testy = -1;
	$posts_per_page_news = -1;

	if($legal_advisory['testimonial_posts']){$posts_per_page_testy = $legal_advisory['testimonial_posts'];} 
	if($legal_advisory['newspostsperpage']){$posts_per_page_news = $legal_advisory['newspostsperpage'];}
	if(!is_admin() && is_post_type_archive('testimonial')){
		$query->set('posts_per_page', $posts_per_page_testy);
	}
	if(!is_admin() && is_post_type_archive('news')){
		$query->set('posts_per_page', $posts_per_page_news);
	}
}

add_action('pre_get_posts','legal_advisory_posts_per_archivepage');

// функиия обрезающая на архивных страницах вывод the-content() на 3 точках
function legal_advisory_custom_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if(count($excerpt) >= $limit){
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`\[^\]]*\]`', $excerpt);
	return $excerpt;
}

//Функция возвращает данные по id картинки
function legal_advisory_attachment( $attachment_id){
	$attachment = get_post ($attachment_id);
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true),
		'caption'=> $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink ($attachment->ID),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}
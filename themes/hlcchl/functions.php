<?php
/**
 * HLCCHL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HLCCHL
 */

if ( ! function_exists( 'hlcchl_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hlcchl_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HLCCHL, use a find and replace
		 * to change 'hlcchl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hlcchl', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'Header Menu', 'hlcchl' ),
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
			add_theme_support( 'custom-background', apply_filters( 'hlcchl_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );

			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'hlcchl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hlcchl_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hlcchl_content_width', 640 );
}
add_action( 'after_setup_theme', 'hlcchl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hlcchl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hlcchl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hlcchl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'hlcchl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hlcchl_scripts() {
	// Default entries of _S.
	wp_enqueue_style( 'hlcchl-style', get_stylesheet_uri(), array( 'bootstrap_css' ) );
	wp_enqueue_script( 'hlcchl-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'hlcchl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Eugene's entries.
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '20170602', true );
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans' );

	// Support for IE9.
	global $wp_scripts;
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	// Pass ScreenReaderText string from php to js in order to be translated.
	wp_localize_script('hlcchl-navigation', 'hlcchlScreenReaderText', array(
		'expand' => __( 'Expand child menu', 'hlcchl' ),
		'collapse' => __( 'Collapse child menu', 'hlcchl' ),
	));
}
add_action( 'wp_enqueue_scripts', 'hlcchl_scripts' );

if ( ! function_exists( 'hlcchl_post_cats' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function hlcchl_post_cats() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'hlcchl' ) );
			if ( $categories_list && hlcchl_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( '| Categories: %1$s', 'hlcchl' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'hlcchl' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( ' | Tags: %1$s', 'hlcchl' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

/**
 * Helper function to get escaped field from ACF and also normalize values.
 * As seen here https://snippets.khromov.se/sanitizing-and-securing-advanced-custom-fields-output/
 *
 * @param mixed  $field_key (please add comment).
 * @param bool   $post_id (please add comment).
 * @param bool   $format_value (please add comment).
 * @param string $escape_method esc_html / esc_attr or NULL for none.
 * @return array|bool|string
 */
function get_field_escaped( $field_key, $post_id = false, $format_value = true, $escape_method = 'esc_html' ) {
	$field = get_field( $field_key, $post_id, $format_value );

	/* Check for null and falsy values and always return space */
	if ( null === $field || false === $field ) {
		$field = '';
	}

	/* Handle arrays */
	if ( is_array( $field ) ) {
		$field_escaped = array();
		foreach ( $field as $key => $value ) {
			$field_escaped[ $key ] = (null === $escape_method) ? $value : $escape_method($value);
		}
		return $field_escaped;
	} else { 		return (null === $escape_method) ? $field : $escape_method($field);
	}
}

/**
 * Wrapper function for get_field_escaped() that echoes the value isntead of returning it.
 * As seen here https://snippets.khromov.se/sanitizing-and-securing-advanced-custom-fields-output/
 *
 * @param mixed  $field_key (please add comment).
 * @param bool   $post_id (please add comment).
 * @param bool   $format_value (please add comment).
 * @param string $escape_method esc_html / esc_attr or NULL for none.
 */
function the_field_escaped( $field_key, $post_id = false, $format_value = true, $escape_method = 'esc_html' ) {
	// Get field.
	$value = get_field_escaped( $field_key, $post_id, $format_value, $escape_method );

	// Print arrays as comma-separated strings, as per get_field() behaviour.
	if ( is_array( $value ) ) {
		$value = @implode( ', ', $value );
	}

	// Echo result.
	echo $value;
}

/**
 * Hide Customize admin menu label
 */
function adjust_the_wp_menu() {
	   global $submenu;
		unset( $submenu['themes.php'][6] );
}
add_action( 'admin_menu', 'adjust_the_wp_menu' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

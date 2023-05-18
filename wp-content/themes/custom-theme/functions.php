<?php

function	oldentic_add_theme_support()
{
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'oldentic_add_theme_support');


if ( ! function_exists( 'mytheme_register_nav_menu' ) )
{
	function mytheme_register_nav_menu()
	{
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'text_domain' ),
		'secondary_menu' => __('Secondary Menu', 'text_domain'),
		'footer_menu' => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class))
	{
		$classes[] = $args->add_li_class;
	}
	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

if (!function_exists('register_navwalker')) :
	function register_navwalker()
	{
		require('inc/jsc-navwalker.php');
	}
	add_action('after_setup_theme', 'register_navwalker');
endif;

// function	oldentic_menus()
// {
// 	$locations = array(
// 		'primary' => "Primary  menu",
// 		'footer' => "Footer Menu"
// 	);

// 	register_nav_menus($locations);
// }

// add_action('init', 'oldentic_menus');

function	oldentic_register_style()
{
	wp_register_style('oldentic-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', array(), '1.0.0', 'all');
	wp_register_style('oldentic-favicon', get_template_directory_uri() . 'assets/images/logo/favicon.png', array(), '1.0.0', 'all');
	wp_register_style('oldentic-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_register_style('oldentic-linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', array(), '1.0.0', 'all');
	wp_register_style('oldentic-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.7.0', 'all');
	wp_register_style('oldentic-owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
	wp_register_style('oldentic-owl.theme.default.min.css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
	wp_register_style('oldentic-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_register_style('oldentic-bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0.0', 'all');
	wp_register_style('oldentic-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_register_style('oldentic-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('oldentic-fonts');
	wp_enqueue_style('oldentic-favicon');
	wp_enqueue_style('oldentic-font-awesome.min');
	wp_enqueue_style('oldentic-linearicons');
	wp_enqueue_style('oldentic-animate');
	wp_enqueue_style('oldentic-owl.carousel.min.css');
	wp_enqueue_style('oldentic-owl.theme.default.min.css');
	wp_enqueue_style('oldentic-bootstrap');
	wp_enqueue_style('oldentic-bootsnav');
	wp_enqueue_style('oldentic-style');
	wp_enqueue_style('oldentic-responsive');
}

add_action('wp_enqueue_scripts', 'oldentic_register_style');

function	oldentic_register_script()
{
	wp_enqueue_script('oldentic-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.3.1', true);
	wp_enqueue_script('oldentic-modernizr', "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array(), '2.8.3', true);
	wp_enqueue_script('oldentic-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true);
	wp_enqueue_script('oldentic-bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '1.4.1', true);
	wp_enqueue_script('oldentic-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', true);
	wp_enqueue_script('oldentic-jquery.easing.min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array(), '1.1.3', true);
	wp_enqueue_script('oldentic-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '2.4.1', true);
}

add_action('wp_enqueue_scripts', 'oldentic_register_script');

?>
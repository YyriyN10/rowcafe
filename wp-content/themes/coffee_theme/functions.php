<?php
require_once ('inc/loader.php');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function load_theme_scripts(){
	//  Styles
	wp_enqueue_style('index_style', get_template_directory_uri().'/assets/css/index.css');
	wp_enqueue_style( 'jqueryui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css', array(), '' );
	wp_enqueue_style('index_style_new', get_template_directory_uri().'/assets/css/style.min.css');
	//	Scripts

    $strings_to_js = [
        'url' => admin_url('admin-ajax.php'),
    ];
	wp_enqueue_script('app_js', get_template_directory_uri().'/assets/js/app.js',  [], '', true);
	wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.0/jquery-ui.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jtouch-punch', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js', array('jquery'), '', true );
	wp_enqueue_script('app_js_new', get_template_directory_uri().'/assets/js/main.min.js',  ['jquery'], '', true);
	wp_enqueue_script('custom_js', get_template_directory_uri().'/inc/js/custom.js',  [], '', true);
	wp_enqueue_script('forms_js', get_template_directory_uri().'/inc/js/forms.js',  [], '', true);
    wp_localize_script('forms_js', 'wpAjax', $strings_to_js);
}
add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );

if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page([
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'redirect' => false
    ]);
}

function registerCustomAdminCss()
{
    $src = get_template_directory_uri() . '/inc/css/admin.css';
    $handle = "customAdminCss";
    wp_register_script($handle, $src);
    wp_enqueue_style($handle, $src, [], false, false);
}
add_action('admin_enqueue_scripts', 'registerCustomAdminCss');

function remove_admin_menu()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'remove_admin_menu');

function register_menus()
{
    register_nav_menus
    (
        [
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ]
    );
}

add_action('init', 'register_menus');

/**
 * Poly Translation
 */

require get_template_directory() . '/inc/poly-translation.php';

	define( 'SITE_URL', get_site_url() );
	define( 'SITE_LOCALE', get_locale() );
	define( 'THEME_PATH', get_template_directory_uri() );
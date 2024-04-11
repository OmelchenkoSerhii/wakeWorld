<?php
/*
=====================
	Theme Setup Function
=====================
*/

function theme_setup(){
	load_theme_textdomain( 'WakeWorld', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('menus');
	add_theme_support('woocommerce');

	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

	//main menu
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu', 'WakeWorld' ),
			'footer-menu-1' => __( 'Footer Menu 1', 'WakeWorld'),
			'footer-menu-2' => __( 'Footer Menu 2', 'WakeWorld'),
            'footer-bottom-menu' => __( 'Footer Bottom Menu', 'WakeWorld'),  
		)
    );
    
}

add_action( 'after_setup_theme', 'theme_setup' );


add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return 'https://WakeWorld.io/';
}

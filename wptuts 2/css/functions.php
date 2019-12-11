<?php

function wptuts_scripts() {
	wp_enqueue_style( 'boostrapcss', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-gred', get_template_directory_uri() . '/css/bootstrap-gred.css' );
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/css/bootstrap-reboot.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js');
	wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . 'js/css3-animate-it.js');
	wp_enqueue_script( 'agency', get_template_directory_uri() . 'js/agency.js');
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . 'js/jquery.easing.min.js');
	wp_enqueue_script( 'jquery-aja', get_template_directory_uri() . 'js/ajax.js');
	wp_enqueue_script( 'jquery-jg', get_template_directory_uri() . 'js/jquery-3.2.1.min.js');
    wp_enqueue_script( 'jquery-3', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery-4', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');

}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts' );



<?php

function prv($var) {
	static $int=0;
	echo '<pre><b style="background: blue;padding: 1px 5px;">'.$int.'</b> ';
	var_dump($var);
	echo '</pre>';
	$int++;
}

function pr($var) {
	static $int=0;
	echo '<pre><b style="background: red;padding: 1px 5px;">'.$int.'</b> ';
	print_r($var);
	echo '</pre>';
	$int++;
}

add_action( 'wp_enqueue_scripts', 'childhood_styles' );
add_action( 'wp_enqueue_scripts', 'childhood_scripts' );

function childhood_styles(): void {
	wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
}

function childhood_scripts(): void {
	wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
}

add_theme_support( 'custom-logo' );

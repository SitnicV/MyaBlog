<?php
// Register Style
function mya_css() {

	wp_register_style( 'bootstrap', get_stylesheet_directory_uri()."/assets/css/bootstrap.css", false, false );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'icofont', get_stylesheet_directory_uri()."/assets/icofont/icofont.css", false, false );
	wp_enqueue_style( 'icofont' );

	wp_register_style( 'main', get_stylesheet_uri(), false, false );
	wp_enqueue_style( 'main' );

}
add_action( 'wp_enqueue_scripts', 'mya_css' );

// Register Scripts
function mya_js() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'bootstrap', get_stylesheet_directory_uri()."/assets/js/bootstrap.bundle.js", false, false );
	wp_enqueue_script( 'bootstrap' );


}
add_action( 'wp_enqueue_scripts', 'mya_js' );

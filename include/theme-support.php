<?php
// Set content width value based on the theme's design
if ( ! isset( $content_width ) ){
	$content_width = 1440;
}

// Register Theme Features
function mya_theme_support()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background

	add_theme_support( 'custom-background');

	// Add theme support for Custom Header
	add_theme_support( 'custom-header' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	add_theme_support("menus");

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();

	// Add theme support for Translation
	load_theme_textdomain( 'myasyn', get_template_directory() . '/language' );
}
add_action( 'after_setup_theme', 'mya_theme_support' );
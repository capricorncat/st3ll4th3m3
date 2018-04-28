<?php

/**
 * Theme setup
 */
function st3ll4th3m3_setup() {

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support( 'title-tag' );

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( [
    'navigation_primary' 		=> __( 'Primary Navigation', 		'st3ll4th3m3' ),
    'navigation_secondary' 	=> __( 'Secondary Navigation', 	'st3ll4th3m3' ),
    'navigation_header' 		=> __( 'Header Navigation', 		'st3ll4th3m3' ),
    'navigation_sidebar' 		=> __( 'Sidebar Navigation', 		'st3ll4th3m3' ),
    'navigation_footer' 		=> __( 'Footer Navigation', 		'st3ll4th3m3' )
  ] );

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support( 'post-thumbnails' );

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support( 'post-formats', 
		[ 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ] );

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support( 'html5', 
		[ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );
}
add_action( 'after_setup_theme', 'st3ll4th3m3_setup' );

/**
 * Register sidebars
 */
function st3ll4th3m3_widgets_init() {
  register_sidebar( [
    'name'          => 'Primary Sidebar',
    'id'            => 'sidebar-primary',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );
  register_sidebar( [
    'name'          => 'Secondary Sidebar',
    'id'            => 'sidebar-secondary',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );
  register_sidebar( [
    'name'          => 'Header',
    'id'            => 'sidebar-header',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );

  register_sidebar( [
    'name'          => 'Footer',
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );

  register_sidebar( [
    'name'          => 'Page Sidebar',
    'id'            => 'sidebar-page',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );

  register_sidebar( [
    'name'          => 'Rail Sidebar',
    'id'            => 'sidebar-rail',
    'before_widget' => '<div class="item %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="sr-only">',
    'after_title'   => '</h3>'
  ] );
}
add_action( 'widgets_init', 'st3ll4th3m3_widgets_init' );



/**
 * ACF Options Pages
 **/
if( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	) );

}

/**
 * Theme assets
 */

function st3ll4th3m3_enqueue() {
    /* local paths */
    $theme_path 	= '/wp-content/themes/st3ll4th3m3/dist';

		$styles_path  = $theme_path 	. '/styles/styles.css';
		$scripts_path = $theme_path 	. '/scripts/scripts.js';

		wp_deregister_script( 'jquery' );

		wp_enqueue_style ( 	'styles'   , $styles_path 	 );
		wp_enqueue_script( 	'scripts'  , $scripts_path );
}
add_action( 'wp_enqueue_scripts', 'st3ll4th3m3_enqueue' );


?>

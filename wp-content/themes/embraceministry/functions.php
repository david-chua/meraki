<?php
/**
 * Theme Customization
 *
 * @package 	Embrace Ministry
 * @author 		Jamie Choi
 * @link 		https://jmechoi.github.io/
 * @copyright 	Copyright (c) 2018, Jamie Choi
 * @license		GPL-2.0+
 */

// Load child theme textdomain
load_child_theme_textdomain( 'embraceministry' );

add_action( 'genesis_setup', 'embraceministry_setup', 15 );


/**
* Theme Setup
* 
* Attach all of the site-wide functions to the correct hooks and filters.
* All the functions themselves are defined below this setup function. 
*
* @since 1.0.0
*/
function embraceministry_setup(){

	//Define theme constants
	define( 'CHILD_THEME_NAME', 'Embrace Ministry' );
	define( 'CHILD_THEME_URL', '/' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Add HTML5 Markup structure
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Add viewport meta tag for mobile browsers
	add_theme_support( 'genesis-responsive-viewport' );

	// Add theme support for accessibility
	add_theme_support( 'genesis-accessibility', array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
	) );

	// Add theme support for footer widgets
	add_theme_support( 'genesis-footer-widgets', 3 );

	//* Unregister content/sidebar/sidebar layout setting
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	 
	//* Unregister sidebar/sidebar/content layout setting
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	 
	//* Unregister sidebar/content/sidebar layout setting
	genesis_unregister_layout( 'sidebar-content-sidebar' );

	// Unregister secondary sidebar
	unregister_sidebar( 'sidebar-alt' );

	// Add theme widget areas
	include_once( get_stylesheet_directory() . '/includes/widget-areas.php');

	// Remove Site Description & Title
	remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
	/*remove_action( 'genesis_site_title', 'genesis_seo_site_title' );*/
}

add_action( 'wp_enqueue_scripts', 'embraceministry_load_google_fonts' );

// Load Google Fonts to stylesheet
function embraceministry_load_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Hind:400,700|Playfair+Display:400,700', array(), CHILD_THEME_VERSION );
}

//Add support for custom header
add_theme_support( 'custom-header', array(
	'width'           => 165,
	'height'          => 76,
	'header-selector' => '.site-title a',
	'header_text'     => false,
	'flex-height'     => true,
) );


add_filter( 'genesis_seo_title', 'child_header_title', 10, 3 );
function child_header_title( $title, $inside, $wrap ) {
    $inside = sprintf( '<a href="https://merakicreative.studio/" title="%s"><img src="http://merakistaging.local/wp-content/uploads/2018/04/meraki-logo-white-small.png" alt="Meraki Logo"></a>', esc_attr( get_bloginfo( 'name' ) ), get_bloginfo( 'name' ) );
    return sprintf( '<%1$s class="site-title">%2$s</%1$s>', $wrap, $inside );
}
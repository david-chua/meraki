<?php

/**
 * Front Page Template
 *
 * @package 	Embrace Ministry
 * @author 		Jamie Choi
 * @link 		https://jmechoi.github.io/
 * @copyright 	Copyright (c) 2018, Jamie Choi
 * @license		GPL-2.0+
 */

add_action('genesis_meta', 'embraceministry_home_page_setup');

function embraceministry_home_page_setup() {

	$home_sidebars = array(
		'home_welcome'		=> is_active_sidebar( 'home-welcome' ),
		'call_to_action' 	=> is_active_sidebar( 'call-to-action' ),
		'our_process'		=> is_active_sidebar( 'our-process' ),
		'last_section'		=> is_active_sidebar( 'last-section' )
	);

	// Return early if no sidebars are active
	if ( ! in_array(true, $home_sidebars)) {
		return;
	}

	// Add home welcome area if "Home Welcome" widget area is active
	if ( $home_sidebars['home_welcome'] ) { 

		add_action( 'genesis_after_header', 'embraceministry_add_home_welcome' );
	}

	// Add call to action area if "Call to Action" widget area is active
	if ( $home_sidebars['call_to_action'] ) { 
		add_action( 'genesis_after_header', 'embraceministry_add_call_to_action' );
	}

	if ( $home_sidebars['our_process'] ) { 
		add_action( 'genesis_after_header', 'embraceministry_add_our_process' );
	}

	if ( $home_sidebars['last_section'] ) { 
		add_action( 'genesis_after_header', 'embraceministry_add_last_section' );
	}

	// Force full-width-content layout setting
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	//Remove posts
	remove_action( 'genesis_loop', 'genesis_do_loop' );
}

/**
 * Display content for the "Home Welcome" section
 *
 * @since 1.0.0
 */
function embraceministry_add_home_welcome() {
	genesis_widget_area( 'home-welcome',
		array(
			'before' => '<div class="home-welcome"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Call to Action" section
 *
 * @since 1.0.0
 */
function embraceministry_add_call_to_action() {
	genesis_widget_area( 'call-to-action',
		array(
			'before' => '<div class="call-to-action"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Our Process" section
 *
 * @since 1.0.0
 */
function embraceministry_add_our_process() {
	genesis_widget_area( 'our-process',
		array(
			'before' => '<div class="our-process"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Our Process" section
 *
 * @since 1.0.0
 */
function embraceministry_add_last_section() {
	genesis_widget_area( 'last-section',
		array(
			'before' => '<div class="last-section"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

genesis();
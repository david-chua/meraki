<?php
/**
 * Register Widget Areas
 *
 * @package 	Embrace Ministry
 * @author 		Jamie Choi
 * @link 		https://jmechoi.github.io/
 * @copyright 	Copyright (c) 2018, Jamie Choi
 * @license		GPL-2.0+
 */

//* Register front page widget areas
	genesis_register_sidebar( array(
		'id'            => 'home-welcome',
		'name'          => __( 'Home Welcome', 'embraceministry' ),
		'description'   => __( 'This is a home widget area that will show on the front page', 'embraceministry' ),
	) );
	genesis_register_sidebar( array(
		'id'            => 'call-to-action',
		'name'          => __( 'Call to Action', 'embraceministry' ),
		'description'   => __( 'This is a call to action widget area that will show on the front page', 'embraceministry' ),
	) );
	genesis_register_sidebar( array(
		'id'            => 'our-process',
		'name'          => __( 'Our Process', 'embraceministry' ),
		'description'   => __( 'This is a Our Process widget area that will show on the front page', 'embraceministry' ),
	) );
	genesis_register_sidebar( array(
		'id'            => 'last-section',
		'name'          => __( 'Last Section', 'embraceministry' ),
		'description'   => __( 'This is a Last Section widget area that will show on the front page', 'embraceministry' ),
	) );
<?php
/*
====================
CUSTOM THEME SUPPORT
====================

@package eadic-theme
*/

/*
	CUSTOM HEADER
	========================================
*/
function eadic_custom_header() {
    $args = array(
        'default-image'				=> get_template_directory_uri() . 'images/eadic_custom_header.png',
        'default-text-color' 		=> '000',
        'flex-width'         		=> false,
        'flex-height'        		=> false,
	    'random-default'        	=> false,
	    'default-text-color'     	=> 'fff',
	    'header-text'            	=> true,
	    'uploads'                	=> true,
	    'wp-head-callback'       	=> '',
	    'admin-head-callback'    	=> '',
	    'admin-preview-callback' 	=> '',
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'eadic_custom_header' );

// Backwards Compatibility
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header' );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;

	
/*
	CUSTOM BACKGROUND
	========================================
*/
function eadic_custom_background() {
	$args = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', 'eadic_custom_background' );

/*
	CUSTOM LOGO
	========================================
*/
function eadic_custom_logo() {
	add_theme_support(
		'custom-logo', 
		array(
		    'height'      => 100,
		    'width'       => 400,
		    'flex-height' => true,
		    'flex-width'  => true,
		    'header-text' => array( 'site-title', 'site-description' )
		) 
	);
}	
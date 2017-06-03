<?php
/*
====================
ENQUEUE FUNCTIONS
====================
@package eadic-theme
*/
?>

<?php
/*
	ADMIN
	==============================
*/
add_action( 'admin_enqueue_scripts', 'load_eadic_admin_scripts' );
function load_eadic_admin_scripts() {
    // Deregister default jQuery from WP and Register own jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.js' );
	wp_enqueue_script( 'jquery' );

    // Enqueue jQueryUI DatePicker
	wp_enqueue_script( 'jquery-ui-datepicker', array( 'jquery' ) );

    // Register eadic-admin
	wp_register_script( 'eadic-admin', get_template_directory_uri() . '/js/eadic-admin.js', array( 'jquery' ), '1.0.0', false );
	wp_enqueue_script( 'eadic-admin' );

    // Enqueue WP media
	wp_enqueue_media();
}

add_action( 'admin_print_styles', 'load_eadic_admin_css' );
function load_eadic_admin_css() {
	wp_register_style( 'eadic-admin', get_template_directory_uri() . '/css/eadic-admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'eadic-admin' );

	wp_register_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), false, 'all' );
	wp_enqueue_style( 'jquery-ui' );
}

/*
	FRONT
	==============================
*/
add_action( 'wp_enqueue_scripts', 'load_eadic_scripts' );
function load_eadic_scripts() {
	wp_register_script( 'eadic', get_template_directory_uri() . '/js/eadic.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'eadic' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.3.6', true );
	wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_print_styles', 'load_eadic_css' );
function load_eadic_css() {
	wp_register_style( 'eadic', get_template_directory_uri() . '/css/eadic.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'eadic' );

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.3.6', 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_enqueue_style( 'dashicons' );
}
?>

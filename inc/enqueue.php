<?php
/*
====================
ENQUEUE FUNCTIONS
====================
@package javiergarval-theme
*/
?>

<?php
/*
	ADMIN
	==============================
*/
add_action( 'admin_enqueue_scripts', 'load_javiergarval_admin_scripts' );
function load_javiergarval_admin_scripts() {
    // Deregister default jQuery from WP and Register own jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.js' );
	wp_enqueue_script( 'jquery' );

    // Enqueue jQueryUI DatePicker
	wp_enqueue_script( 'jquery-ui-datepicker', array( 'jquery' ) );

    // Register javiergarval-admin
	wp_register_script( 'javiergarval-admin', get_template_directory_uri() . '/js/javiergarval-admin.js', array( 'jquery' ), '1.0.0', false );
	wp_enqueue_script( 'javiergarval-admin' );

    // Enqueue WP media
	wp_enqueue_media();
}

add_action( 'admin_print_styles', 'load_javiergarval_admin_css' );
function load_javiergarval_admin_css() {
	wp_register_style( 'javiergarval-admin', get_template_directory_uri() . '/css/admin-style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'javiergarval-admin' );

	wp_register_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), false, 'all' );
	wp_enqueue_style( 'jquery-ui' );
}

/*
	FRONT
	==============================
*/
add_action( 'wp_enqueue_scripts', 'load_javiergarval_scripts' );
function load_javiergarval_scripts() {
	wp_register_script( 'javiergarval', get_template_directory_uri() . '/js/javiergarval.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'javiergarval' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.3.6', true );
	wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_print_styles', 'load_javiergarval_css' );
function load_javiergarval_css() {
	wp_register_style( 'javiergarval', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'javiergarval' );

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.3.6', 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_enqueue_style( 'dashicons' );
}
?>

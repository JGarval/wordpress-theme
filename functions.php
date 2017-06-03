<?php
/*
====================
FUNCTIONS
====================
@package eadic-theme
*/

// Función que deja de mostrar lo seleccionado en el panel de administración.
function remove_menus(){
  //remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack*
  remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );

// Quitar configuración extra de la cabecera de WordPress.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// Añadimos estos directorios.
require get_template_directory() . '/inc/eadic-admin-menu.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/master-post-type.php';
require get_template_directory() . '/inc/cupon-post-type.php';
//require get_template_directory() . '/inc/teacher-post-type.php';
//require get_template_directory() . '/inc/custom-theme-support.php';
require get_template_directory() . '/inc/eadic-nav-menus.php';

function dameURL() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol."://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
}
add_action( 'init', 'dameURL' );

/*
function getCouponId($cupon) {
    $cuponID = $wpdb->get_col(
        "SELECT ID
        FROM $wpdb->posts
        WHERE $wpdb->posts.post_title = '$cupon'
        AND $wpdb->posts.post_status = 'publish'"
    );
    foreach ($cuponID as $id) {
        $cuponesPorcentaje = $wpdb->get_col(
            "SELECT meta_value
            FROM $wpdb->postmeta
            WHERE $wpdb->postmeta.post_id = '$id'
            AND $wpdb->postmeta.meta_key = '_cupon_descuento_porcentaje_value_key'"
        );
        $cuponesPorcentaje = array_unique($cuponesPorcentaje);

        $cuponesMonetario = $wpdb->get_col(
            "SELECT meta_value
            FROM $wpdb->postmeta
            WHERE $wpdb->postmeta.post_id = '$id'
            AND $wpdb->postmeta.meta_key = '_cupon_descuento_monetario_value_key'"
        );
        $cuponesMonetario = array_unique($cuponesMonetario);
    }
    // Sólo $cuponesPorcentaje tiene valor.
    if (!empty($cuponesPorcentaje) && empty($cuponesMonetario)) {
        return $cuponesPorcentaje;
    }
    // Sólo $cuponesMonetario tiene valor.
    elseif (empty($cuponesPorcentaje) && !empty($cuponesMonetario)) {
        return $cuponesMonetario;
    }
}
add_action( 'init', 'getCouponId' );*/

// Permitir cookies
// add_action( 'init', 'crear_cookie' );
//
// function crear_cookie($nombre, $valor) {
//   setcookie( $nombre, $valor, 30 * DAYS_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );
// }

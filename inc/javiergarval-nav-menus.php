<?php
/*
====================
NAVIGATION MENU
====================

@package javiergarval-theme
*/

function javiergarval_nav_menus() {
	register_nav_menus(
		array(
			'menu-principal'	=> __( 'Principal', 'javiergarval-theme' )
		)
	);
  unregister_nav_menu( 'menu-navegacion' );
}
add_action( 'init', 'javiergarval_nav_menus' );

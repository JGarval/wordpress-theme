<?php
/*
====================
NAVIGATION MENU
====================

@package eadic-theme
*/

function eadic_nav_menus() {
	register_nav_menus(
		array(
			'menu-principal'	=> __( 'Principal', 'eadic-theme' )
		)
	);
  unregister_nav_menu( 'menu-navegacion' );
}
add_action( 'init', 'eadic_nav_menus' );

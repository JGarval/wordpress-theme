<?php
/*
	====================
	TEACHER POST TYPE
	====================

	@package eadic-theme
*/

/* 	
	REGISTER TEACHER POST TYPE
	========================================
*/	
add_action( 'init', 'custom_post_type_teacher' );
function custom_post_type_teacher() {
	$labels = array(
		'name'					=> _x( 'Profesores', 'Post Type General Name', 'eadic-theme' ),
		'singular_name'			=> _x( 'Profesor', 'Post Type Singular Name', 'eadic-theme' ),
		'add_new'				=> __( 'Añadir nuevo', 'eadic-theme' ),
		'add_new_item'			=> __( 'Añadir nuevo Profesor', 'eadic-theme' ),
		'edit_item'				=> __( 'Editar Profesor', 'eadic-theme' ),
		'new_item'				=> __( 'Nuevo Profesor', 'eadic-theme' ),
		'view_item'				=> __( 'Ver Profesor', 'eadic-theme' ),
		'search_items'			=> __( 'Buscar Profesores', 'eadic-theme' ),
		'not_found'				=> __( 'No se han encontrado Profesores', 'eadic-theme' ),
		'not_found_in_trash'	=> __( 'No se han encontrado Profesores en la Papelera', 'eadic-theme' ),
		'parent_item_colon'		=> __( 'Profesores superiores', 'eadic-theme' ),
		'all_items'				=> __( 'Todos los Profesores', 'eadic-theme' ),
		//'archives'				=> 
		//'insert_into_item'		=> 
		//'uploaded_to_this_item'	=> 
		//'featured_image'		=> 
		//'set_featured_image'	=> 
		//'remove_featured_image' => 
		//'use_featured_image'	=>
		'menu_name'				=> _x( 'Profesores', 'Admin Menu' ),
		//'filter_items_list'		=> 
		//'items_list_navigation'	=> 
		//'items_list'			=> 
		'name_admin_bar'		=> _x( 'Profesor', 'Add New In Admin Bar' ),
	);

	$args = array(
		'labels'				=> $labels,
		'description'			=> __( 'Descripción' ),
		'public'				=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_nav_menus'		=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> null,
		'menu_icon'				=> 'dashicons-id-alt',
		'capability_type'		=> 'post',
		//'capabilities'			=> ,
		//'map_meta_cap'			=> ,
		'hierarchical'			=> false,
		'supports'				=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		//'register_meta_box_cb'	=> ,
		//'taxonomies'			=> array( 'beca_descuento', 'fecha_inicio', 'duracion', 'precio', 'beca_precio', 'descripcion', 'objetivo', 'desglose' ),
		'has_archive'			=> true,
		'rewrite'				=> array( 'slug' => 'profesores' ),
		//'permalink_epmask'		=> ,
		'query_var'				=> true,
		// 'can_export'			=> ,
		// 'delete_with_user'		=> ,
		// 'show_in_rest'			=> ,
		// 'rest_base'				=> ,
		// 'rest_controller_class'	=> ,
		// '_builtin'				=> ,
		// '_edit_link' 			=> ,
	);

	register_post_type( 'profesor', $args );
}
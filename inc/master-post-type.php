<?php
/*
	====================
	MASTER POST TYPE
	====================

	@package eadic-theme
*/

/*
	REGISTER MASTER POST TYPE
	========================================
*/
add_action( 'init', 'custom_post_type_master' );
function custom_post_type_master() {
	$singular = 'Máster';
	$plural = 'Másteres';
	$labels = array(
		'name'										=> $singular,
		'singular_name'						=> $singular,
		'add_new'									=> 'Añadir nuevo',
		'add_new_item'						=> 'Añadir nuevo ' . $singular,
		'edit_item'								=> 'Editar ' . $plural,
		'new_item'								=> 'Nuevo ' . $singular,
		'view_item'								=> 'Ver ' . $singular,
		'search_items'						=> 'Buscar ' . $plural,
		'not_found'								=> 'No se han encontrado ' . $plural,
		'not_found_in_trash'			=> 'No se han encontrado ' . $plural . ' en la papelera',
		//'parent_item_colon'				=>
		'all_items'								=> 'Todos los ' . $plural,
		//'archives'								=>
		//'insert_into_item'				=>
		//'uploaded_to_this_item'		=>
		//'featured_image'					=>
		//'set_featured_image'			=>
		//'remove_featured_image' 	=>
		//'use_featured_image'			=>
		'menu_name'								=> $plural,
		//'filter_items_list'				=>
		//'items_list_navigation'		=>
		//'items_list'							=>
		'name_admin_bar'					=> $singular
	);

	$args = array(
		'labels'							=> $labels,
		'description'					=> 'Descripción',
		'public'							=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'show_ui'							=> true,
		'show_in_nav_menus'		=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'				=> 4,
		'menu_icon'						=> 'dashicons-welcome-learn-more',
		'capability_type'			=> 'post',
		//'capabilities'				=> ,
		//'map_meta_cap'				=> ,
		'hierarchical'				=> false,
		'supports'						=> array( 'title', 'thumbnail' ),
		//'register_meta_box_cb'	=> ,
		//'taxonomies'						=> ,
		'has_archive'					=> true,
		'rewrite'							=> array( 'slug' => 'maestrias' ),
		//'permalink_epmask'		=> ,
		'query_var'						=> true,
		'can_export'					=> true,
		'delete_with_user'		=> false,
		'show_in_rest'				=> true,
		'rest_base'						=> true,
		//'rest_controller_class'	=> ,
		'_builtin'						=> false,
		// '_edit_link' 				=> ,
	);

	register_post_type( 'master', $args );
}


/*
	REGISTER MASTER TAXONOMIES
	========================================
*/
add_action( 'init', 'master_taxonomies', 0 );
function master_taxonomies() {

	/* Register Area */
	$singularArea = 'Área Formativa';
	$pluralArea = 'Áreas Formativas';

	$label_area = array(
		'name'								=> $singularArea,
		'singular_name'				=> $singularArea,
		'add_new'							=> 'Añadir nueva',
		'add_new_item'				=> 'Añadir nueva ' . $singularArea,
		'edit_item'						=> 'Editar ' . $singularArea,
		'new_item'						=> 'Nueva ' . $singularArea,
		'view_item'						=> 'Ver ' . $singularArea,
		'search_items'				=> 'Buscar ' . $pluralArea,
		'not_found'						=> 'No se han encontrado ' . $pluralArea,
		'not_found_in_trash'	=> 'No se han encontrado ' . $pluralArea . ' en la papelera',
		'parent_item_colon'		=> $pluralArea . ' superiores',
		'all_items'						=> 'Todas las ' . $pluralArea,
		//'archives'						=>
		//'insert_into_item'		=>
		//'uploaded_to_this_item'	=>
		//'featured_image'		=>
		//'set_featured_image'	=>
		//'remove_featured_image' =>
		//'use_featured_image'	=>
		'menu_name'				=> $pluralArea,
		//'filter_items_list'		=>
		//'items_list_navigation'	=>
		//'items_list'			=>
		'name_admin_bar'		=> $singularArea
	);

	register_taxonomy( 'area_formativa', 'master', array(
 		'labels'			=> $label_area,
 		'hierarchical'		=> true,
 		'show_ui'			=> true,
 		'show_admin_column'	=> true,
 		'query_var'			=> true,
 		'rewrite'			=> array( 'slug' => 'area-formativa' ),
	 ) );

	/* Register Teacher */
	$singularTeacher = 'Profesor';
	$pluralTeacher = 'Profesores';

	$label_teacher = array(
		'name'									=> $singularTeacher,
		'singular_name'					=> $pluralTeacher,
		'add_new'								=> 'Añadir nueva',
		'add_new_item'					=> 'Añadir nueva ' . $singularTeacher,
		'edit_item'							=> 'Editar ' . $singularTeacher,
		'new_item'							=> 'Nueva ' . $singularTeacher,
		'view_item'							=> 'Ver ' . $singularTeacher,
		'search_items'					=> 'Buscar ' . $pluralTeacher,
		'not_found'							=> 'No se han encontrado ' . $pluralTeacher,
		'not_found_in_trash'		=> 'No se han encontrado ' . $pluralTeacher . ' en la papelera',
		'parent_item_colon'			=> $pluralTeacher . ' superiores',
		'all_items'							=> 'Todas las ' . $pluralTeacher,
		//'archives'							=>
		//'insert_into_item'			=>
		//'uploaded_to_this_item'	=>
		//'featured_image'				=>
		//'set_featured_image'		=>
		//'remove_featured_image' =>
		//'use_featured_image'		=>
		'menu_name'							=> $pluralTeacher,
		//'filter_items_list'			=>
		//'items_list_navigation'	=>
		//'items_list'						=>
		'name_admin_bar'				=> $singularTeacher
	);

	register_taxonomy( 'profesor', 'master', array(
 		'labels'						=> $label_teacher,
 		'hierarchical'			=> false,
 		'show_ui'						=> true,
 		'show_admin_column'	=> true,
 		'query_var'					=> true,
 		'rewrite'						=> array( 'slug' => 'profesor' ),
	 ) );

}

/*
	ADD POST COLUMNS
	========================================
*/
add_filter( 'manage_edit-master_columns', 'master_post_columns' );
function master_post_columns( $columns ) {
	$columns = array();
	$columns['title'] = 'Título del Máster';
	$columns['area_formativa'] = 'Área Formativa';
	$columns['profesor'] = 'Profesor/a';
	$columns['date'] = 'Fecha de Publicación';
	return $columns;
}

add_action( 'manage_master_posts_custom_column', 'master_custom_post_columns', 10, 2 );
function master_custom_post_columns( $column, $post_id ) {
	switch ($column) {
		case 'area_formativa':
			$terms = wp_get_post_terms( $post_id, 'area_formativa' );
			foreach ( $terms as $term ) : ?>
			<p><?php echo $term->name; ?></p>
			<?php endforeach;
			break;
		case 'profesor':
			$terms = wp_get_post_terms( $post_id, 'profesor' );
			foreach ( $terms as $term ) : ?>
			<p><?php echo $term->name; ?></p>
			<?php endforeach;
			break;

		default:
			break;
	}
}

// TODO: Hacer que sean sorteables alfabéticamente
add_filter( 'manage_edit-master_sortable_columns', 'my_sortable_master_column' );
function my_sortable_master_column() {
  return array(
    'area_formativa' => 'area_formativa',
  );
}

/*
	ADD META BOXES
	========================================
*/
add_action( 'add_meta_boxes', 'master_add_meta_box' );
function master_add_meta_box() {
	// Convocatoria
	add_meta_box( 'master-start-date', 'Convocatoria', 'master_start_date_callback', 'master', 'side', 'high');

	// Duración
	add_meta_box( 'master-duration', 'Duración (en meses)', 'master_duration_callback', 'master', 'side', 'high');

	// Precio sin Beca
	add_meta_box( 'master-no-scholarship', 'Precio sin beca (en euros)', 'master_no_scholarship_callback', 'master', 'side', 'high');

	// Precio con Beca
	add_meta_box( 'master-scholarship', 'Precio con beca (en euros)', 'master_scholarship_callback', 'master', 'side', 'high');

	// Presentación
	add_meta_box( 'master-presentation', 'PRESENTACIÓN', 'master_presentation_callback', 'master', 'normal', 'high');

	// Objetivo
	add_meta_box( 'master-objective', 'OBJETIVO', 'master_objective_callback', 'master', 'normal', 'high');

	// Descripción
	add_meta_box( 'master-description', 'DESCRIPCIÓN', 'master_description_callback', 'master', 'normal', 'high');

}

/*
	META BOXES CALLBACKS
	========================================
*/

// Convocatoria
function master_start_date_callback($post) {
	wp_nonce_field( 'save_master_start_date', "master_start_date_meta_box_nonce" );
	$value = get_post_meta( $post->ID, '_master_start_date_value_key', true );
	echo '<input type="text" id="master_start_date_field" class="datepicker master-meta-box" name="master_start_date_field" value="'.esc_attr( $value ).'" />';
}
function save_master_start_date($post_id) {
	if( ! isset( $_POST['master_start_date_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['master_start_date_meta_box_nonce'], 'save_master_start_date') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['master_start_date_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['master_start_date_field'] );

	update_post_meta( $post_id, '_master_start_date_value_key', $my_data );
}
add_action( 'save_post', 'save_master_start_date', 10, 3 );

// DURACIÓN
function master_duration_callback($post) {
	wp_nonce_field( 'save_master_duration', 'master_duration_meta_box_nonce' );
	$value = get_post_meta( $post->ID, '_master_duration_value_key', true );
	echo '<input type="number" id="master_duration_field" class="master-meta-box" name="master_duration_field" value="'.esc_attr( $value ).'" />';
}
function save_master_duration($post_id) {
	if( ! isset( $_POST['master_duration_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['master_duration_meta_box_nonce'], 'save_master_duration') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['master_duration_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['master_duration_field'] );

	update_post_meta( $post_id, '_master_duration_value_key', $my_data );
}
add_action( 'save_post', 'save_master_duration', 10, 3 );

// PRECIO SIN BECA
function master_no_scholarship_callback($post) {
	wp_nonce_field( 'save_master_no_scholarship', 'master_no_scholarship_meta_box_nonce' );
	$value = get_post_meta( $post->ID, '_master_no_scholarship_value_key', true );
	echo '<input type="number" id="master_no_scholarship_field" class="master-meta-box" name="master_no_scholarship_field" value="'.esc_attr( $value ).'" />';
}
function save_master_no_scholarship($post_id) {
	if( ! isset( $_POST['master_no_scholarship_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['master_no_scholarship_meta_box_nonce'], 'save_master_no_scholarship') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['master_no_scholarship_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['master_no_scholarship_field'] );

	update_post_meta( $post_id, '_master_no_scholarship_value_key', $my_data );
}
add_action( 'save_post', 'save_master_no_scholarship', 10, 3 );

// PRECIO CON BECA
function master_scholarship_callback($post) {
	wp_nonce_field( 'save_master_scholarship', 'master_scholarship_meta_box_nonce' );
	$value = get_post_meta( $post->ID, '_master_scholarship_value_key', true );
	echo '<input type="number" id="master_scholarship_field" class="master-meta-box" name="master_scholarship_field" value="'.esc_attr( $value ).'" />';
}
function save_master_scholarship($post_id) {
	if( ! isset( $_POST['master_scholarship_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['master_scholarship_meta_box_nonce'], 'save_master_scholarship') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['master_scholarship_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['master_scholarship_field'] );

	update_post_meta( $post_id, '_master_scholarship_value_key', $my_data );
}
add_action( 'save_post', 'save_master_scholarship', 10, 3 );

// PRESENTACIÓN
function master_presentation_callback( $post ) {
	$content = get_post_meta($post->ID, '_master_presentation_value_key', true);
	wp_editor($content, 'master_presentation_callback', array(
		'wpautop' => false,
		'media_buttons' => true,
		'editor_height' => 200,
	));
}
function save_master_presentation( $post_id ) {
	if (!empty($_POST['master_presentation_callback'])){
		$data = $_POST['master_presentation_callback'];
		update_post_meta($post_id, '_master_presentation_value_key', $data);
	}
}
add_action( 'save_post', 'save_master_presentation', 10, 3 );

// OBJETIVO
function master_objective_callback( $post ) {
	$content = get_post_meta($post->ID, '_master_objective_value_key', true);
	wp_editor($content, 'master_objective_callback', array(
		'wpautop' => false,
		'media_buttons' => true,
		'editor_height' => 200,
	));
}
function save_master_objective( $post_id ) {
	if (!empty($_POST['master_objective_callback'])){
		$data = $_POST['master_objective_callback'];
		update_post_meta($post_id, '_master_objective_value_key', $data);
	}
}
add_action( 'save_post', 'save_master_objective', 10, 3 );

// DESCRIPCIÓN
function master_description_callback( $post ) {
	$content = get_post_meta($post->ID, '_master_description_value_key', true);
	wp_editor($content, 'master_description_callback', array(
		'wpautop' => false,
		'media_buttons' => true,
		'editor_height' => 200,
	));
}
function save_master_description( $post_id ) {
	if (!empty($_POST['master_description_callback'])){
		$data = $_POST['master_description_callback'];
		update_post_meta($post_id, '_master_description_value_key', $data);
	}
}
add_action( 'save_post', 'save_master_description', 10, 3 );

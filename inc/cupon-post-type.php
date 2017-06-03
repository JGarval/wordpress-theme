<?php
/*
	====================
	CUPON POST TYPE
	====================

	@package eadic-theme
*/
$masteres = $wpdb->get_col(
    "SELECT post_title FROM `wp_posts` WHERE `post_type`='master'"
);
global $arrayMasteres;
foreach ($masteres as $master ) {
	$arrayMasteres[] = $master;
}

/*
	REGISTER CUPON POST TYPE
	========================================
*/
add_action( 'init', 'custom_post_type_cupon' );
function custom_post_type_cupon() {
	$labels = array(
		'name'					=> _x( 'Cupones', 'Post Type General Name', 'eadic-theme' ),
		'singular_name'			=> _x( 'Cupón', 'Post Type Singular Name', 'eadic-theme' ),
		'add_new'				=> __( 'Añadir nuevo', 'eadic-theme' ),
		'add_new_item'			=> __( 'Añadir nuevo cupón', 'eadic-theme' ),
		'edit_item'				=> __( 'Editar cupón', 'eadic-theme' ),
		'new_item'				=> __( 'Nuevo cupón', 'eadic-theme' ),
		'view_item'				=> __( 'Ver cupón', 'eadic-theme' ),
		'search_items'			=> __( 'Buscar cupones', 'eadic-theme' ),
		'not_found'				=> __( 'No se han encontrado cupones', 'eadic-theme' ),
		'not_found_in_trash'	=> __( 'No se han encontrado cupones en la Papelera', 'eadic-theme' ),
		'parent_item_colon'		=> __( 'Cupones superiores', 'eadic-theme' ),
		'all_items'				=> __( 'Todos los cupones', 'eadic-theme' ),
		//'archives'				=>
		//'insert_into_item'		=>
		//'uploaded_to_this_item'	=>
		//'featured_image'		=>
		//'set_featured_image'	=>
		//'remove_featured_image' =>
		//'use_featured_image'	=>
		'menu_name'				=> _x( 'Cupones', 'Admin Menu' ),
		//'filter_items_list'		=>
		//'items_list_navigation'	=>
		//'items_list'			=>
		'name_admin_bar'		=> _x( 'Cupón', 'Add New In Admin Bar' ),
	);

	$args = array(
		'labels'				=> $labels,
		'description'			=> __( 'Cupones para los másteres de EADIC.' ),
		'public'				=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_nav_menus'		=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> null,
		'menu_icon'				=> 'dashicons-tickets-alt',
		'capability_type'		=> 'post',
		//'capabilities'			=> ,
		//'map_meta_cap'			=> ,
		'hierarchical'			=> false,
		'supports'				=> array( 'title' ),
		//'register_meta_box_cb'	=> ,
		//'taxonomies'			=> array( 'beca_descuento', 'fecha_inicio', 'duracion', 'precio', 'beca_precio', 'descripcion', 'objetivo', 'desglose' ),
		'has_archive'			=> false,
		'rewrite'				=> array( 'slug' => 'cupones' ),
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

	register_post_type( 'cupon', $args );
}

/*
	ADD META BOXES
	========================================
*/
add_action( 'add_meta_boxes', 'cupon_add_meta_boxes' );
function cupon_add_meta_boxes() {
	// Descuento %
	add_meta_box( 'cupon-descuento-porcentaje', 'Descuento en %', 'cupon_descuento_porcentaje', 'cupon', 'side', 'high');
	// Descuento monetario
	add_meta_box( 'cupon-descuento-monetario', 'Descuento en efectivo', 'cupon_descuento_monetario', 'cupon', 'side', 'high');
	// Máster
	add_meta_box( 'cupon-master', '¿A qué Máster se le aplica el descuento?', 'cupon_master', 'cupon', 'side', 'high');
}

/*
	META BOXES CALLBACKS
	========================================
*/
// DESCUENTO %
function cupon_descuento_porcentaje($post) {
	wp_nonce_field( 'save_cupon_descuento_porcentaje', "cupon_descuento_porcentaje_meta_box_nonce" );
	$value = get_post_meta( $post->ID, '_cupon_descuento_porcentaje_value_key', true );
	echo '<input type="text" id="cupon_descuento_porcentaje_field" class="cupon-meta-box" name="cupon_descuento_porcentaje_field" value="'.esc_attr( $value ).'" />';
}
function save_cupon_descuento_porcentaje($post_id) {
	if( ! isset( $_POST['cupon_descuento_porcentaje_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['cupon_descuento_porcentaje_meta_box_nonce'], 'save_cupon_descuento_porcentaje') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['cupon_descuento_porcentaje_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['cupon_descuento_porcentaje_field'] );

	update_post_meta( $post_id, '_cupon_descuento_porcentaje_value_key', $my_data );
}
add_action( 'save_post', 'save_cupon_descuento_porcentaje', 10, 3 );

// MASTER DESCUENTO MONETARIO
function cupon_descuento_monetario($post) {
	wp_nonce_field( 'save_cupon_descuento_monetario', "cupon_descuento_monetario_meta_box_nonce" );
	$value = get_post_meta( $post->ID, '_cupon_descuento_monetario_value_key', true );
	echo '<input type="text" id="cupon_descuento_monetario_field" class="cupon-meta-box" name="cupon_descuento_monetario_field" value="'.esc_attr( $value ).'" />';
}
function save_cupon_descuento_monetario($post_id) {
	if( ! isset( $_POST['cupon_descuento_monetario_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['cupon_descuento_monetario_meta_box_nonce'], 'save_cupon_descuento_monetario') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['cupon_descuento_monetario_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['cupon_descuento_monetario_field'] );

	update_post_meta( $post_id, '_cupon_descuento_monetario_value_key', $my_data );
}
add_action( 'save_post', 'save_cupon_descuento_monetario', 10, 3 );

// MASTER DESCUENTO
function cupon_master($post) {
	wp_nonce_field('save_cupon_master', 'cupon_master_meta_box_nonce');
	global $arrayMasteres;
	?>
	<select name="master_descuento" id="master_descuento">
		<option value="" disabled selected>Elige un máster</option>
		<option value="todos">Todos</option>
		<?php
		foreach($arrayMasteres as $master) {
		?>
<option value="<?php echo $master; ?>" <?php selected( $meta_relate, $master ); ?>><?php echo $master; ?></option>
		<?php
		}
		?>
	</select>
	<?php
}
function save_cupon_master($post_id) {
	if( ! isset( $_POST['cupon_master_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['cupon_master_meta_box_nonce'], 'save_cupon_master') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['cupon_master_field'] ) ) {
		return;
	}

	if( ! isset( $_POST['master_descuento'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['master_descuento'] );

	update_post_meta( $post_id, 'master_descuento', $my_data );
}
add_action( 'save_post', 'save_cupon_master', 10, 3 );

/*
	ADD CUPON COLUMNS
	========================================
*/
add_filter( 'manage_edit-cupon_columns', 'cupon_post_columns' );
function cupon_post_columns( $columns ) {
	$columns = array();
	$columns['title'] = 'Cupón';
	$columns['descuento'] = 'Descuento';
	$columns['master'] = 'Máster';
	$columns['date'] = 'Fecha de Publicación';
	return $columns;
}

add_action( 'manage_cupon_posts_custom_column', 'cupon_custom_post_columns', 10, 2 );
function cupon_custom_post_columns( $column, $post_id ) {
	switch ($column) {
		case 'master':
			$terms = wp_get_post_terms( $post_id, 'master' );
			foreach ( $terms as $term ) : ?>
			<p><?php echo $term->name; ?></p>
			<?php endforeach;
			break;
		case 'descuento':
			$descuento_porcentaje = get_post_meta($post_id, '_cupon_descuento_porcentaje_value_key', true);
			$descuento_monetario = get_post_meta($post_id, '_cupon_descuento_monetario_value_key', true);
			if ($descuento_porcentaje != '') {
				?>
				<p><?php echo $descuento_porcentaje; ?>%</p>
				<?php
			}
			$terms = wp_get_post_terms( $post_id, 'descuento' );
			foreach ( $terms as $term ) : ?>
			<p><?php echo $term->name; ?></p>
			<?php endforeach;
			break;
		default:
			break;
	}
}

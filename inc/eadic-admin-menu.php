<?php
/*
====================
ADMIN MENU
====================
@package eadic-theme
*/

add_action( 'admin_menu', 'eadic_admin_menu' );
function eadic_admin_menu() {
	// Menu
	add_menu_page( 'EADIC - Menú de Administración', 'EADIC', 'manage_options', 'eadic-admin', 'eadic_admin', get_template_directory_uri().'/images/eadic-escuela-tecnica-logo.png', 3 );

	// SubMenu
	add_submenu_page( 'eadic-admin', 'EADIC - Menú de Administración', 'General', 'manage_options', 'eadic-admin', 'eadic_admin' );
	//add_submenu_page( 'eadic-admin', 'Configurar Usuarios', 'Configurar Usuarios', 'manage_options', 'eadic-admin-users', 'eadic_admin_users' );
  add_submenu_page( 'eadic-admin', 'Configurar Productos', 'Productos', 'manage_options', 'eadic-admin-products', 'eadic_admin_products' );

	// Admin Settings added in here to prevent the creation of the settings if not required.
	add_action( 'admin_init', 'eadic__general' );
	add_action( 'admin_init', 'eadic__users' );
  add_action( 'admin_init', 'eadic__products' );
}

/*
	LOAD TEMPLATES
	========================================
*/
add_action('admin_init', 'eadic_admin_load_templates');
function eadic_admin_load_templates() {
	function url_template($suffix) {
		$prefix = "/admin-templates/admin-page-";
		return get_template_directory() . $prefix . $suffix;
	}
	function eadic_admin() {
		require_once( url_template("general.php") );
	}
	// function eadic_admin_theme() {
	// 	require_once( url_template("theme.php") );
	// }
	// function eadic_admin_users() {
	// 	require_once( url_template("users.php") );
	// }
  function eadic_admin_products() {
		require_once( url_template("products.php") );
	}
}

/*
========================================
GENERAL
========================================
*/
function eadic__general() {

	/* GENERAL > INICIO */
  // Activar y desactivar opciones
  register_setting( 'eadic__general', 'eadic__general-contact' );
	register_setting( 'eadic__general', 'eadic__general-navigation' );
	register_setting( 'eadic__general', 'eadic__general-banner' );
	register_setting( 'eadic__general', 'eadic__general-phases' );
	register_setting( 'eadic__general', 'eadic__general-about' );
	register_setting( 'eadic__general', 'eadic__general-category' );
	register_setting( 'eadic__general', 'eadic__general-metodology' );
	register_setting( 'eadic__general', 'eadic__general-testimony' );
	register_setting( 'eadic__general', 'eadic__general-supporter' );

	add_settings_section( 'eadic__general-options', '', 'eadic__general_options', 'eadic-admin' );

	add_settings_field( 'activate__general-contact', 'Menú de Contacto', 'activate__general_contact', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-navigation', 'Menú de Navegación', 'activate__general_navigation', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-banner', 'Banner', 'activate__general_banner', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-phases', 'Fases', 'activate__general_phases', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-about', 'Sobre EADIC', 'activate__general_about', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-category', 'Categorías', 'activate__general_category', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-metodology', 'Metodología', 'activate__general_metodology', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-testimony', 'Testimonios', 'activate__general_testimony', 'eadic-admin', 'eadic__general-options' );
	add_settings_field( 'activate__general-supporter', 'Colaboradores', 'activate__general_supporter', 'eadic-admin', 'eadic__general-options' );

	/* TODO: Hacer que se muestren/oculten cuando está o no clickado. */
	function eadic__general_options() {}
	function activate__general_contact() {
		$options = get_option( 'eadic__general-contact' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-contact" name="eadic__general-contact" value="1" '.$checked.' /></label>';
	}
	function activate__general_navigation() {
		$options = get_option( 'eadic__general-navigation' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-navigation" name="eadic__general-navigation" value="1" '.$checked.' /></label>';
	}
	function activate__general_banner() {
		$options = get_option( 'eadic__general-banner' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-banner" name="eadic__general-banner" value="1" '.$checked.' /></label>';
	}
	function activate__general_phases() {
		$options = get_option( 'eadic__general-phases' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-phases" name="eadic__general-phases" value="1" '.$checked.' /></label>';
	}
	function activate__general_about() {
		$options = get_option( 'eadic__general-about' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-about" name="eadic__general-about" value="1" '.$checked.' /></label>';
	}
	function activate__general_category() {
		$options = get_option( 'eadic__general-category' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-category" name="eadic__general-category" value="1" '.$checked.' /></label>';
	}
	function activate__general_metodology() {
		$options = get_option( 'eadic__general-metodology' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-metodology" name="eadic__general-metodology" value="1" '.$checked.' /></label>';
	}
	function activate__general_testimony() {
		$options = get_option( 'eadic__general-testimony' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-testimony" name="eadic__general-testimony" value="1" '.$checked.' /></label>';
	}
	function activate__general_supporter() {
		$options = get_option( 'eadic__general-supporter' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="eadic__general-supporter" name="eadic__general-supporter" value="1" '.$checked.' /></label>';
	}

  // Configurar opciones
	/* TODO: Hacer que se creen dinámicamente clickando un botón de "Añadir otro" */
	/* TODO: Registrar diferentes opciones para cada sección */
	register_setting( 'eadic__general', 'eadic__header_email-1' );
	register_setting( 'eadic__general', 'eadic__header_email-2' );
	register_setting( 'eadic__general', 'eadic__header_email-3' );
	register_setting( 'eadic__general', 'eadic__header_phone-1' );
	register_setting( 'eadic__general', 'eadic__header_phone-2' );
	register_setting( 'eadic__general', 'eadic__header_phone-3' );
	register_setting( 'eadic__general', 'eadic__header_phone-4' );
	/* TODO: Hacer que muestre la imagen cargada */
	register_setting( 'eadic__general', 'eadic__header_logo-1' );
	register_setting( 'eadic__general', 'eadic__header_logo-2' );
	register_setting( 'eadic__general', 'eadic__header_logo-3' );
	register_setting( 'eadic__general', 'eadic__header_logo-4' );

	register_setting( 'eadic__general', 'eadic__content-phases-title-1' );
	register_setting( 'eadic__general', 'eadic__content-phases-title-2' );
	register_setting( 'eadic__general', 'eadic__content-phases-title-3' );
	register_setting( 'eadic__general', 'eadic__content-phases-title-4' );
	register_setting( 'eadic__general', 'eadic__content-phases-content-1' );
	register_setting( 'eadic__general', 'eadic__content-phases-content-2' );
	register_setting( 'eadic__general', 'eadic__content-phases-content-3' );
	register_setting( 'eadic__general', 'eadic__content-phases-content-4' );

	register_setting( 'eadic__general', 'eadic__content-about-title-1' );
	register_setting( 'eadic__general', 'eadic__content-about-title-2' );
	register_setting( 'eadic__general', 'eadic__content-about-title-3' );
	register_setting( 'eadic__general', 'eadic__content-about-title-4' );
	register_setting( 'eadic__general', 'eadic__content-about-title-5' );
	register_setting( 'eadic__general', 'eadic__content-about-content-1' );
	register_setting( 'eadic__general', 'eadic__content-about-content-2' );
	register_setting( 'eadic__general', 'eadic__content-about-content-3' );
	register_setting( 'eadic__general', 'eadic__content-about-content-4' );
	register_setting( 'eadic__general', 'eadic__content-about-content-5' );
	register_setting( 'eadic__general', 'eadic__content-about-image-1' );
	register_setting( 'eadic__general', 'eadic__content-about-image-2' );
	register_setting( 'eadic__general', 'eadic__content-about-image-3' );
	register_setting( 'eadic__general', 'eadic__content-about-image-4' );
	register_setting( 'eadic__general', 'eadic__content-about-image-5' );

	register_setting( 'eadic__general', 'eadic__content-category-title-1' );
	register_setting( 'eadic__general', 'eadic__content-category-title-2' );
	register_setting( 'eadic__general', 'eadic__content-category-title-3' );
	register_setting( 'eadic__general', 'eadic__content-category-title-4' );
	register_setting( 'eadic__general', 'eadic__content-category-title-5' );
	register_setting( 'eadic__general', 'eadic__content-category-content-1' );
	register_setting( 'eadic__general', 'eadic__content-category-content-2' );
	register_setting( 'eadic__general', 'eadic__content-category-content-3' );
	register_setting( 'eadic__general', 'eadic__content-category-content-4' );
	register_setting( 'eadic__general', 'eadic__content-category-content-5' );
	register_setting( 'eadic__general', 'eadic__content-category-image-1' );
	register_setting( 'eadic__general', 'eadic__content-category-image-2' );
	register_setting( 'eadic__general', 'eadic__content-category-image-3' );
	register_setting( 'eadic__general', 'eadic__content-category-image-4' );
	register_setting( 'eadic__general', 'eadic__content-category-image-5' );

	/* TODO: Hacer desplegable de todos los Másteres publicados. */
	register_setting( 'eadic__general', 'eadic__content-popular-master-slug-1' );
	register_setting( 'eadic__general', 'eadic__content-popular-master-slug-2' );
	register_setting( 'eadic__general', 'eadic__content-popular-master-slug-3' );
	register_setting( 'eadic__general', 'eadic__content-popular-master-slug-4' );
	register_setting( 'eadic__general', 'eadic__content-popular-master-slug-5' );

	register_setting( 'eadic__general', 'eadic__content-metodology-title-1' );
	register_setting( 'eadic__general', 'eadic__content-metodology-title-2' );
	register_setting( 'eadic__general', 'eadic__content-metodology-title-3' );
	register_setting( 'eadic__general', 'eadic__content-metodology-title-4' );
	register_setting( 'eadic__general', 'eadic__content-metodology-title-5' );
	register_setting( 'eadic__general', 'eadic__content-metodology-content-1' );
	register_setting( 'eadic__general', 'eadic__content-metodology-content-2' );
	register_setting( 'eadic__general', 'eadic__content-metodology-content-3' );
	register_setting( 'eadic__general', 'eadic__content-metodology-content-4' );
	register_setting( 'eadic__general', 'eadic__content-metodology-content-5' );

	register_setting( 'eadic__general', 'eadic__content-testimony-author-1' );
	register_setting( 'eadic__general', 'eadic__content-testimony-author-2' );
	register_setting( 'eadic__general', 'eadic__content-testimony-author-3' );
	register_setting( 'eadic__general', 'eadic__content-testimony-content-1' );
	register_setting( 'eadic__general', 'eadic__content-testimony-content-2' );
	register_setting( 'eadic__general', 'eadic__content-testimony-content-3' );
	register_setting( 'eadic__general', 'eadic__content-testimony-media-1' );
	register_setting( 'eadic__general', 'eadic__content-testimony-media-2' );
	register_setting( 'eadic__general', 'eadic__content-testimony-media-3' );

	add_settings_section( 'eadic__theme-options', '', 'eadic__theme_options', 'eadic-admin-theme');
	function eadic__theme_options() {}

	add_settings_field( 'eadic-front-email', 'Correo electrónico', 'eadic_front_email', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-phone', 'Teléfono de contacto', 'eadic_front_phone', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-phases', 'Pasos beca', 'eadic_front_phases', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-about', 'Sobre EADIC', 'eadic_front_about', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-category', 'Áreas Formativas', 'eadic_front_category', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-metodology', 'Metodología', 'eadic_front_metodology', 'eadic-admin-theme', 'eadic__theme-options' );
	add_settings_field( 'eadic-front-testimony', 'Testimonios de alumnos', 'eadic_front_testimony', 'eadic-admin-theme', 'eadic__theme-options' );

	function eadic_front_email() {
		$email1 = esc_attr( get_option( 'eadic__header_email-1' ) );
		$email2 = esc_attr( get_option( 'eadic__header_email-2' ) );
		echo '
		<input id="email_field_" type="email" name="eadic__header_email-1" value="'.$email1.'" placeholder="Correo Electrónico" size="35"/>
		<input id="email_field_" type="text" name="eadic__header_email-2" value="'.$email2.'" placeholder="Web" size="35"/>
		';

		// TODO: Make the add button.
	    // $data = array(
	    //   'email1' => $email1,
	    // );
	    // json_encode(data);
		//
		// 	echo '<fieldset id="email_holder"></fieldset>';
		// 	echo '
	    // <input id="email_field_" type="email" name="eadic__header_email-1" value="'.$email1.'" placeholder="Correo Electrónico" size="35"/>
	    // <button id="add_email" type="button" class="button button-secondary add_email" value="Añadir otro">
		// 		<span class="dashicons dashicons-plus"></span>Añadir otro
	    // </button>';
	}
	function eadic_front_phone() {
		$phone1 = esc_attr( get_option( 'eadic__header_phone-1' ) );
		echo '<input id="phone-flag-spain" type="text" name="eadic__header_phone-1" value="'.$phone1.'" placeholder="Teléfono" /> ';
		$phone2 = esc_attr( get_option( 'eadic__header_phone-2' ) );
		echo '<input id="phone-flag-colombia" type="text" name="eadic__header_phone-2" value="'.$phone2.'" placeholder="Teléfono" /> ';
		$phone3 = esc_attr( get_option( 'eadic__header_phone-3' ) );
		echo '<input id="phone-flag-peru" type="text" name="eadic__header_phone-3" value="'.$phone3.'" placeholder="Teléfono" /> ';
		$phone4 = esc_attr( get_option( 'eadic__header_phone-4' ) );
		echo '<input id="phone-flag-whatsapp" type="text" name="eadic__header_phone-4" value="'.$phone4.'" placeholder="Teléfono" /> ';

		// TODO: Make the add button.
		// echo '<fieldset id="email_holder"></fieldset>';
		// echo '<input type="text" name="eadic__header_phone-" value="" placeholder="Teléfono" size="35"/>';
		// echo '<button id="add_email" type="button" class="button button-secondary add_email" value="Añadir otro">
		// 	<span class="dashicons dashicons-plus-alt"></span>Añadir otro</button>';
	}
	function eadic_front_phases() {
		$phases_block_title_1 = esc_attr( get_option('eadic__content-phases-title-1') );
		$phases_block_title_2 = esc_attr( get_option('eadic__content-phases-title-2') );
		$phases_block_title_3 = esc_attr( get_option('eadic__content-phases-title-3') );
		$phases_block_title_4 = esc_attr( get_option('eadic__content-phases-title-4') );

		$phases_block_content_1 = esc_attr( get_option( 'eadic__content-phases-content-1' ) );
		$phases_block_content_2 = esc_attr( get_option( 'eadic__content-phases-content-2' ) );
		$phases_block_content_3 = esc_attr( get_option( 'eadic__content-phases-content-3' ) );
		$phases_block_content_4 = esc_attr( get_option( 'eadic__content-phases-content-4' ) );

		echo '
		<h3>Columna 1</h3>
		<input type="text" name="eadic__content-phases-title-1" value="'.$phases_block_title_1.'" placeholder="Título" />
		<input type="text" name="eadic__content-phases-content-1" value="'.$phases_block_content_1.'" placeholder="Contenido" />
		<h3>Columna 2</h3>
		<input type="text" name="eadic__content-phases-title-2" value="'.$phases_block_title_2.'" placeholder="Título" />
		<input type="text" name="eadic__content-phases-content-2" value="'.$phases_block_content_2.'" placeholder="Contenido" />
		<h3>Columna 3</h3>
		<input type="text" name="eadic__content-phases-title-3" value="'.$phases_block_title_3.'" placeholder="Título" />
		<input type="text" name="eadic__content-phases-content-3" value="'.$phases_block_content_3.'" placeholder="Contenido" />
		<h3>Columna 4</h3>
		<input type="text" name="eadic__content-phases-title-4" value="'.$phases_block_title_4.'" placeholder="Título" />
		<input type="text" name="eadic__content-phases-content-4" value="'.$phases_block_content_4.'" placeholder="Contenido" />';
	}
	function eadic_front_about() {
		$about_block_title_1 = esc_attr( get_option('eadic__content-about-title-1') );
		$about_block_title_2 = esc_attr( get_option('eadic__content-about-title-2') );
		$about_block_title_3 = esc_attr( get_option('eadic__content-about-title-3') );
		$about_block_title_4 = esc_attr( get_option('eadic__content-about-title-4') );
		$about_block_title_5 = esc_attr( get_option('eadic__content-about-title-5') );

		$about_block_content_1 = esc_attr( get_option( 'eadic__content-about-content-1' ) );
		$about_block_content_2 = esc_attr( get_option( 'eadic__content-about-content-2' ) );
		$about_block_content_3 = esc_attr( get_option( 'eadic__content-about-content-3' ) );
		$about_block_content_4 = esc_attr( get_option( 'eadic__content-about-content-4' ) );
		$about_block_content_5 = esc_attr( get_option( 'eadic__content-about-content-5' ) );
		// Imagen
		$about_block_image_1 = esc_attr( get_option( 'eadic__content-about-image-1' ) );
		$about_block_image_2 = esc_attr( get_option( 'eadic__content-about-image-2' ) );
		$about_block_image_3 = esc_attr( get_option( 'eadic__content-about-image-3' ) );
		$about_block_image_4 = esc_attr( get_option( 'eadic__content-about-image-4' ) );
		$about_block_image_5 = esc_attr( get_option( 'eadic__content-about-image-5' ) );

		echo '
		<h3>Columna 1</h3>
		<input type="text" name="eadic__content-about-title-1" value="'.$about_block_title_1.'" placeholder="Título" />
		<input type="text" name="eadic__content-about-content-1" value="'.$about_block_content_1.'" placeholder="Contenido" />
		<input type="text" name="eadic__content-about-image-1" value="'.$about_block_image_1.'" placeholder="Imagen" />
		<h3>Columna 2</h3>
		<input type="text" name="eadic__content-about-title-2" value="'.$about_block_title_2.'" placeholder="Título" />
		<input type="text" name="eadic__content-about-content-2" value="'.$about_block_content_2.'" placeholder="Contenido" />
		<input type="text" name="eadic__content-about-image-2" value="'.$about_block_image_2.'" placeholder="Imagen" />
		<h3>Columna 3</h3>
		<input type="text" name="eadic__content-about-title-3" value="'.$about_block_title_3.'" placeholder="Título" />
		<input type="text" name="eadic__content-about-content-3" value="'.$about_block_content_3.'" placeholder="Contenido" />
		<input type="text" name="eadic__content-about-image-3" value="'.$about_block_image_3.'" placeholder="Imagen" />
		<h3>Columna 4</h3>
		<input type="text" name="eadic__content-about-title-4" value="'.$about_block_title_4.'" placeholder="Título" />
		<input type="text" name="eadic__content-about-content-4" value="'.$about_block_content_4.'" placeholder="Contenido" />
		<input type="text" name="eadic__content-about-image-4" value="'.$about_block_image_4.'" placeholder="Imagen" />
		<h3>Columna 5</h3>
		<input type="text" name="eadic__content-about-title-5" value="'.$about_block_title_5.'" placeholder="Título" />
		<input type="text" name="eadic__content-about-content-5" value="'.$about_block_content_5.'" placeholder="Contenido" />
		<input type="text" name="eadic__content-about-image-5" value="'.$about_block_image_5.'" placeholder="Imagen" />';
	}
	function eadic_front_category() {
		$category_block_title_1 = esc_attr( get_option( 'eadic__content-category-title-1' ) );
		$category_block_title_2 = esc_attr( get_option( 'eadic__content-category-title-2' ) );
		$category_block_title_3 = esc_attr( get_option( 'eadic__content-category-title-3' ) );
		$category_block_title_4 = esc_attr( get_option( 'eadic__content-category-title-4' ) );
		$category_block_title_5 = esc_attr( get_option( 'eadic__content-category-title-5' ) );

		$category_block_content_1 = esc_attr( get_option( 'eadic__content-category-content-1' ) );
		$category_block_content_2 = esc_attr( get_option( 'eadic__content-category-content-2' ) );
		$category_block_content_3 = esc_attr( get_option( 'eadic__content-category-content-3' ) );
		$category_block_content_4 = esc_attr( get_option( 'eadic__content-category-content-4' ) );
		$category_block_content_5 = esc_attr( get_option( 'eadic__content-category-content-5' ) );
		echo '
		<h3>Columna 1</h3>
		<input type="text" name="eadic__content-category-title-1" value="'.$category_block_title_1.'" placeholder="Título" />
		<input type="text" name="eadic__content-category-content-1" value="'.$category_block_content_1.'" placeholder="Contenido" />
		<h3>Columna 2</h3>
		<input type="text" name="eadic__content-category-title-2" value="'.$category_block_title_2.'" placeholder="Título" />
		<input type="text" name="eadic__content-category-content-2" value="'.$category_block_content_2.'" placeholder="Contenido" />
		<h3>Columna 3</h3>
		<input type="text" name="eadic__content-category-title-3" value="'.$category_block_title_3.'" placeholder="Título" />
		<input type="text" name="eadic__content-category-content-3" value="'.$category_block_content_3.'" placeholder="Contenido" />
		<h3>Columna 4</h3>
		<input type="text" name="eadic__content-category-title-4" value="'.$category_block_title_4.'" placeholder="Título" />
		<input type="text" name="eadic__content-category-content-4" value="'.$category_block_content_4.'" placeholder="Contenido" />
		<h3>Columna 5</h3>
		<input type="text" name="eadic__content-category-title-5" value="'.$category_block_title_5.'" placeholder="Título" />
		<input type="text" name="eadic__content-category-content-5" value="'.$category_block_content_5.'" placeholder="Contenido" />';
	}
	function eadic_front_metodology() {
		$metodology_block_title_1 = esc_attr( get_option( 'eadic__content-metodology-title-1' ) );
		$metodology_block_title_2 = esc_attr( get_option( 'eadic__content-metodology-title-2' ) );
		$metodology_block_title_3 = esc_attr( get_option( 'eadic__content-metodology-title-3' ) );
		$metodology_block_title_4 = esc_attr( get_option( 'eadic__content-metodology-title-4' ) );
		$metodology_block_title_5 = esc_attr( get_option( 'eadic__content-metodology-title-5' ) );

		$metodology_block_content_1 = esc_attr( get_option( 'eadic__content-metodology-content-1' ) );
		$metodology_block_content_2 = esc_attr( get_option( 'eadic__content-metodology-content-2' ) );
		$metodology_block_content_3 = esc_attr( get_option( 'eadic__content-metodology-content-3' ) );
		$metodology_block_content_4 = esc_attr( get_option( 'eadic__content-metodology-content-4' ) );
		$metodology_block_content_5 = esc_attr( get_option( 'eadic__content-metodology-content-5' ) );
		echo '
		<h3>Columna 1</h3>
		<input type="text" name="eadic__content-metodology-title-1" value="'.$metodology_block_title_1.'" placeholder="Título" />
		<input type="text" name="eadic__content-metodology-content-1" value="'.$metodology_block_content_1.'" placeholder="Contenido" />
		<h3>Columna 2</h3>
			<input type="text" name="eadic__content-metodology-title-2" value="'.$metodology_block_title_2.'" placeholder="Título" />
		<input type="text" name="eadic__content-metodology-content-2" value="'.$metodology_block_content_2.'" placeholder="Contenido" />
		<h3>Columna 3</h3>
			<input type="text" name="eadic__content-metodology-title-3" value="'.$metodology_block_title_3.'" placeholder="Título" />
		<input type="text" name="eadic__content-metodology-content-3" value="'.$metodology_block_content_3.'" placeholder="Contenido" />
		<h3>Columna 4</h3>
			<input type="text" name="eadic__content-metodology-title-4" value="'.$metodology_block_title_4.'" placeholder="Título" />
		<input type="text" name="eadic__content-metodology-content-4" value="'.$metodology_block_content_4.'" placeholder="Contenido" />
		<h3>Columna 5</h3>
		<input type="text" name="eadic__content-metodology-title-5" value="'.$metodology_block_title_5.'" placeholder="Título" />
		<input type="text" name="eadic__content-metodology-content-5" value="'.$metodology_block_content_5.'" placeholder="Contenido" />';
	}
	function eadic_front_testimony() {
		$testimony_author_1 = esc_attr( get_option( 'eadic__content-testimony-author-1' ) );
		$testimony_author_2 = esc_attr( get_option( 'eadic__content-testimony-author-2' ) );
		$testimony_author_3 = esc_attr( get_option( 'eadic__content-testimony-author-3' ) );

		$testimony_content_1 = esc_attr( get_option( 'eadic__content-testimony-content-1' ) );
		$testimony_content_2 = esc_attr( get_option( 'eadic__content-testimony-content-2' ) );
		$testimony_content_3 = esc_attr( get_option( 'eadic__content-testimony-content-3' ) );

		$testimony_media_1 = esc_attr( get_option( 'eadic__content-testimony-media-1' ) );
		$testimony_media_2 = esc_attr( get_option( 'eadic__content-testimony-media-2' ) );
		$testimony_media_3 = esc_attr( get_option( 'eadic__content-testimony-media-3' ) );
		echo '
    	<h3>Testimonio 1</h3>
    	<input type="text" name="eadic__content-testimony-author-1" value="'.$testimony_author_1.'" placeholder="Autor" />
    	<input type="text" name="eadic__content-testimony-content-1" value="'.$testimony_content_1.'" placeholder="Contenido" />
    	<input type="text" name="eadic__content-testimony-media-1" value="'.$testimony_media_1.'" placeholder="Vídeo" />
    	<h3>Testimonio 2</h3>
    	<input type="text" name="eadic__content-testimony-author-2" value="'.$testimony_author_2.'" placeholder="Autor" />
    	<input type="text" name="eadic__content-testimony-content-2" value="'.$testimony_content_2.'" placeholder="Contenido" />
    	<input type="text" name="eadic__content-testimony-media-2" value="'.$testimony_media_2.'" placeholder="Vídeo" />
    	<h3>Testimonio 3</h3>
    	<input type="text" name="eadic__content-testimony-author-3" value="'.$testimony_author_3.'" placeholder="Autor" />
    	<input type="text" name="eadic__content-testimony-content-3" value="'.$testimony_content_3.'" placeholder="Contenido" />
    	<input type="text" name="eadic__content-testimony-media-3" value="'.$testimony_media_3.'" placeholder="Vídeo" />';
	}

}// eadic__general()

/*
========================================
PRODUCTS SUBMENU
========================================
*/
function eadic__products() {
  // PEDIDOS
  register_setting('eadic__products', 'pedidos');
  register_setting('eadic__products', 'p_master');
  register_setting('eadic__products', 'p_precio');
  register_setting('eadic__products', 'p_estado');
  register_setting('eadic__products', 'p_nombre');
  register_setting('eadic__products', 'p_apellidos');
  register_setting('eadic__products', 'p_telefono');
  register_setting('eadic__products', 'p_email');
  register_setting('eadic__products', 'p_pais');
  register_setting('eadic__products', 'p_titulacion');
  register_setting('eadic__products', 'p_situacion_laboral');
  register_setting('eadic__products', 'p_comentario');

  add_settings_section('eadic__products-section', '', 'eadic__products_section', 'eadic-admin-products');
  function eadic__products_section() {}

  add_settings_field('eadic-products-database', 'Registro de compras', 'eadic_products_database', 'eadic-admin-products', 'eadic__products-options');

  function eadic_products_database() {
    $p_master = esc_attr(get_option('p_master'));
    echo '
    	<h3>Testimonio 1</h3>
    	<input type="text" name="eadic__content-testimony-author-1" value="'.$p_master.'" placeholder="Autor" />';
  }
}// eadic__products()

/*
========================================
USERS SUBMENU
========================================
*/
function eadic__users() {}// eadic__users()

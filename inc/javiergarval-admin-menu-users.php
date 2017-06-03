<?php
/*
====================
ADMIN MENU
====================
@package javiergarval-theme
*/
?>

<?php
/*
	ADMIN MENU
	========================================
	Creates the tab in the admin menu placed on the left.
*/
add_action( 'admin_menu', 'javiergarval_admin_menu' );
/**
 *
 */
function javiergarval_admin_menu() {
	// Menu
	add_menu_page( 'javiergarval - Menú de Administración', 'javiergarval', 'manage_options', 'javiergarval-admin', 'javiergarval_admin', get_template_directory_uri().'/images/javiergarval-escuela-tecnica-logo.png', 3 );

	// SubMenu
	add_submenu_page( 'javiergarval-admin', 'javiergarval - Menú de Administración', 'General', 'manage_options', 'javiergarval-admin', 'javiergarval_admin' );
	//add_submenu_page( 'javiergarval-admin', 'Configurar Tema', 'Configurar Tema', 'manage_options', 'javiergarval-admin-theme', 'javiergarval_admin_theme' );
	add_submenu_page( 'javiergarval-admin', 'Configurar Usuarios', 'Configurar Usuarios', 'manage_options', 'javiergarval-admin-users', 'javiergarval_admin_users' );
  add_submenu_page( 'javiergarval-admin', 'Configurar Productos', 'Productos', 'manage_options', 'javiergarval-admin-products', 'javiergarval_admin_products' );

	// Admin Settings added in here to prevent the creation of the settings if not required.
	add_action( 'admin_init', 'javiergarval__general' );
	add_action( 'admin_init', 'javiergarval__theme' );
	add_action( 'admin_init', 'javiergarval__users' );
  add_action( 'admin_init', 'javiergarval__products' );
}

/*
	LOAD TEMPLATES
	========================================
*/
add_action('admin_init', 'javiergarval_admin_load_templates');
function javiergarval_admin_load_templates() {
	function url_template($suffix) {
		$prefix = "/admin-templates/admin-page-";
		return get_template_directory() . $prefix . $suffix;
	}
	function javiergarval_admin() {
		require_once( url_template("general.php") );
	}
	function javiergarval_admin_theme() {
		require_once( url_template("theme.php") );
	}
	function javiergarval_admin_users() {
		require_once( url_template("users.php") );
	}
  function javiergarval_admin_products() {
		require_once( url_template("products.php") );
	}
}

/*
	GENERAL SUBMENU
	========================================
*/
function javiergarval__general() {
	register_setting( 'javiergarval__general', 'javiergarval__general-contact' );
	register_setting( 'javiergarval__general', 'javiergarval__general-navigation' );
	register_setting( 'javiergarval__general', 'javiergarval__general-banner' );
	register_setting( 'javiergarval__general', 'javiergarval__general-phases' );
	register_setting( 'javiergarval__general', 'javiergarval__general-about' );
	register_setting( 'javiergarval__general', 'javiergarval__general-category' );
	register_setting( 'javiergarval__general', 'javiergarval__general-metodology' );
	register_setting( 'javiergarval__general', 'javiergarval__general-testimony' );
	register_setting( 'javiergarval__general', 'javiergarval__general-supporter' );

	add_settings_section( 'javiergarval__general-options', '', 'javiergarval__general_options', 'javiergarval-admin' );

	add_settings_field( 'activate__general-contact', 'Menú de Contacto', 'activate__general_contact', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-navigation', 'Menú de Navegación', 'activate__general_navigation', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-banner', 'Banner', 'activate__general_banner', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-phases', 'Fases', 'activate__general_phases', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-about', 'Sobre javiergarval', 'activate__general_about', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-category', 'Categorías', 'activate__general_category', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-metodology', 'Metodología', 'activate__general_metodology', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-testimony', 'Testimonios', 'activate__general_testimony', 'javiergarval-admin', 'javiergarval__general-options' );
	add_settings_field( 'activate__general-supporter', 'Colaboradores', 'activate__general_supporter', 'javiergarval-admin', 'javiergarval__general-options' );

	/* TODO: Hacer que se muestren/oculten cuando está o no clickado. */
	function javiergarval__general_options() {}
	function activate__general_contact() {
		$options = get_option( 'javiergarval__general-contact' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-contact" name="javiergarval__general-contact" value="1" '.$checked.' /></label>';
	}
	function activate__general_navigation() {
		$options = get_option( 'javiergarval__general-navigation' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-navigation" name="javiergarval__general-navigation" value="1" '.$checked.' /></label>';
	}
	function activate__general_banner() {
		$options = get_option( 'javiergarval__general-banner' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-banner" name="javiergarval__general-banner" value="1" '.$checked.' /></label>';
	}
	function activate__general_phases() {
		$options = get_option( 'javiergarval__general-phases' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-phases" name="javiergarval__general-phases" value="1" '.$checked.' /></label>';
	}
	function activate__general_about() {
		$options = get_option( 'javiergarval__general-about' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-about" name="javiergarval__general-about" value="1" '.$checked.' /></label>';
	}
	function activate__general_category() {
		$options = get_option( 'javiergarval__general-category' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-category" name="javiergarval__general-category" value="1" '.$checked.' /></label>';
	}
	function activate__general_metodology() {
		$options = get_option( 'javiergarval__general-metodology' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-metodology" name="javiergarval__general-metodology" value="1" '.$checked.' /></label>';
	}
	function activate__general_testimony() {
		$options = get_option( 'javiergarval__general-testimony' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-testimony" name="javiergarval__general-testimony" value="1" '.$checked.' /></label>';
	}
	function activate__general_supporter() {
		$options = get_option( 'javiergarval__general-supporter' );
		$checked = ( @$options == 1 ? 'checked' : '' );
		echo '<label><input type="checkbox" id="javiergarval__general-supporter" name="javiergarval__general-supporter" value="1" '.$checked.' /></label>';
	}

	/*
		THEME SUBMENU
		========================================
	*/
	function javiergarval__theme() {
		/*
			REGISTER SETTINGS
			====================
		*/
		/* TODO: Hacer que se creen dinámicamente clickando un botón de "Añadir otro" */
		/* TODO: Registrar diferentes opciones para cada sección */
		// HEADER
		// Menú de contacto
		// eMail
		register_setting( 'javiergarval__general', 'javiergarval__header_email-1' );
		register_setting( 'javiergarval__general', 'javiergarval__header_email-2' );
		register_setting( 'javiergarval__general', 'javiergarval__header_email-3' );
		// Teléfonos
		register_setting( 'javiergarval__general', 'javiergarval__header_phone-1' );
		register_setting( 'javiergarval__general', 'javiergarval__header_phone-2' );
		register_setting( 'javiergarval__general', 'javiergarval__header_phone-3' );
		register_setting( 'javiergarval__general', 'javiergarval__header_phone-4' );
		/* TODO: Hacer que muestre la imagen cargada */
		// Menú de navegación
		// Logos
		register_setting( 'javiergarval__general', 'javiergarval__header_logo-1' );
		register_setting( 'javiergarval__general', 'javiergarval__header_logo-2' );
		register_setting( 'javiergarval__general', 'javiergarval__header_logo-3' );
		register_setting( 'javiergarval__general', 'javiergarval__header_logo-4' );

		// CONTENT
		// Phases
		// Título
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-title-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-title-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-title-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-title-4' );

		// Contenido
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-content-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-phases-content-4' );

		// About Us
		// Título
		register_setting( 'javiergarval__general', 'javiergarval__content-about-title-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-title-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-title-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-title-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-title-5' );
		// Contenido
		register_setting( 'javiergarval__general', 'javiergarval__content-about-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-content-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-content-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-content-5' );
		// Imagen
		register_setting( 'javiergarval__general', 'javiergarval__content-about-image-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-image-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-image-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-image-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-about-image-5' );

		// Categories
		// Título
		register_setting( 'javiergarval__general', 'javiergarval__content-category-title-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-title-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-title-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-title-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-title-5' );
		// Contenido
		register_setting( 'javiergarval__general', 'javiergarval__content-category-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-content-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-content-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-content-5' );
		// Imagen
		register_setting( 'javiergarval__general', 'javiergarval__content-category-image-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-image-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-image-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-image-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-category-image-5' );

		/* TODO: Hacer desplegable de todos los Másteres publicados. */
		// Popular Masters
		// Slug
		register_setting( 'javiergarval__general', 'javiergarval__content-popular-master-slug-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-popular-master-slug-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-popular-master-slug-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-popular-master-slug-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-popular-master-slug-5' );

		// Metdología
		// Título
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-title-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-title-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-title-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-title-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-title-5' );
		// Contenido
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-content-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-content-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-metodology-content-5' );

		// Testimonios
		// Autor
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-author-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-author-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-author-3' );
		// Contenido
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-content-3' );
		// Media
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-media-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-media-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-testimony-media-3' );

		// Colaboradores
		register_setting( 'javiergarval__general', 'javiergarval__content-supporter-1' );
		register_setting( 'javiergarval__general', 'javiergarval__content-supporter-2' );
		register_setting( 'javiergarval__general', 'javiergarval__content-supporter-3' );
		register_setting( 'javiergarval__general', 'javiergarval__content-supporter-4' );
		register_setting( 'javiergarval__general', 'javiergarval__content-supporter-5' );

		// FOOTER
		register_setting( 'javiergarval__general', 'javiergarval__footer-facebook' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-twitter' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-linkedin' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-youtube' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-vimeo' );

		register_setting( 'javiergarval__general', 'javiergarval__footer-copyright' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-address' );

		register_setting( 'javiergarval__general', 'javiergarval__footer-column-title-1' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-content-1' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-title-2' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-content-2' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-title-3' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-content-3' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-title-4' );
		register_setting( 'javiergarval__general', 'javiergarval__footer-column-content-4' );

		add_settings_section( 'javiergarval__theme-options', '', 'javiergarval__theme_options', 'javiergarval-admin-theme');

		/*
			ADDING FIELDS
			====================
		*/
		// MENÚ DE CONTACTO
		// Correo Electrónico
		add_settings_field( 'javiergarval-front-email', 'Correo electrónico', 'javiergarval_front_email', 'javiergarval-admin-theme', 'javiergarval__theme-options' );
		// Teléfono
		add_settings_field( 'javiergarval-front-phone', 'Teléfono de contacto', 'javiergarval_front_phone', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// MENÚ DE NAVEGACIÓN
		// Logo
		//add_settings_field( 'javiergarval-front-logo', 'Logos del menú', 'javiergarval_front_logo', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// PHASES
		add_settings_field( 'javiergarval-front-phases', 'Pasos beca', 'javiergarval_front_phases', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// ABOUT
		add_settings_field( 'javiergarval-front-about', 'Sobre javiergarval', 'javiergarval_front_about', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// CATEGORÍAS
		add_settings_field( 'javiergarval-front-category', 'Áreas Formativas', 'javiergarval_front_category', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// METODOLOGÍAS
		add_settings_field( 'javiergarval-front-metodology', 'Metodología', 'javiergarval_front_metodology', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// TESTIMONIOS
		add_settings_field( 'javiergarval-front-testimony', 'Testimonios de alumnos', 'javiergarval_front_testimony', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// COLABORADORES
		//add_settings_field( 'javiergarval-front-supporter', 'Colaboradores oficiales', 'javiergarval_front_supporter', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// FOOTER
		add_settings_field( 'javiergarval-footer', 'Footer', 'javiergarval_footer', 'javiergarval-admin-theme', 'javiergarval__theme-options' );

		// function javiergarval__header_options() {}
		// function javiergarval__content_options() {}
		// function javiergarval__footer_options() {}

		function javiergarval__theme_options() {}
		function javiergarval_front_email() {
			$email1 = esc_attr( get_option( 'javiergarval__header_email-1' ) );
      $data = array(
        'email1' => $email1,
      );
      json_encode(data);

			echo '<fieldset id="email_holder"></fieldset>';
			echo '
      <input id="email_field_" type="email" name="javiergarval__header_email-1" value="'.$email1.'" placeholder="Correo Electrónico" size="35"/>
      <button id="add_email" type="button" class="button button-secondary add_email" value="Añadir otro">
				<span class="dashicons dashicons-plus"></span>Añadir otro
      </button>';
		}

		function javiergarval_front_phone() {
			$phone1 = esc_attr( get_option( 'javiergarval__header_phone-1' ) );
			echo '<input id="phone-flag-spain" type="text" name="javiergarval__header_phone-1" value="'.$phone1.'" placeholder="Teléfono" /> ';
			$phone2 = esc_attr( get_option( 'javiergarval__header_phone-2' ) );
			echo '<input id="phone-flag-colombia" type="text" name="javiergarval__header_phone-2" value="'.$phone2.'" placeholder="Teléfono" /> ';
			$phone3 = esc_attr( get_option( 'javiergarval__header_phone-3' ) );
			echo '<input id="phone-flag-peru" type="text" name="javiergarval__header_phone-3" value="'.$phone3.'" placeholder="Teléfono" /> ';
			$phone4 = esc_attr( get_option( 'javiergarval__header_phone-4' ) );
			echo '<input id="phone-flag-whatsapp" type="text" name="javiergarval__header_phone-4" value="'.$phone4.'" placeholder="Teléfono" /> ';
			echo '<fieldset id="email_holder"></fieldset>';
			echo '<input type="text" name="javiergarval__header_phone-" value="" placeholder="Teléfono" size="35"/>';
			echo '<button id="add_email" type="button" class="button button-secondary add_email" value="Añadir otro">
				<span class="dashicons dashicons-plus-alt"></span>Añadir otro</button>';		}
		// function javiergarval_front_logo() {
		// 	$logo = esc_attr( get_option( 'javiergarval__header_logo-1' ) );
		// 		if( empty($logo) ){
		// 			echo '<button type="button" class="button button-secondary" value="Añadir logo" id="upload-button"><span class="dashicons dashicons-format-image"></span> Añadir logo</button><input type="hidden" id="logo" name="javiergarval__header_logo-1" value="" />
		// 						<div class="logo__preview-1"></div>';
		// 		} else {
		// 			echo '<div class="logo__preview-1"></div>
		// 						<button type="button" class="button button-secondary" value="Cambiar logo" id="upload-button"><span class="dashicons dashicons-format-image"></span> Cambiar logo</button><input type="hidden" id="logo" name="javiergarval__header_logo-1" value="'.$logo.'" /> <button type="button" class="button button-secondary" value="Quitar" id="remove-logo"><span class="dashicons dashicons-no"></span> Quitar</button>';
		// 	}
		// }
		function javiergarval_front_phases() {
			$phases_block_title_1 = esc_attr( get_option('javiergarval__content-phases-title-1') );
			$phases_block_title_2 = esc_attr( get_option('javiergarval__content-phases-title-2') );
			$phases_block_title_3 = esc_attr( get_option('javiergarval__content-phases-title-3') );
			$phases_block_title_4 = esc_attr( get_option('javiergarval__content-phases-title-4') );

			$phases_block_content_1 = esc_attr( get_option( 'javiergarval__content-phases-content-1' ) );
			$phases_block_content_2 = esc_attr( get_option( 'javiergarval__content-phases-content-2' ) );
			$phases_block_content_3 = esc_attr( get_option( 'javiergarval__content-phases-content-3' ) );
			$phases_block_content_4 = esc_attr( get_option( 'javiergarval__content-phases-content-4' ) );

			echo '
			<h3>Columna 1</h3>
			<input type="text" name="javiergarval__content-phases-title-1" value="'.$phases_block_title_1.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-phases-content-1" value="'.$phases_block_content_1.'" placeholder="Contenido" />
			<h3>Columna 2</h3>
			<input type="text" name="javiergarval__content-phases-title-2" value="'.$phases_block_title_2.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-phases-content-2" value="'.$phases_block_content_2.'" placeholder="Contenido" />
			<h3>Columna 3</h3>
			<input type="text" name="javiergarval__content-phases-title-3" value="'.$phases_block_title_3.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-phases-content-3" value="'.$phases_block_content_3.'" placeholder="Contenido" />
			<h3>Columna 4</h3>
			<input type="text" name="javiergarval__content-phases-title-4" value="'.$phases_block_title_4.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-phases-content-4" value="'.$phases_block_content_4.'" placeholder="Contenido" />';
		}
		function javiergarval_front_about() {
			$about_block_title_1 = esc_attr( get_option('javiergarval__content-about-title-1') );
			$about_block_title_2 = esc_attr( get_option('javiergarval__content-about-title-2') );
			$about_block_title_3 = esc_attr( get_option('javiergarval__content-about-title-3') );
			$about_block_title_4 = esc_attr( get_option('javiergarval__content-about-title-4') );
			$about_block_title_5 = esc_attr( get_option('javiergarval__content-about-title-5') );

			$about_block_content_1 = esc_attr( get_option( 'javiergarval__content-about-content-1' ) );
			$about_block_content_2 = esc_attr( get_option( 'javiergarval__content-about-content-2' ) );
			$about_block_content_3 = esc_attr( get_option( 'javiergarval__content-about-content-3' ) );
			$about_block_content_4 = esc_attr( get_option( 'javiergarval__content-about-content-4' ) );
			$about_block_content_5 = esc_attr( get_option( 'javiergarval__content-about-content-5' ) );
			// Imagen
			$about_block_image_1 = esc_attr( get_option( 'javiergarval__content-about-image-1' ) );
			$about_block_image_2 = esc_attr( get_option( 'javiergarval__content-about-image-2' ) );
			$about_block_image_3 = esc_attr( get_option( 'javiergarval__content-about-image-3' ) );
			$about_block_image_4 = esc_attr( get_option( 'javiergarval__content-about-image-4' ) );
			$about_block_image_5 = esc_attr( get_option( 'javiergarval__content-about-image-5' ) );

			echo '
			<h3>Columna 1</h3>
			<input type="text" name="javiergarval__content-about-title-1" value="'.$about_block_title_1.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-about-content-1" value="'.$about_block_content_1.'" placeholder="Contenido" />
			<input type="text" name="javiergarval__content-about-image-1" value="'.$about_block_image_1.'" placeholder="Imagen" />
			<h3>Columna 2</h3>
			<input type="text" name="javiergarval__content-about-title-2" value="'.$about_block_title_2.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-about-content-2" value="'.$about_block_content_2.'" placeholder="Contenido" />
			<input type="text" name="javiergarval__content-about-image-2" value="'.$about_block_image_2.'" placeholder="Imagen" />
			<h3>Columna 3</h3>
			<input type="text" name="javiergarval__content-about-title-3" value="'.$about_block_title_3.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-about-content-3" value="'.$about_block_content_3.'" placeholder="Contenido" />
			<input type="text" name="javiergarval__content-about-image-3" value="'.$about_block_image_3.'" placeholder="Imagen" />
			<h3>Columna 4</h3>
			<input type="text" name="javiergarval__content-about-title-4" value="'.$about_block_title_4.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-about-content-4" value="'.$about_block_content_4.'" placeholder="Contenido" />
			<input type="text" name="javiergarval__content-about-image-4" value="'.$about_block_image_4.'" placeholder="Imagen" />
			<h3>Columna 5</h3>
			<input type="text" name="javiergarval__content-about-title-5" value="'.$about_block_title_5.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-about-content-5" value="'.$about_block_content_5.'" placeholder="Contenido" />
			<input type="text" name="javiergarval__content-about-image-5" value="'.$about_block_image_5.'" placeholder="Imagen" />';
		}
		function javiergarval_front_category() {
			$category_block_title_1 = esc_attr( get_option( 'javiergarval__content-category-title-1' ) );
			$category_block_title_2 = esc_attr( get_option( 'javiergarval__content-category-title-2' ) );
			$category_block_title_3 = esc_attr( get_option( 'javiergarval__content-category-title-3' ) );
			$category_block_title_4 = esc_attr( get_option( 'javiergarval__content-category-title-4' ) );
			$category_block_title_5 = esc_attr( get_option( 'javiergarval__content-category-title-5' ) );

			$category_block_content_1 = esc_attr( get_option( 'javiergarval__content-category-content-1' ) );
			$category_block_content_2 = esc_attr( get_option( 'javiergarval__content-category-content-2' ) );
			$category_block_content_3 = esc_attr( get_option( 'javiergarval__content-category-content-3' ) );
			$category_block_content_4 = esc_attr( get_option( 'javiergarval__content-category-content-4' ) );
			$category_block_content_5 = esc_attr( get_option( 'javiergarval__content-category-content-5' ) );
			echo '
			<h3>Columna 1</h3>
			<input type="text" name="javiergarval__content-category-title-1" value="'.$category_block_title_1.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-category-content-1" value="'.$category_block_content_1.'" placeholder="Contenido" />
			<h3>Columna 2</h3>
			<input type="text" name="javiergarval__content-category-title-2" value="'.$category_block_title_2.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-category-content-2" value="'.$category_block_content_2.'" placeholder="Contenido" />
			<h3>Columna 3</h3>
			<input type="text" name="javiergarval__content-category-title-3" value="'.$category_block_title_3.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-category-content-3" value="'.$category_block_content_3.'" placeholder="Contenido" />
			<h3>Columna 4</h3>
			<input type="text" name="javiergarval__content-category-title-4" value="'.$category_block_title_4.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-category-content-4" value="'.$category_block_content_4.'" placeholder="Contenido" />
			<h3>Columna 5</h3>
			<input type="text" name="javiergarval__content-category-title-5" value="'.$category_block_title_5.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-category-content-5" value="'.$category_block_content_5.'" placeholder="Contenido" />';
		}
		function javiergarval_front_metodology() {
			$metodology_block_title_1 = esc_attr( get_option( 'javiergarval__content-metodology-title-1' ) );
			$metodology_block_title_2 = esc_attr( get_option( 'javiergarval__content-metodology-title-2' ) );
			$metodology_block_title_3 = esc_attr( get_option( 'javiergarval__content-metodology-title-3' ) );
			$metodology_block_title_4 = esc_attr( get_option( 'javiergarval__content-metodology-title-4' ) );
			$metodology_block_title_5 = esc_attr( get_option( 'javiergarval__content-metodology-title-5' ) );

			$metodology_block_content_1 = esc_attr( get_option( 'javiergarval__content-metodology-content-1' ) );
			$metodology_block_content_2 = esc_attr( get_option( 'javiergarval__content-metodology-content-2' ) );
			$metodology_block_content_3 = esc_attr( get_option( 'javiergarval__content-metodology-content-3' ) );
			$metodology_block_content_4 = esc_attr( get_option( 'javiergarval__content-metodology-content-4' ) );
			$metodology_block_content_5 = esc_attr( get_option( 'javiergarval__content-metodology-content-5' ) );
			echo '
			<h3>Columna 1</h3>
			<input type="text" name="javiergarval__content-metodology-title-1" value="'.$metodology_block_title_1.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-metodology-content-1" value="'.$metodology_block_content_1.'" placeholder="Contenido" />
			<h3>Columna 2</h3>
				<input type="text" name="javiergarval__content-metodology-title-2" value="'.$metodology_block_title_2.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-metodology-content-2" value="'.$metodology_block_content_2.'" placeholder="Contenido" />
			<h3>Columna 3</h3>
				<input type="text" name="javiergarval__content-metodology-title-3" value="'.$metodology_block_title_3.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-metodology-content-3" value="'.$metodology_block_content_3.'" placeholder="Contenido" />
			<h3>Columna 4</h3>
				<input type="text" name="javiergarval__content-metodology-title-4" value="'.$metodology_block_title_4.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-metodology-content-4" value="'.$metodology_block_content_4.'" placeholder="Contenido" />
			<h3>Columna 5</h3>
			<input type="text" name="javiergarval__content-metodology-title-5" value="'.$metodology_block_title_5.'" placeholder="Título" />
			<input type="text" name="javiergarval__content-metodology-content-5" value="'.$metodology_block_content_5.'" placeholder="Contenido" />';
		}
		function javiergarval_front_testimony() {
			$testimony_author_1 = esc_attr( get_option( 'javiergarval__content-testimony-author-1' ) );
			$testimony_author_2 = esc_attr( get_option( 'javiergarval__content-testimony-author-2' ) );
			$testimony_author_3 = esc_attr( get_option( 'javiergarval__content-testimony-author-3' ) );

			$testimony_content_1 = esc_attr( get_option( 'javiergarval__content-testimony-content-1' ) );
			$testimony_content_2 = esc_attr( get_option( 'javiergarval__content-testimony-content-2' ) );
			$testimony_content_3 = esc_attr( get_option( 'javiergarval__content-testimony-content-3' ) );

			$testimony_media_1 = esc_attr( get_option( 'javiergarval__content-testimony-media-1' ) );
			$testimony_media_2 = esc_attr( get_option( 'javiergarval__content-testimony-media-2' ) );
			$testimony_media_3 = esc_attr( get_option( 'javiergarval__content-testimony-media-3' ) );
			echo '
		<h3>Testimonio 1</h3>
		<input type="text" name="javiergarval__content-testimony-author-1" value="'.$testimony_author_1.'" placeholder="Autor" />
		<input type="text" name="javiergarval__content-testimony-content-1" value="'.$testimony_content_1.'" placeholder="Contenido" />
		<input type="text" name="javiergarval__content-testimony-media-1" value="'.$testimony_media_1.'" placeholder="Vídeo" />
		<h3>Testimonio 2</h3>
		<input type="text" name="javiergarval__content-testimony-author-2" value="'.$testimony_author_2.'" placeholder="Autor" />
		<input type="text" name="javiergarval__content-testimony-content-2" value="'.$testimony_content_2.'" placeholder="Contenido" />
		<input type="text" name="javiergarval__content-testimony-media-2" value="'.$testimony_media_2.'" placeholder="Vídeo" />
		<h3>Testimonio 3</h3>
		<input type="text" name="javiergarval__content-testimony-author-3" value="'.$testimony_author_3.'" placeholder="Autor" />
		<input type="text" name="javiergarval__content-testimony-content-3" value="'.$testimony_content_3.'" placeholder="Contenido" />
		<input type="text" name="javiergarval__content-testimony-media-3" value="'.$testimony_media_3.'" placeholder="Vídeo" />';
		}
		/* TODO: Arreglar para que abra el mediauploader */
		// function javiergarval_front_supporter() {
		// 	$logo = esc_attr( get_option( 'javiergarval__content-supporter-1' ) );
		// 		if( empty($logo) ){
		// 			echo '<button type="button" class="button button-secondary" value="Añadir imagen" id="upload-button"><span class="dashicons dashicons-format-image"></span> Añadir imagen</button><input type="hidden" id="logo" name="javiergarval__content-supporter-1" value="" />';
		// 		} else {
		// 			echo '<button type="button" class="button button-secondary" value="Cambiar imagen" id="upload-button"><span class="dashicons dashicons-format-image"></span> Quitar imagen</button><input type="hidden" id="logo" name="javiergarval__content-supporter-1" value="'.$logo.'" /> <button type="button" class="button button-secondary" value="Quitar imagen" id="remove-logo"><span class="dashicons dashicons-no"></span> Quitar imagen</button>';
		// 	}
		// }
		function javiergarval_footer() {}
	}
}

/*
	USERS SUBMENU
	========================================
*/
function javiergarval__users() {}

/*
  PRODUCTS SUBMENU
  ========================================
*/
function javiergarval__products() {
  // PEDIDOS
  register_setting('javiergarval__products', 'pedidos');
  register_setting('javiergarval__products', 'p_master');
  register_setting('javiergarval__products', 'p_precio');
  register_setting('javiergarval__products', 'p_estado');
  register_setting('javiergarval__products', 'p_nombre');
  register_setting('javiergarval__products', 'p_apellidos');
  register_setting('javiergarval__products', 'p_telefono');
  register_setting('javiergarval__products', 'p_email');
  register_setting('javiergarval__products', 'p_pais');
  register_setting('javiergarval__products', 'p_titulacion');
  register_setting('javiergarval__products', 'p_situacion_laboral');
  register_setting('javiergarval__products', 'p_comentario');
  add_settings_section('javiergarval__products_section', '');

  // CUPONES
  register_setting('javiergarval__products', 'cupones');
  // ESTADISTICAS
  register_setting('javiergarval__products', 'estadisticas');
  add_settings_section();
  add_settings_field();
}

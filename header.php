<?php
/*
====================
HEADER FRONT
====================
@package javiergarval-theme
*/

$url = 'http://www.javiergarval.com/wordpress';

// Obtenemos qué zonas se han activado para mostrarse en el panel de administración de javiergarval.
$javiergarval__general_contact = esc_attr( get_option( 'javiergarval__general-contact' ) );
$javiergarval__general_navigation = esc_attr( get_option( 'javiergarval__general-navigation' ) );

// HEADER
// Menú de contacto
// eMail
$javiergarval__header_email_1 = esc_attr( get_option( 'javiergarval__header_email-1' ) );
$javiergarval__header_email_2 = esc_attr( get_option( 'javiergarval__header_email-2' ) );
$javiergarval__header_email_3 = esc_attr( get_option( 'javiergarval__header_email-3' ) );
// Teléfonos
$javiergarval__header_phone_1 = esc_attr( get_option( 'javiergarval__header_phone-1' ) );
$javiergarval__header_phone_2 = esc_attr( get_option( 'javiergarval__header_phone-2' ) );
$javiergarval__header_phone_3 = esc_attr( get_option( 'javiergarval__header_phone-3' ) );
$javiergarval__header_phone_4 = esc_attr( get_option( 'javiergarval__header_phone-4' ) );
// Menú de navegación
// Logos
$javiergarval__header_logo = esc_attr( get_template_directory_uri() . 'images/header-logo.png' );
$javiergarval__header_logo_2 = esc_attr( get_template_directory_uri() . 'images/logos/logo-becas-oea.png' );
$javiergarval__header_logo_3 = esc_attr( get_template_directory_uri() . 'images/logos/logo-universidad-uno.png' );
$javiergarval__header_logo_4 = esc_attr( get_template_directory_uri() . 'images/logos/logo-universidad-dos.png' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/style.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500" rel="stylesheet">
	</head>

<body style="font-family: 'Roboto', sans-serif; font-weight: 200; font-size: 15px;" <?php body_class(); ?>>
<!--
Menú Contacto
=================================================
-->
<?php if ($javiergarval__general_contact) { ?>
<div class="container-fluid header-menu-contact-container">
		<div class="row text-center">
			<div class="col-xs-5 navbar-left text-left">
                <a href="<?php echo 'http://'.$javiergarval__header_email_2; ?>" style="color: white; margin-right: 10px; "><?php echo $javiergarval__header_email_2; ?></a>
                <a class="contact__mail" href="mailto:<?php print $javiergarval__header_email_1; ?>?subject=Contacto"><?php print $javiergarval__header_email_1; ?></a>
				<a class="contact__mail" href="mailto:<?php print $javiergarval__header_email_3; ?>?subject=Contacto"><?php print $javiergarval__header_email_3; ?></a>
			</div>
			<div class="col-xs-7 navbar-right text-right">
				<img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/icons/whatsapp-icon.svg" alt="Icono de WhatsApp" height="15px" width="20px"/><?php print $javiergarval__header_phone_4; ?>
				<img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/es-flag.png" alt="Bandera de España" height="10px" width="15px"/><?php print $javiergarval__header_phone_1; ?>
				<img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/co-flag.png" alt="Bandera de Colombia" height="10px" width="15px"/><?php print $javiergarval__header_phone_2; ?>
				<img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/pe-flag.png" alt="Bandera de Perú" height="10px" width="15px"/><?php print $javiergarval__header_phone_3; ?>
			</div>
		</div><!-- /.row -->
</div><!-- /.container-fluid -->
<?php } ?>

<!--
Menú Navegación
==================================================
-->
<?php if ($javiergarval__general_navigation) { ?>
  <nav class="navbar" style="height: 70px; width: 100%; margin: 0; ">
    <div class="container-fluid sticky" style="height: 70px; width: 100%; ">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#javiergarval-navigation-menu" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
  	      <a class="navbar-brand" href="<?php echo $url; ?>" style="height: 70px;"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-nav" id="javiergarval-navigation-menu" style="overflow: scroll; right: 0px; margin: 0px; max-height: 100vh;">
        <?php
		wp_nav_menu( array(
			'theme_location'	=> 'menu-principal',
			'container'			=> 'ul',
			'menu_class'		=> 'nav navbar-nav'
		) );
  		?>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav><!-- /.navbar -->
<?php } ?>

<?php
/*
====================
FOOTER
====================
@package javiergarval-theme
*/

$url = 'http://www.javiergarval-oea.com/wordpress';

// Obtenemos datos del panel de administración de WordPress.
// Teléfonos
$phone_spain 		= esc_attr( get_option( 'javiergarval__header_phone-1' ) );
$phone_colombia 	= esc_attr( get_option( 'javiergarval__header_phone-2' ) );
$phone_peru 		= esc_attr( get_option( 'javiergarval__header_phone-3' ) );
$phone_whatsapp 	= esc_attr( get_option( 'javiergarval__header_phone-4' ) );
// Redes Sociales
$facebookHandler 	= esc_attr( get_option( 'footer-facebook' ) );
$twitterHandler 	= esc_attr( get_option( 'footer-twitter' ) );
$linkedinHandler	= esc_attr( get_option( 'footer-linkedin' ) );
$youtubeHandler		= esc_attr( get_option( 'footer-youtube' ) );
$vimeoHandler 		= esc_attr( get_option( 'footer-vimeo' ) );
// Datos Footer
$copyrightjaviergarval 	= esc_attr( get_option( 'footer-copyright' ) );
$direccionjaviergarval 	= esc_attr( get_option( 'footer-address' ) );

// Banner de Cookies y Privacidad.
// Si la cookie 'disclaimer' no está creada, mostramos el banner.
if (!isset($_COOKIE["disclaimer"])) { ?>
	<div id="cookies" class="container-fluid">
	  <div class="col-xs-1 text-center">
	    <div class="cookies-star">*</div>
	  </div>
	  <div class="col-xs-10">
	    <p class="cookies-p"></p>
	  </div>
	  <div class="col-xs-1 text-center">
	    <span id="close-cookies" class="cookies-x">x</span>
	  </div>
	</div>
<?php } ?>

<div class="clearfix"></div>

<!-- Botón subir -->
<div class="up-button">
	<a href="#"><span class="dashicons dashicons-arrow-up-alt"></span></a>
</div>

<!-- Footer -->
<div class="container-fluid footer-container-fluid">
	<div class="container footer-container">
		<div class="row footer__row text-left">
			<!-- COLUMNA 1 -->
			<div class="col-md-3 col-xs-12">
				<img src="<?php bloginfo('template_url'); ?>/images/footer/javiergarval-blanco-icon.png" alt="javiergarval escuela técnica"/>
				<p>

				</p>
			</div>

			<!-- COLUMNA 2 -->
			<div class="col-md-3 col-xs-12 text-left margin-column" style="padding-left: 0px;">
				<ul class="footer-list" style="padding-left: 0px;">
					<a href="<?php echo $url.'/privacidad';?>"><li>Condiciones generales y política de privacidad</li></a>
					<a href="<?php echo $url.'/cookies';?>"><li>Política de cookies</li></a>
					<a href="<?php echo $url.'/venta';?>" style="display: none;"><li>Términos y condiciones de venta online</li></a>
					<a href="<?php echo $url.'/faq';?>"><li>FAQ</li></a>
				</ul>
			</div>

			<!-- COLUMNA 3 -->
			<div class="col-md-3 col-xs-12 text-left margin-column">
				<ul class="footer-list" style="padding-left: 0px;">
					<a href="https://www.facebook.com/javiergarval-Escuela-abierta-de-desarrollo-de-ingenier%C3%ADa-y-construcci%C3%B3n-132548423444262/"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/facebook.svg" alt="Facebook javiergarval-EOA" height="20px" width="20px"/></span>Facebook</li></a>
					<a href="https://twitter.com/javiergarval"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/twitter.svg" alt="Twitterº javiergarval-EOA" height="20px" width="20px"/></span>Twitter</li></a>
					<a href="https://www.linkedin.com/groups/3770421/profile"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/linkedin.svg" alt="LinkedIn javiergarval-EOA" height="20px" width="20px"/></span>LinkedIn</li></a>
					<a href="https://www.youtube.com/user/javiergarval"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/youtube.svg" alt="YouTube javiergarval-EOA" height="20px" width="20px"/></span>YouTube</li></a>
					<a href="https://vimeo.com/javiergarval"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/vimeo.svg" alt="Vimeo javiergarval-EOA" height="20px" width="20px"/></span>Vimeo</li></a>
				</ul>
			</div>

			<!-- COLUMNA 4 -->
			<div class="col-md-3 col-xs-12 text-left margin-column">
				<!-- Newsletter subscription -->
				<h3 style="margin-top: 0px;">Suscripción</h3>
				<input class="form-control" type="email" id="boletin" name="boletin" value="" placeholder="Email">
				<!-- Contact -->
				<ul class="footer-list text-left" style="padding-left: 0px;">
					<li><span></span>Calle Miguel Yuste 16 - 5D</li>
					<li><span></span>Madrid - 28037</li>
					<li><span><img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/icons/whatsapp-icon.svg" alt="Icono de WhatsApp" height="15px" width="20px"/></span><?php echo $phone_whatsapp; ?></li>
					<li><span><img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/es-flag.png" alt="Bandera de España" height="10px" width="15px"/></span><?php echo $phone_spain; ?></li>
					<li><span><img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/co-flag.png" alt="Bandera de Colombia" height="10px" width="15px"/></span><?php echo $phone_colombia; ?></li>
					<li><span><img class="navbar-right-flag" src="<?php bloginfo('template_url'); ?>/images/flags/pe-flag.png" alt="Bandera de Perú" height="10px" width="15px"/></span><?php echo $phone_peru; ?></li>
				</ul>
			</div>

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.container-fluid -->

<?php wp_footer(); ?>
<div class="clearfix"></div>

</body>
</html>

<?php
/*
====================
FOOTER
====================
@package eadic-theme
*/

$url = 'http://www.eadic-oea.com/wordpress';

// Obtenemos datos del panel de administración de WordPress.
// Teléfonos
$phone_spain 		= esc_attr( get_option( 'eadic__header_phone-1' ) );
$phone_colombia 	= esc_attr( get_option( 'eadic__header_phone-2' ) );
$phone_peru 		= esc_attr( get_option( 'eadic__header_phone-3' ) );
$phone_whatsapp 	= esc_attr( get_option( 'eadic__header_phone-4' ) );
// Redes Sociales
$facebookHandler 	= esc_attr( get_option( 'footer-facebook' ) );
$twitterHandler 	= esc_attr( get_option( 'footer-twitter' ) );
$linkedinHandler	= esc_attr( get_option( 'footer-linkedin' ) );
$youtubeHandler		= esc_attr( get_option( 'footer-youtube' ) );
$vimeoHandler 		= esc_attr( get_option( 'footer-vimeo' ) );
// Datos Footer
$copyrightEadic 	= esc_attr( get_option( 'footer-copyright' ) );
$direccionEadic 	= esc_attr( get_option( 'footer-address' ) );

// Banner de Cookies y Privacidad.
// Si la cookie 'disclaimer' no está creada, mostramos el banner.
if (!isset($_COOKIE["disclaimer"])) { ?>
	<div id="cookies" class="container-fluid">
	  <div class="col-xs-1 text-center">
	    <div class="cookies-star">*</div>
	  </div>
	  <div class="col-xs-10">
	    <p class="cookies-p">Utilizamos cookies para mejorar la experiencia de usuario en nuestra página. Puedes obtener más información en nuestra <a href="./privacidad">política de privacidad</a> y <a href="./cookies">cookies</a>. Si continúas visitando esta página, estarás de acuerdo en que usemos cookies. Gracias.</p>
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
				<img src="<?php bloginfo('template_url'); ?>/images/footer/eadic-blanco-icon.png" alt="eadic escuela técnica"/>
				<p>
					EADIC-OEA es un proyecto de EADIC.
					2016 copyright EADIC. Todos los derechos reservados.
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
					<a href="https://www.facebook.com/EADIC-Escuela-abierta-de-desarrollo-de-ingenier%C3%ADa-y-construcci%C3%B3n-132548423444262/"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/facebook.svg" alt="Facebook EADIC-EOA" height="20px" width="20px"/></span>Facebook</li></a>
					<a href="https://twitter.com/eadic"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/twitter.svg" alt="Twitterº EADIC-EOA" height="20px" width="20px"/></span>Twitter</li></a>
					<a href="https://www.linkedin.com/groups/3770421/profile"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/linkedin.svg" alt="LinkedIn EADIC-EOA" height="20px" width="20px"/></span>LinkedIn</li></a>
					<a href="https://www.youtube.com/user/eadic"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/youtube.svg" alt="YouTube EADIC-EOA" height="20px" width="20px"/></span>YouTube</li></a>
					<a href="https://vimeo.com/eadic"><li><span class="footer-list-icon"><img src="<?php bloginfo('template_url'); ?>/images/footer/vimeo.svg" alt="Vimeo EADIC-EOA" height="20px" width="20px"/></span>Vimeo</li></a>
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

<!-- Botón llamame. -->
<div class="botoncallme">
	<script id="c2c-button" src="//apps.netelip.com/clicktocall/api/js/c2c.js?btnid=2236&atk=41d9628e3b0f3888471f4f4697b656ca" type="text/javascript">
	</script>
</div>
</body>
</html>

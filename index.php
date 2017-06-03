<?php
/*
====================
INDEX
====================
@package javiergarval-theme
*/

$url = 'http://www.javiergarval.com/wordpress';

// TODO: Reemplazar por arrays y hacer foreach
// Obtenemos qué zonas se han activado para mostrarse en el panel de administración de javiergarval.
$javiergarval__general_banner = esc_attr( get_option( 'javiergarval__general-banner' ) );
$javiergarval__general_phases = esc_attr( get_option( 'javiergarval__general-phases' ) );
$javiergarval__general_about = esc_attr( get_option( 'javiergarval__general-about' ) );
$javiergarval__general_category = esc_attr( get_option( 'javiergarval__general-category' ) );
$javiergarval__general_metodology = esc_attr( get_option( 'javiergarval__general-metodology' ) );
$javiergarval__general_testimony = esc_attr( get_option( 'javiergarval__general-testimony' ) );
$javiergarval__general_supporter = esc_attr( get_option( 'javiergarval__general-supporter' ) );

// CONTENT
// Phases
// Título
$javiergarval__content_phases_title_1 = esc_attr( get_option( 'javiergarval__content-phases-title-1' ) );
$javiergarval__content_phases_title_2 = esc_attr( get_option( 'javiergarval__content-phases-title-2' ) );
$javiergarval__content_phases_title_3 = esc_attr( get_option( 'javiergarval__content-phases-title-3' ) );
$javiergarval__content_phases_title_4 = esc_attr( get_option( 'javiergarval__content-phases-title-4' ) );
$javiergarval__content_phases_title_5 = esc_attr( get_option( 'javiergarval__content-phases-title-5' ) );
// Contenido
$javiergarval__content_phases_content_1 = esc_attr( get_option( 'javiergarval__content-phases-content-1' ) );
$javiergarval__content_phases_content_2 = esc_attr( get_option( 'javiergarval__content-phases-content-2' ) );
$javiergarval__content_phases_content_3 = esc_attr( get_option( 'javiergarval__content-phases-content-3' ) );
$javiergarval__content_phases_content_4 = esc_attr( get_option( 'javiergarval__content-phases-content-4' ) );
$javiergarval__content_phases_content_5 = esc_attr( get_option( 'javiergarval__content-phases-content-5' ) );

// About Us
// Título
$javiergarval__content_about_title_1 = esc_attr( get_option( 'javiergarval__content-about-title-1' ) );
$javiergarval__content_about_title_2 = esc_attr( get_option( 'javiergarval__content-about-title-2' ) );
$javiergarval__content_about_title_3 = esc_attr( get_option( 'javiergarval__content-about-title-3' ) );
$javiergarval__content_about_title_4 = esc_attr( get_option( 'javiergarval__content-about-title-4' ) );
$javiergarval__content_about_title_5 = esc_attr( get_option( 'javiergarval__content-about-title-5' ) );
// Contenido
$javiergarval__content_about_content_1 = esc_attr( get_option( 'javiergarval__content-about-content-1' ) );
$javiergarval__content_about_content_2 = esc_attr( get_option( 'javiergarval__content-about-content-2' ) );
$javiergarval__content_about_content_3 = esc_attr( get_option( 'javiergarval__content-about-content-3' ) );
$javiergarval__content_about_content_4 = esc_attr( get_option( 'javiergarval__content-about-content-4' ) );
$javiergarval__content_about_content_5 = esc_attr( get_option( 'javiergarval__content-about-content-5' ) );
// Contenido
$javiergarval__content_about_image_1 = esc_attr( get_option( 'javiergarval__content-about-image-1' ) );
$javiergarval__content_about_image_2 = esc_attr( get_option( 'javiergarval__content-about-image-2' ) );
$javiergarval__content_about_image_3 = esc_attr( get_option( 'javiergarval__content-about-image-3' ) );
$javiergarval__content_about_image_4 = esc_attr( get_option( 'javiergarval__content-about-image-4' ) );
$javiergarval__content_about_image_5 = esc_attr( get_option( 'javiergarval__content-about-image-5' ) );

// Categorías
// Título
$javiergarval__content_category_title_1 = esc_attr( get_option( 'javiergarval__content-category-title-1' ) );
$javiergarval__content_category_title_2 = esc_attr( get_option( 'javiergarval__content-category-title-2' ) );
$javiergarval__content_category_title_3 = esc_attr( get_option( 'javiergarval__content-category-title-3' ) );
$javiergarval__content_category_title_4 = esc_attr( get_option( 'javiergarval__content-category-title-4' ) );
$javiergarval__content_category_title_5 = esc_attr( get_option( 'javiergarval__content-category-title-5' ) );
// Contenido
$javiergarval__content_category_content_1 = esc_attr( get_option( 'javiergarval__content-category-content-1' ) );
$javiergarval__content_category_content_2 = esc_attr( get_option( 'javiergarval__content-category-content-2' ) );
$javiergarval__content_category_content_3 = esc_attr( get_option( 'javiergarval__content-category-content-3' ) );
$javiergarval__content_category_content_4 = esc_attr( get_option( 'javiergarval__content-category-content-4' ) );
$javiergarval__content_category_content_5 = esc_attr( get_option( 'javiergarval__content-category-content-5' ) );

// Metdología
// Título
$javiergarval__content_metodology_title_1 = esc_attr( get_option( 'javiergarval__content-metodology-title-1' ) );
$javiergarval__content_metodology_title_2 = esc_attr( get_option( 'javiergarval__content-metodology-title-2' ) );
$javiergarval__content_metodology_title_3 = esc_attr( get_option( 'javiergarval__content-metodology-title-3' ) );
$javiergarval__content_metodology_title_4 = esc_attr( get_option( 'javiergarval__content-metodology-title-4' ) );
$javiergarval__content_metodology_title_5 = esc_attr( get_option( 'javiergarval__content-metodology-title-5' ) );
// Contenido
$javiergarval__content_metodology_content_1 = esc_attr( get_option( 'javiergarval__content-metodology-content-1' ) );
$javiergarval__content_metodology_content_2 = esc_attr( get_option( 'javiergarval__content-metodology-content-2' ) );
$javiergarval__content_metodology_content_3 = esc_attr( get_option( 'javiergarval__content-metodology-content-3' ) );
$javiergarval__content_metodology_content_4 = esc_attr( get_option( 'javiergarval__content-metodology-content-4' ) );
$javiergarval__content_metodology_content_5 = esc_attr( get_option( 'javiergarval__content-metodology-content-5' ) );

// Testimonios
// Autor
$javiergarval__content_testimony_author_1 = esc_attr( get_option( 'javiergarval__content-testimony-author-1' ) );
$javiergarval__content_testimony_author_2 = esc_attr( get_option( 'javiergarval__content-testimony-author-2' ) );
$javiergarval__content_testimony_author_3 = esc_attr( get_option( 'javiergarval__content-testimony-author-3' ) );
// Contenido
$javiergarval__content_testimony_content_1 = esc_attr( get_option( 'javiergarval__content-testimony-content-1' ) );
$javiergarval__content_testimony_content_2 = esc_attr( get_option( 'javiergarval__content-testimony-content-2' ) );
$javiergarval__content_testimony_content_3 = esc_attr( get_option( 'javiergarval__content-testimony-content-3' ) );
// Media
$javiergarval__content_testimony_media_1 = esc_attr( get_option( 'javiergarval__content-testimony-media-1' ) );
$javiergarval__content_testimony_media_2 = esc_attr( get_option( 'javiergarval__content-testimony-media-2' ) );
$javiergarval__content_testimony_media_3 = esc_attr( get_option( 'javiergarval__content-testimony-media-3' ) );

// Colaboradores
$javiergarval__content_supporter_1 = esc_attr( get_option( 'javiergarval__content-supporter-1' ) );
$javiergarval__content_supporter_2 = esc_attr( get_option( 'javiergarval__content-supporter-2' ) );
$javiergarval__content_supporter_3 = esc_attr( get_option( 'javiergarval__content-supporter-3' ) );
$javiergarval__content_supporter_4 = esc_attr( get_option( 'javiergarval__content-supporter-4' ) );
$javiergarval__content_supporter_5 = esc_attr( get_option( 'javiergarval__content-supporter-5' ) );

// FOOTER
$javiergarval__footer_facebook = esc_attr( get_option( 'javiergarval__footer-facebook' ) );
$javiergarval__footer_twitter = esc_attr( get_option( 'javiergarval__footer-twitter' ) );
$javiergarval__footer_linkedin = esc_attr( get_option( 'javiergarval__footer-linkedin' ) );
$javiergarval__footer_youtube = esc_attr( get_option( 'javiergarval__footer-youtube' ) );
$javiergarval__footer_vimeo = esc_attr( get_option( 'javiergarval__footer-vimeo' ) );

$javiergarval__footer_copyright = esc_attr( get_option( 'javiergarval__footer-copyright' ) );
$javiergarval__footer_address = esc_attr( get_option( 'javiergarval__footer-address' ) );

$javiergarval__footer_column_title_1 = esc_attr( get_option( 'javiergarval__footer-column-title-1' ) );
$javiergarval__footer_column_content_1 = esc_attr( get_option( 'javiergarval__footer-column-content-1' ) );
$javiergarval__footer_column_title_2 = esc_attr( get_option( 'javiergarval__footer-column-title-2' ) );
$javiergarval__footer_column_content_2 = esc_attr( get_option( 'javiergarval__footer-column-content-2' ) );
$javiergarval__footer_column_title_3 = esc_attr( get_option( 'javiergarval__footer-column-title-3' ) );
$javiergarval__footer_column_content_3 = esc_attr( get_option( 'javiergarval__footer-column-content-3' ) );
$javiergarval__footer_column_title_4 = esc_attr( get_option( 'javiergarval__footer-column-title-4' ) );
$javiergarval__footer_column_content_4 = esc_attr( get_option( 'javiergarval__footer-column-content-4' ) );

get_header(); ?>

<!-- Banner imagen cabecera + Panel de Contacta con Nosotros -->
<div class="container-fluid content__banner">
		<div class="row text-center">
			<div class="col-md-9 col-xs-8">

			</div>
			<div class="col-xs-4 col-md-3 header-banner-right-column text-left" style="background-color: inherit;">
				<?php get_sidebar(); ?>
			</div><!-- /.header-banner-right-column -->
		</div><!-- /.row -->
</div><!-- /.content__banner -->

<!-- En pantallas pequeñas mostrar el Panel de Contacta con Nosotros abajo -->
<div class="container display-on-mobile" style="margin-top:20px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title text-center">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Formulario de Contacto
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body" style=" padding:20px;"c>
							<?php get_sidebar('front'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<!--
Scholarship Phases
========================================
-->
<!-- Título Fases Beca -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="about__title text-center">Cómo Aplicar a la Beca</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div>
<!-- Contenido -->
<div class="container-fluid content-about-container">
	<div class="container">
		<div class="row text-center">

			<div class="col-md-3 content-about-container-column">
				<a href="<?php echo $url.'/preinscripcion' ?>" target="_blank">
					<div class="thumbnail about__thumbnail">
						<div class="img-circle about__img-circle">
							<p>1</p>
						</div><!-- /about__img-circle -->

						<div class="caption">
							<h3><?php print $javiergarval__content_phases_title_1; ?></h3>
							<p style="font-size:18px;font-family: 'Roboto', sans-serif;font-weight: 400;"><?php print $javiergarval__content_phases_content_1; ?></p>
						</div>

					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 1 -->

			<div class="col-md-3 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<div class="img-circle about__img-circle"><p>2</p></div><!-- /about__img-circle -->

						<div class="caption">

							<h3><?php print $javiergarval__content_phases_title_2; ?></h3>
							<p style="font-size:18px;font-family: 'Roboto', sans-serif;font-weight: 400;"><?php print $javiergarval__content_phases_content_2; ?></p>
						</div>

					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 2 -->

			<div class="col-md-3 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<div class="img-circle about__img-circle"><p>3</p></div><!-- /about__img-circle -->

						<div class="caption">

							<h3><?php print $javiergarval__content_phases_title_3; ?></h3>
							<p style="font-size:18px;font-family: 'Roboto', sans-serif;font-weight: 400;"><?php print $javiergarval__content_phases_content_3; ?></p>
						</div>

					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 3 -->

			<div class="col-md-3 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<div class="img-circle about__img-circle"><p>4</p></div><!-- /about__img-circle -->

						<div class="caption">

							<h3><?php print $javiergarval__content_phases_title_4; ?></h3>
							<p style="font-size:18px;font-family: 'Roboto', sans-serif;font-weight: 400;"><?php print $javiergarval__content_phases_content_4; ?></p>
						</div>

					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 4 -->

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /content-about-container -->

<div class="clearfix"></div>

<!--
Admission Form Button
========================================
-->
<div class="container content-form-container text-center">
	<a class="btn btn-primary btn-lg" href="http://www.javiergarval-oea.com/preinscripcion-oea/index.html" target="_blank" role="button">Formulario de Solicitud de Admisión</a>
</div><!-- /content-form-container -->

<div class="clearfix"></div>

<!--
About javiergarval
========================================
-->
<!-- Título Sobre javiergarval -->
<?php if ($javiergarval__general_about) { ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="about__title text-center">¿Por qué tu Maestría en javiergarval?</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div>
<!-- Contenido -->
<div class="container-fluid content-about-container">
	<div class="container-fluid">
		<div class="row text-center">

			<!-- Columna 1 -->
			<div class="col-md-2 col-md-offset-1 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<img src="<?php print get_template_directory_uri().'/images/about/about-javiergarval-1.svg' ?>" alt="" style="height: 200px" />
						<div class="caption">

							<p class="about__thumbnail-content"><?php print $javiergarval__content_about_content_1; ?></p>
						</div>
					</div><!-- /.about__thumbnail -->
				</a>
			</div><!-- /.content-about-container-column Bloque 1 -->

			<!-- Columna 2 -->
			<div class="col-md-2 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<img src="<?php print get_template_directory_uri().'/images/about/about-javiergarval-2.svg' ?>" alt="" style="height: 200px" />
						<div class="caption">

							<p class="about__thumbnail-content"><?php print $javiergarval__content_about_content_2; ?></p>
						</div>
					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 2 -->

			<!-- Columna 3 -->
			<div class="col-md-2 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<img src="<?php print get_template_directory_uri().'/images/about/about-javiergarval-3.svg' ?>" alt="" style="height: 200px" />
						<div class="caption">

							<p class="about__thumbnail-content"><?php print $javiergarval__content_about_content_3; ?></p>
						</div>
					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 3 -->

			<!-- Columna 4 -->
			<div class="col-md-2 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<img src="<?php print get_template_directory_uri().'/images/about/about-javiergarval-4.svg' ?>" alt="" style="height: 200px" />
						<div class="caption">

							<p class="about__thumbnail-content"><?php print $javiergarval__content_about_content_4; ?></p>
						</div>
					</div><!-- /about__thumbnail -->
				</a>
			</div><!-- /content-about-container-column Bloque 4 -->

			<!-- Columna 5 -->
			<div class="col-md-2 content-about-container-column">

					<div class="thumbnail about__thumbnail">
						<img src="<?php print get_template_directory_uri().'/images/about/about-javiergarval-5.svg' ?>" alt="" style="height: 200px" />
						<div class="caption">

							<p class="about__thumbnail-content"><?php print $javiergarval__content_about_content_5; ?></p>
						</div>
					</div><!-- /.about__thumbnail -->
				</a>
			</div><!-- /.content-about-container-column Bloque 5 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.content-about-container -->
<?php } ?>

<div class="clearfix"></div>

<!--
Categories
========================================
-->
<?php if ($javiergarval__general_category) { ?>
<!-- Título Áreas Formativas -->
<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="category__title text-center">Áreas Formativas</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div> -->
<!-- Contenido -->
<div class="container-fluid content-category-container">
	<div class="row text-center">
		<!-- Título -->
		<div class="col-md-12">
			<h2 class="category__title text-center">Áreas Formativas</h2>
		</div>

		<!-- Ingeniería Civil e Infraestructuras -->
		<div class="col-md-2 col-md-offset-1 content-category-container-column">
			<a class="a-margin-top" href="<?php echo $url.'/maestrias/#area-ingenieria-civil-e-infraestructuras'; ?>">
				<div class="thumbnail category__thumbnail">
					<div class="img-circle category__img-circle">
						<img src="<?php print get_template_directory_uri().'/images/icons/ingenieria-civil-e-infraestructuras.svg' ?>" alt="" />
					</div><!-- /category__img-circle -->
					<div class="caption">
						<h3><?php print $javiergarval__content_category_title_1; ?></h3>
					</div>
				</div><!-- /category__thumbnail -->
			</a>
		</div><!-- /content-category-container-column Bloque 1 -->

		<!-- Arquitectura y Edificación -->
		<div class="col-md-2 content-category-container-column">
			<a class="a-margin-top" href="<?php echo $url.'/maestrias/#area-arquitectura-y-edificacion'; ?>">
				<div class="thumbnail category__thumbnail">
					<div class="img-circle category__img-circle">
						<img src="<?php print get_template_directory_uri().'/images/icons/arquitectura-y-edificacion.svg' ?>" alt="" />
					</div><!-- /category__img-circle -->
					<div class="caption">
						<h3><?php print $javiergarval__content_category_title_2; ?></h3>
					</div>
				</div><!-- /category__thumbnail -->
			</a>
		</div><!-- /content-category-container-column Bloque 2 -->

		<!-- Gestión de Proyectos e Infraestructuras -->
		<div class="col-md-2 content-category-container-column">
			<a class="a-margin-top" href="<?php echo $url.'/maestrias/#area-gestion-de-proyectos-e-infraestructuras'; ?>">
				<div class="thumbnail category__thumbnail">
					<div class="img-circle category__img-circle">
						<img src="<?php print get_template_directory_uri().'/images/icons/gestion-proyectos-e-infraestructuras.svg' ?>" alt="" />
					</div><!-- /category__img-circle -->
					<div class="caption">
						<h3><?php print $javiergarval__content_category_title_3; ?></h3>
					</div>
				</div><!-- /category__thumbnail -->
			</a>
		</div><!-- /content-category-container-column Bloque 3 -->

		<!-- Agua, Energía y Medio Ambiente -->
		<div class="col-md-2 content-category-container-column">
			<a class="a-margin-top" href="<?php echo $url.'/maestrias/#area-agua-energia-y-medio-ambiente'; ?>">
				<div class="thumbnail category__thumbnail">
					<div class="img-circle category__img-circle">
						<img src="<?php print get_template_directory_uri().'/images/icons/agua-energia-y-medio-ambiente.svg' ?>" alt="" />
					</div><!-- /category__img-circle -->
					<div class="caption">
						<h3><?php print $javiergarval__content_category_title_4; ?></h3>
					</div>
				</div><!-- /category__thumbnail -->
			</a>
		</div><!-- /content-category-container-column Bloque 4 -->

		<!-- Informática y Telecomunicaciones -->
		<div class="col-md-2 content-category-container-column">
			<a class="a-margin-top" href="<?php echo $url.'/maestrias/#area-informatica-y-telecomunicaciones'; ?>">
				<div class="thumbnail category__thumbnail">
					<div class="img-circle category__img-circle">
						<img src="<?php print get_template_directory_uri().'/images/icons/informatica-y-telecomunicaciones.svg' ?>" alt="" />
					</div><!-- /category__img-circle -->
					<div class="caption">
						<h3><?php print $javiergarval__content_category_title_5; ?></h3>
					</div>
				</div><!-- /category__thumbnail -->
			</a>
		</div><!-- /content-category-container-column Bloque 5 -->

	</div><!-- /row -->
</div><!-- /content-category-container -->
<?php } ?>

<div class="clearfix"></div>

<!--
Metodology
========================================
-->
<?php if ($javiergarval__general_metodology) { ?>
<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="metodology__title text-center">Nuestra Metodología</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div> -->
<!-- Banner Metodología -->
<div class="container-fluid">
	<div class="row not-show">
		<a href="<?php echo $url.'/metodologia'; ?>">
			<img src="<?php echo get_template_directory_uri() . '/images/banner-metodologia2.png' ?>" alt="metodologia" height="100%" width="100%">
		</a>
	</div>
	<div class="row show-on-500px">
		<img src="<?php echo get_template_directory_uri() . '/images/banner-metodologia-360.png' ?>" alt="metodologia" height="100%" width="100%">
	</div>
</div>
<?php } ?>

<div class="clearfix"></div>

<!--
Testimonies
========================================
-->
<!-- Título Alumnos de javiergarval -->
<?php if ($javiergarval__general_testimony) { ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="testimony__title text-center">Alumnos de javiergarval</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div>
<!-- Contenido -->
<div class="container content-testimony-container">
	<!-- Testimonio -->
	<div class="row testimony__row">
		<div class="col-md-5 testimony__video">
			<div class="embed-responsive embed-responsive-16by9">
				<div class="youtube-player" data-id="<?php print $javiergarval__content_testimony_media_1 ?>"></div>
				<script>
			    document.addEventListener("DOMContentLoaded",
			        function() {
			            var div, n,
			                v = document.getElementsByClassName("youtube-player");
			            for (n = 0; n < v.length; n++) {
			                div = document.createElement("div");
			                div.setAttribute("data-id", v[n].dataset.id);
			                div.innerHTML = labnolThumb(v[n].dataset.id);
			                div.onclick = labnolIframe;
			                v[n].appendChild(div);
			            }
			        });

			    function labnolThumb(id) {
			        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
			            play = '<div class="play"></div>';
			        return thumb.replace("ID", id) + play;
			    }

			    function labnolIframe() {
			        var iframe = document.createElement("iframe");
			        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
			        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
			        iframe.setAttribute("frameborder", "0");
			        iframe.setAttribute("allowfullscreen", "1");
			        this.parentNode.replaceChild(iframe, this);
			    }

			</script>
			<style>
			    .youtube-player {
			        position: relative;
			        padding-bottom: 56.23%;
			        /* Use 75% for 4:3 videos */
			        height: 0;
			        overflow: hidden;
			        max-width: 100%;
			        background: #000;
			        margin: 5px;
			    }

			    .youtube-player iframe {
			        position: absolute;
			        top: 0;
			        left: 0;
			        width: 100%;
			        height: 100%;
			        z-index: 100;
			        background: transparent;
			    }

			    .youtube-player img {
			        bottom: 0;
			        display: block;
			        left: 0;
			        margin: auto;
			        max-width: 100%;
			        width: 100%;
			        position: absolute;
			        right: 0;
			        top: 0;
			        border: none;
			        height: auto;
			        cursor: pointer;
			        -webkit-transition: .4s all;
			        -moz-transition: .4s all;
			        transition: .4s all;
			    }

			    .youtube-player img:hover {
			        -webkit-filter: brightness(75%);
			    }

			    .youtube-player .play {
			        height: 72px;
			        width: 72px;
			        left: 50%;
			        top: 50%;
			        margin-left: -36px;
			        margin-top: -36px;
			        position: absolute;
			        background: url("//i.imgur.com/TxzC70f.png") no-repeat;
			        cursor: pointer;
			    }

			</style>
			</div>
		</div><!-- /.testimony__video -->
		<div class="col-md-7 testimony__container" style="margin-top:20px;">
			<blockquote>
			  <p><?php  print '¨'.$javiergarval__content_testimony_content_1.'¨' ?></p>
			  <footer><cite title="Source Title"><?php print $javiergarval__content_testimony_author_1 ?></cite></footer>
			</blockquote>
		</div><!-- /.testimony__container -->
	</div><!-- /.testimony__row -->
</div><!-- /.content-testimony-container -->
<?php } ?>

<div class="clearfix"></div>

<!--
Supporters
========================================
-->
<?php if ($javiergarval__general_supporter) { ?>
<!-- Título -->
<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">
			<span class="line"></span>
		</div>
		<div class="col-xs-6">
			<h2 class="supporters__title text-center">Alianzas y Empresas</h2>
		</div>
		<div class="col-xs-3 ">
			<span class="line"></span>
		</div>
	</div>
</div>
-->
<!-- Banner Colaboradores -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<img src="<?php echo get_template_directory_uri().'/images/logos/supporters-banner.png'; ?>" alt="colaboradores" width="100%" height="100%">
		</div>
	</div>
</div>
<?php } ?>

<div class="clearfix"></div>

<!--
Footer
========================================
-->
<?php get_footer(); ?>

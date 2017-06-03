<?php
/*
====================
PAGE - METODOLOGIA
====================
@package eadic-theme
*/

/*
  next_post_link() – a link to the post published chronologically after the current post
  previous_post_link() – a link to the post published chronologically before the current post
  the_category() – the category or categories associated with the post or page being viewed
  the_author() – the author of the post or page
  the_content() – the main content for a post or page
  the_excerpt() – the first 55 words of a post’s main content followed by an ellipsis (…) or read more link that goes to the full post. You may also use the “Excerpt” field of a post to customize the length of a particular excerpt.
  the_ID() – the ID for the post or page
  the_meta() – the custom fields associated with the post or page
  the_shortlink() – a link to the page or post using the url of the site and the ID of the post or page
  the_tags() – the tag or tags associated with the post
  the_title() – the title of the post or page
  the_time() – the time or date for the post or page. This can be customized using standard php date function formatting.
 */

get_header(); ?>

<!-- Título -->
<div class="container-fluid metodologia-container-fluid">
  <div class="container metodologia-container">
    <div class="row text-center metodologia-container-title">
      <h2 class="metodologia__title"><?php echo the_title(); ?></h2>
    </div>
  </div>
</div>

<?php /*
<!-- Contenido -->
<div class="container" style="margin-top: 20px;">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            100% Online
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <p>
            La <b>metodología es 100% online</b>. Para lograr un entorno flexible, dinámico, participativo y enriquecedor, el curso será llevado en un <b>campus virtual</b> - plataforma online - , a través de la cual el alumno podrá ponerse en contacto en todo momento con el profesorado así como con el resto de alumnado. En esta plataforma estará disponible toda la documentación del curso para que el alumnado pueda descargársela y estudiarla de forma cómoda y sencilla en cualquier lugar y en cualquier momento.
        </p>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Foros dinámicos
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <p>
          Por otro lado, para enriquecer la formación que se proporcione, se cuenta con <b>foros dinámicos</b> en los que se resolverán dudas e incidencias; se iniciarán foros de debate entre profesorado y alumnado para poder abarcar aquellas áreas más actuales. Del mismo modo, el curso cuenta con <b>vídeos explicativos</b> de los diferentes temas que se imparten y <b>Webinars</b> por cada uno de los temas para poder hacer hincapié en las dudas que tengan los alumnos y poder explicar aquellos conceptos más complejos tratados en el curso.
        </p>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Casos prácticos
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          <p>
          Por último, a todo ello, se le suman <b>casos prácticos</b> que el alumnado tiene que resolver para poner en práctica lo aprendido durante el curso.
          </p>
          <p>
          Este tipo de metodología <b>garantiza el éxito en la adquisición de conocimientos</b>Entre las <b>principales ventajas</b> cabe destacar:
          </p>
          <ul>
            <li>La <b>compatibilidad</b> con cualquier actividad, eliminando de esta forma las limitaciones de localización, tiempo y/o recursos. </li>
            <li>La <b>aplicación práctica</b> asegura la asimilación de lo aprendido, y motiva la reflexión personal mediante el análisis de la situación planteada y la elaboración de conclusiones.
            </li>
            <li>Mantiene la <b>atención</b> de los participantes gracias a su <b>sencillez y amenidad</b>, fomentando la interactividad entre alumnos y profesores.
            </li>
            <li>Garantiza una <b>atención personalizada</b> y permite un <b>seguimiento individualizado</b> mediante un asesor académico a lo largo de todo el Programa.
            </li>
            <li>Permite el <b>acceso inmediato</b>, a través del campus virtual personalizado, a toda la documentación y a los diferentes ejercicios, vídeos, dinámicas y evaluaciones.</li>
          </ul>
          <p>
            En resumen, se trata de un formato que se adapta a <b>cualquier situación y horario</b> para la adquisición de la formación técnica al <b>más alto nivel</b>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div> */ ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="clearfix" style="margin-top: 30px; "></div>

        <div class="container">
            <div class="col-sm-12">
                <?php the_content(); ?>

                <div class="clearfix" style="margin-top: 50px;"></div>

                <div class="col-sm-4 text-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-1.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-2.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-3.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-4.svg';?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-5.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-6.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-7.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-8.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="clearfix" style="margin-top: 50px;"></div>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri().'/images/metodologia/icono-metodologia-9.svg'; ?>" alt="" height="100px" width="100px"/>
                        <p>Lorem ipsum</p>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

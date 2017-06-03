<?php
/*
====================
PAGE - INFORMACION
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
<div class="container-fluid informacion-container-fluid">
  <div class="container">
    <div class="row text-center informacion-container-title">
      <h2 class="informacion__title"><?php echo the_title(); ?></h2>
	  </div><!-- /.row -->
  </div>
</div><!-- /.container-fluid -->

<!-- Contenido -->
<?php /*<div class="container" style="margin-top: 20px; ">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <!-- COLLAPSE 1 -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Sobre EADIC
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <p><b>EADIC</b> es una escuela técnica online, altamente especializada en los sectores de la <b>ingeniería, construcción e industrial</b> y enfocada en la actualización y desarrollo de profesionales y técnicos. Cuenta con un equipo humano multidisciplinar y experimentado en el empleo de las últimas tecnologías de la formación online. A este equipo se suma un cuadro de <b>más de 300 profesores asociados</b> provenientes del ámbito profesional, además de doctores, docentes universitarios, certificadores y expertos destacados, que acompañan al alumno en la proceso de aprendizaje técnico. La <b>Universidad Rey Juan Carlos y la UDIMA</b> (Universidad a Distancia de Madrid) colaboran con EADIC en el desarrollo de las maestrías, emitiendo sus títulos propios de Máster a los alumnos que superan con éxito el programa.
          <br><br>
          Fruto de nuestros esfuerzos por ofrecer un servicio de calidad, hemos conseguido <b>alianzas estratégicas a nivel internacional</b> que refuerzan nuestra oferta y nos permiten acometer el proceso formativo de empresas, instituciones y particulares de una manera novedosa, pero altamente solvente y profesional.
          <br><br>
          Entre estas alianzas destaca, por su difusión y número de participantes beneficiados, la <b>Organización de los Estados Americanos (OEA)</b>, por medio de su Programa de Alianzas para la Educación y la Capacitación (PAEC), del que EADIC es miembro desde el pasado año 2013. Hasta la fecha, <b>más de 1000 Becas OEA-EADIC han sido concedidas</b> a técnicos y profesionales americanos.
          </p>
        </div><!-- /.panel-body -->
      </div><!-- /#collapseOne -->
    </div><!-- /.panel -->

    <!-- COLLAPSE 2 -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Sobre el Programa de Becas OEA-EADIC
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <h4 style="color:#8dc3df">Objetivos:</h4>
            <p style="padding:2%;">
            Uno de los objetivos es hacer llegar un tipo de formación que apuesta por la excelencia y la especialización técnica a aquellos sectores que más lo necesitan debido a los grandes proyectos que se están desarrollando y se van a poner en marcha en los países miembros de la OEA.
            <br><br>
            Todos estos cursos que EADIC y la Universidad a Distancia de Madrid (UDIMA) proponen se imparten bajo una metodología online basada en la interacción con profesionales destacados del sector.
            </p>
          <h4 style="color:#8dc3df">Criterios de selección:</h4>
          <p>
          Los factores que se tendrán en cuenta en el proceso de selección serán:
          <br>
          </p>
          <ul>
            <li>Mérito y credenciales académicas y profesionales del solicitante. (se requerirá copia de licenciatura/diplomatura o grado equivalente, o bien certificado emitido por parte de la entidad académica respectiva de estar éste en trámite).</li>
            <li>El potencial de impacto al regreso/finalización del programa de estudios.
            </li>
            <li>La distribución geográfica de los candidatos que tome en cuenta las necesidades más importantes de las economías emergentes.
            </li>
            <li>La integración de una perspectiva de equidad género.
            </li>
            <li>El idioma de la instrucción será español.</li>
          </ul>
          <p style="padding:2%;">Para ser beneficiado de la beca, el candidato deberá haber finalizado el proceso de admisión al curso, y haber sido admitido en el programa de estudios.
          <br><br>
          Serán elegibles los interesados con nacionalidad y/o residencia legal permanente de cualquiera de los <a href="http://www.oas.org/es/estados_miembros/default.asp" target="_blank">Estados Miembros de la SG/OEA</a>.
          <br><br>
          Los funcionarios de la Secretaría General, las personas que se encuentren bajo contrato por resultados con la Secretaría General, el personal de las Misiones Permanentes ante la OEA, y sus familiares no serán elegibles para recibir becas de la OEA.
          </p>
          <h4 style="color:#8dc3df">Fechas y Plazos para la Convocatoria:</h4>
          <div class="text-center"><img src="<?php echo get_template_directory_uri().'/images/fechasconvocatoriaoctubre.png' ?>" width="600" atl="fechas"></div>
        </div><!-- /.panel-body -->
      </div><!-- /.collapseTwo -->
    </div><!-- /.panel -->
  </div><!-- /#accordion -->
</div><!-- /.container --> */ ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
    <div class="col-sm-12">
        <?php the_content(); ?>
        <div class="text-center"><img src="<?php echo get_template_directory_uri().'/images/fechasconvocatoriaoctubre.png' ?>" width="100%" atl="Fechas Convocatoria Octubre"></div>
    </div>
</div>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>

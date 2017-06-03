<?php
/*
====================
PAGE - FAQ
====================
@package eadic-theme
*/
?>

<?php
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

<style media="screen">
  .panel-default { border: none; }
  .panel-default>.panel-heading { background-color: transparent; border: none; }
  p { font-style: italic;}
</style>

<!-- Título -->
<div class="container-fluid faq-container-fluid">
  <div class="container">
    <div class="row text-center faq-container-title">
	      <h2 class="faq__title"><?php echo the_title(); ?></h2>
    </div>
  </div>
</div>
<!-- Contenido -->
<div class="container" style="margin-top: 20px;">

	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<!-- ACCORDION 1 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Qué es EADIC?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <p>
      			<strong>EADIC – Escuela Abierta de Desarrollo en Ingeniería y Construcción -</strong> es una <strong>escuela técnica</strong> <strong>altamente especializada</strong> en los sectores  de la <strong>ingeniería, construcción e  industrial</strong> y enfocada en la actualización y desarrollo de  profesionales y técnicos. Cuenta con un  equipo humano multidisciplinar y experimentado en el empleo de las últimas  tecnologías de la formación online.
          </p>
          <br><p>A este equipo se suma un cuadro  de <strong>más de 300 profesores asociados</strong> provenientes del ámbito profesional, además de  <strong>doctores, docentes  universitarios, certificadores y expertos reputados</strong>, que acompañan al  alumno en la proceso de aprendizaje técnico.</p>
          <br><p>Fruto de nuestros esfuerzos por  ofrecer un servicio de calidad, hemos conseguido <strong>alianzas estratégicas a nivel internacional</strong> en el sector educativo  con diferentes universidades, lo que refuerza nuestra oferta y nos permite  acometer el proceso formativo de las empresas de una manera novedosa, pero  altamente solvente y profesional. </p>
					<br><p>En nuestra decidida apuesta por la impartir una <strong>formación universal de calidad</strong>, desde  el pasado año 2013 formamos parte del <strong>Programa  de Alianzas para la Educación y la Capacitación de la OEA (PAEC). </strong>Dentro de  este Programa, está la presente convocatoria, que puedes ver con detalle en <a href="http://www.oas.org/es/becas/PAEC/2016/Convocatoria3_OEA-EADIC.pdf" target="_blank" style="font-weight:bold; color:#8ec3df;">este  enlace</a>.</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 2 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Cuáles son los requisitos para acceder a la Beca de la OEA?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
				<p>Toda la información al respecto  puede ser consultada en <a href="http://www.oas.org/es/becas/PAEC/2016/Convocatoria3_OEA-EADIC.pdf" target="_blank" style="font-weight:bold; color:#8ec3df;">este  enlace</a>.</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 3 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Cómo debo iniciar el proceso de admisión al programa de estudios de EADIC, como primer paso para solicitar la Beca?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
				<p>
					En primer lugar, deberás solicitar  la admisión al programa para ser admitido/a por EADIC. Sigue el siguiente  enlace para ir al <a href="http://www.eadic-oea.com/preinscripcion-oea/index.html" target="_blank" style="font-weight:bold; color:#8ec3df;">formulario de  admisión</a>.<br><br>
					En un plazo máximo de 10 días desde que hayas rellenado  la solicitud recibirás contestación por nuestra parte. Si eres admitido/a al  programa, te enviaremos la <strong>Carta de  Admisión</strong>, que deberás adjuntar a la OEA junto con el resto de la  documentación que se solicita. Es imprescindible haber recibido la aceptación  por parte de EADIC para poder continuar con tu proceso de solicitud de beca. La  OEA no admitirá ninguna solicitud de alumnos que no hayan realizado este paso  previo.
				</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 4 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					¿Cuál es la modalidad de impartición? ¿El alumno se tendrá que desplazar en algún momento? ¿Cuáles son los requisitos técnicos necesarios para  llevar a cabo los estudios?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
		<p>
			La modalidad es 100% online.</strong> Todo  el desarrollo del programa de estudios se realizará a distancia (en línea) y no  habrá que desplazarse en ningún momento. Asimismo, lo único que necesitaremos  para poder desarrollar el curso será un ordenador y conexión a internet. Se  recomienda usar como navegador Google Chrome o Mozilla Firefox.
		</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 5 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					Si ya he sido becado por la OEA anteriormente, ¿puedo volver a solicitar esta Beca?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
				<p>
					Al  menos, debe transcurrir un plazo mínimo de 12 meses desde la finalización del  último programa becado para poder ser aceptado como solicitante.
				</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 6 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					¿Cuáles son los gastos que debe sufragar el alumno?
				</a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
				<p>
					Aunque toda la información está disponible en <a href="http://www.oas.org/es/becas/PAEC/2016/Convocatoria3_OEA-EADIC.pdf" target="_blank"  style="font-weight:bold; color:#8ec3df;">la  convocatoria</a>, te aclaramos que las <strong>Becas  son parciales</strong>, por lo que <strong>el becario  debe sufragar el 50% del coste del programa</strong>. <strong>No existe la posibilidad de una beca total.</strong> </p><br><p>
				 	Asimismo, <strong>el solicitante de la beca reconoce expresamente que tiene capacidad  económica suficiente para sufragar el importe no becado</strong>.</p><br><p>
				 	Además, de los costes de  matrícula, <strong>no existe ningún otro gasto  adicional obligatorio</strong>. No obstante, si el alumno desea recibir el diploma  en formato físico en su domicilio, se aplicarán las tarifas de Courier  correspondientes.  </p><br><p>
				 	Asimismo, si se requiere el <strong>certificado de estudios universitario</strong> (para quien proceda) el coste adicional será de, aproximadamente, unos 15  euros. Los costes de <strong>Legalización  Internacional</strong> mediante la Apostilla de la Haya serán estimados según quién  realice la gestión y tramitación.
				</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 7 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					¿Cuándo se debe pagar el programa de estudios?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
				<p>
					Una  vez publicados los resultados por parte de la OEA, los  alumnos becados tendrán un <strong>plazo de 7 a 10 días</strong> para abonar su matrícula.
				</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 8 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					¿Cuáles son las formas de pago admitidas para el abono de la matrícula?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
				<p>
					Para facilitar el pago de la  matrícula a nuestros alumnos, le ofrecemos diversas modalidades: <strong>Transferencia bancaria</strong>y Pago con <strong>Tarjeta de Crédito o Débito</strong>.
				</p><br>
				<p>
					Una vez publicado el listado de becarios, nos  pondremos en contacto con cada uno de ellos para consensuar la modalidad que  más se adapte a sus preferencias.
				</p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 9 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					¿Quién es la UDIMA - Universidad a Distancia de Madrid?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
				<p>
					La <strong>UDIMA - Universidad a  Distancia de Madrid </strong>es una Universidad oficial aprobada y registrada en  Madrid, según los documentos oficiales según consta en el Boletín Oficial del  Estado Español: &nbsp; </p><p>
				 <a href="http://www.boe.es/boe/dias/2006/08/09/pdfs/A29846-29849.pdf">http://www.boe.es/boe/dias/2006/08/09/pdfs/A29846-29849.pdf</a>   </p><br><p>
				 <a href="http://www.emes.es/LinkClick.aspx?fileticket=rzQg58Xgcec%3d&tabid=46&mid=355&forcedownload=true&name=D_131-2008.pdf">http://www.emes.es/LinkClick.aspx?fileticket=rzQg58Xgcec%3d&amp;tabid=46&amp;mid=355&amp;forcedownload=true&amp;name=D_131-2008.pdf</a>  </p><br><p>
				 Asimismo, la <strong>UDIMA </strong>es una de las tres universidades a  distancia de la capital española y la primera que cuenta con fondos 100%  privados. Autorizada por la&nbsp;Dirección  General de Universidades&nbsp;para la impartición de títulos académicos,  cuenta además con una evaluación constante de los mismos a cargo de la&nbsp;Agencia de Calidad, Acreditación y  Prospectiva de las Universidades de Madrid (ACAP).
			 </p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 10 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
					¿Qué es un Máster con Título Propio?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
				<p>
					La <strong>UDIMA - Universidad a  Distancia de Madrid</strong>, cumpliendo la normativa española y según el Consejo de  Universidades, tiene la capacidad de emitir &ldquo;<strong>títulos propios</strong>&rdquo;, entre los que se incluye este Máster. La  titulación y su diploma la emite, directamente, la UDIMA.</p><br><p>
				 <strong>Los Másteres con Títulos  Propios tienen un objetivo puramente práctico y profesional</strong>, y son desarrollados por <strong>profesionales de  distintas especialidades en colaboración con universidades del más alto nivel</strong>.  Van dirigidos, preferentemente, a la práctica empresarial.
			 </p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 11 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
					¿Cuál es la diferencia entre un Título Propio y un Título Oficial?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
				<p>
					La diferencia entre <strong>Títulos Propios</strong> y Títulos Oficiales o Másteres Oficiales radica en los <strong>accesos</strong> que tendrían unos y otros:
				</p>
				<ul>
				 <li style="list-style-type:circle; color: #000;">Acreditación y Homologación de Títulos: Los másteres oficiales se regulan por la Agencia Nacional de Evaluación de la Calidad y Acreditación (ANECA), entidad dependiente del Ministerio de Educación, Cultura y Deporte (MECD) de España, lo que implica que éstos tienen homologación en los 47 países miembros del Espacio Europeo de Educación Superior (EEES). <strong>Los títulos propios los aprueban los Consejos de las Universidades</strong>, y por tanto se someten a estándares normativos más flexibles. Que los títulos propios no deban someterse a los criterios y procesos complejos les permite comenzar a cursarse rápidamente, y <strong>son una salida veloz para hacer frente a las demandas de las empresas</strong> sobre las universidades y los futuros profesionales.</li>
				 <li style="list-style-type:circle; color: #000;"><strong>En el ámbito de la empresa privada los dos son igual de válidos.</strong></li>
				 <li style="list-style-type:circle; color: #000;"><strong>Orientación Profesional: </strong>Tanto los másteres oficiales como los títulos propios son programas de Postgrado con la finalidad de facilitar una formación de calidad y muy especializada, si bien <strong>los másteres oficiales están más dirigidos hacia la investigación y los títulos propios están más dirigidos a la aplicación práctica  y laboral.</strong> <br><p>Los <strong>títulos propios</strong> son también programas de Postgrado, pero tienen como finalidad la <strong>adquisición de una formación de carácter específica y multidisciplinar</strong>, orientada a la especialización académica o profesional. Se trata de <strong>programas diseñados por la Universidad, en muchos casos en colaboración con profesionales y expertos de diferentes organizaciones, pensados para responder de manera ágil a las necesidades que plantea el mercado de trabajo y la sociedad</strong>, ya que los continuos avances científicos y tecnológicos, unidos a la evolución del entorno socioeconómico y el aumento de la competitividad a nivel laboral, obligan a muchos profesionales y estudiantes a reciclarse y completar continuamente su formación, de ahí la importancia de la realización de este tipo de estudios. </p></li>
				 <li style="list-style-type: circle ; color: #000;">El Máster Oficial concede puntos en las oposiciones o concursos de la Administración Pública como postgrado, mientras que los <strong>Títulos Propios puntúan como Formación Continua</strong>, aunque esto puede variar según la baremación de cada concurso u oposición.</li>
				 <li style="list-style-type: circle ; color: #000;">Los Máster Oficiales están reconocidos en todo el territorio de la Unión Europea y suelen tener reconocimiento en la mayoría de los países. La <strong>convalidación de los Títulos Propios</strong> es posible y, de hecho, se realiza en numerosísimas ocasiones, pero depende de la entidad educativa donde queramos convalidar el título y está sujeto a criterios de contenido lectivo, horas o decisiones internas.</li>
				 <li style="list-style-type: circle ; color: #000;">Los Máster Oficiales dan <strong>acceso al doctorado</strong>, los <strong>Títulos Propios no</strong>.</li>
				 </ul>
				<br>
				<p>
				 Por tanto, <strong>los Másteres con Títulos Propios tienen un objetivo puramente práctico y profesional, y son desarrollados por profesionales de distintas especialidades en colaboración con universidades del más alto nivel, siendo más valorados a nivel empresarial.</strong> Por su parte, los títulos oficiales están dirigidos a aquellos alumnos que desean realizar un doctorado o desarrollar su carrera profesional en entornos puramente universitarios o educativos, primando la investigación.
			 </p>
      </div>
    </div>
  </div>
	<!-- ACCORDION 12 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwelve">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
					¿Pueden ser legalizados internacionalmente los Títulos Propios?
        </a><span class="dashicons dashicons-arrow-down"></span>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
      <div class="panel-body">
				<p>
					<strong>SÍ.</strong> Los títulos puede legalizarse internacionalmente mediante la <strong>Apostilla  de la Haya</strong>, para que quede registrada la <strong>veracidad de la entidad educativa</strong>, así como <strong>las firmas de sus certificados</strong>. El coste por esta gestión será por  cuenta del alumno que lo solicite, aunque EADIC realizará la gestión en su  nombre.
				</p>
      </div>
    </div>
  </div>
</div>

</div>

<?php get_footer(); ?>

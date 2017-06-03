<?php
/*
====================
PAGE - COOKIES
====================
@package eadic-theme
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
<div class="container" style="margin-top: 20px;">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <p>
      Este portal, al igual que la mayoría de portales en Internet, usa cookies para mejorar la experiencia de navegación del usuario. Las cookies personalizan los servicios que ofrece el sitio web, ofreciendo a cada usuario información que puede ser de su interés, en atención al uso que realiza de este portal. A continuación encontrará información sobre qué son las cookies, qué tipo de cookies utiliza este portal, cómo puede desactivar las cookies en su navegador o cómo desactivar específicamente la instalación de cookies de terceros y qué ocurre en caso de deshabilitarlas.
    </p>
    <!-- ACCORDION 1 -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ¿Qué son las cookies?
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <p>
            Las cookies son pequeños archivos que algunas plataformas, como las páginas web, pueden instalar en su ordenador, smartphone, tableta o televisión conectada, al acceder a las mismas. Una cookie se almacena en un ordenador para personalizar y facilitar al máximo la navegación del usuario. Las cookies se asocian únicamente a un usuario y su ordenador y no proporcionan referencias que permitan deducir datos personales del usuario. El usuario podrá configurar su navegador para que notifique o rechace la instalación de las cookies enviadas por el sitio web.
          </p>
        </div>
      </div>
    </div>
    <!-- ACCORDION 2 -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            ¿Por qué son importantes?
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <p>
            Las cookies son útiles por varios motivos. Desde un punto de vista técnico, permiten que las páginas web funcionen de forma más ágil y adaptada a las preferencias del usuario como, por ejemplo, almacenar su idioma o la moneda de su país. Además, ayudan a los responsables de los sitios web a mejorar los servicios que ofrecen, gracias a la información estadística que recogen a través de ellas. Finalmente, sirven para hacer más eficiente la publicidad que le mostramos, gracias a la cual le podemos ofrecer servicios de forma gratuita.
          </p>
        </div>
      </div>
    </div>
    <!-- ACCORDION 3 -->
    <div style="margin-top: 40px; ">
      <h4>
        ¿Cómo utilizamos las cookies?
      </h4>
      <p>
        Navegar por este portal supone que se puedan instalar los siguientes tipos de cookies:
      </p>
    </div>
      <!-- ACCORDION 4 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Cookies de mejora del rendimiento
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            <p>
              Este tipo de Cookie recuerda sus preferencias para las herramientas que se encuentran en los Servicios, por lo que no tiene que volver a configurar el servicio cada vez que usted visita. A modo de ejemplo, en esta tipología se incluyen:
            </p>
            <ul>
              <li>Ajustes de volumen de reproductores de vídeo o sonido.</li>
              <li>Las velocidades de transmisión de vídeo que sean compatibles con su navegador.</li>
              <li>Los objetos guardados en el “carrito de la compra” en los Servicios de E-commerce tales como tiendas.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ACCORDION 5 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Cookies de análisis estadístico
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
            <p>
              Son aquellas que, bien tratadas por nosotros o por terceros, permiten cuantificar el número de visitantes y analizar estadísticamente la utilización que hacen los usuarios de nuestros servicios. Gracias a ellas podemos estudiar la navegación por nuestra página web y mejorar así la oferta de productos o servicios que ofrecemos. Estas cookies no irán asociadas a ningún dato de carácter personal que pueda identificar al usuario, dando información sobre el comportamiento de navegación de forma anónima.
            </p>
          </div>
        </div>
      </div>
      <!-- ACCORDION 6 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Cookies de geolocalización
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="panel-body">
            <p>
              Estas cookies son usadas por programas que intentan localizar geográficamente la situación del ordenador, smartphone, tableta o televisión conectada, para de manera totalmente anónima ofrecerle contenidos y servicios más adecuados.
            </p>
          </div>
        </div>
      </div>
      <!-- ACCORDION 7 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Cookies de registro
            </a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="panel-body">
    				<p>
Las Cookies de registro se generan una vez que el Usuario se ha registrado o posteriormente ha abierto su sesión, y se utilizan para identificarle en los Servicios con los siguientes objetivos:
    				</p>
            <ul>
              <li>Mantener al Usuario identificado de forma que, si cierra un Servicio, el navegador o el ordenador y en otro momento u otro día vuelve a entrar en dicho Servicio, seguirá identificado, facilitando así su navegación sin tener que volver a identificarse. Esta funcionalidad se puede suprimir si el Usuario pulsa la funcionalidad “cerrar sesión”, de forma que esta Cookie se elimina y la próxima vez que entre en el Servicio el Usuario tendrá que iniciar sesión para estar identificado.</li>
              <li>Comprobar si el Usuario está autorizado para acceder a ciertos Servicios, por ejemplo, para participar en un concurso.</li>
            </ul>
          </div>
        </div>
      </div>
    	<!-- ACCORDION 8 -->
      <div class="panel panel-default" style="margin-top: 40px;">
        <div class="panel-heading" role="tab" id="headingEight">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              ¿Qué cookies usamos?
            </a>
          </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
          <div class="panel-body">
    				<p>
              A continuación publicamos una relación de las principales cookies utilizadas.
    				</p>
            <ul>
              <li><strong>Cookies estrictamente necesarias</strong>, como por ejemplo, aquellas que sirvan para una correcta navegación o las que permitan realizar el pago de bienes solicitados por el usuario o cookies que sirvan para asegurar que el contenido de la página web se carga eficazmente: <i>phpsessid; _hjIncludedInSample; __zlcmid</i></li>
              <li><strong>Cookies analíticas</strong>, con propósitos de mantenimiento periódico, y en aras de garantizar el mejor servicio posible al usuario, los sitios web hacen uso normalmente de cookies “analíticas” para recopilar datos estadísticos de la actividad: <i>__utma; __utmb; __utmc; __utmt; __utmz; (google analytics)</i></li>
              <li><strong>Cookies de terceros:</strong></li>
              <ul>
                <li>Google Analytics: Almacena cookies para poder elaborar estadísticas sobre el tráfico y volumen de visitas de esta web. Al utilizar este sitio web está consintiendo el tratamiento de información acerca de usted por Google. Por tanto, el ejercicio de cualquier derecho en este sentido deberá hacerlo comunicando directamente con Google. Para más información, pincha en los siguientes enlaces: <a href="www.google.com/analytics/">www.google.com/analytics/</a> y <a href="http://www.google.es/intl/es/analytics/privacyoverview.html">http://www.google.es/intl/es/analytics/privacyoverview.html</a></li>
                <li>Redes sociales: Cada red social utiliza sus propias cookies para que usted pueda pinchar en botones del tipo Me gusta o Compartir.</li>
                <li>Zopim: Almacena cookies para poder elaborar estadísticas sobre el tráfico y volumen de visitas de esta web. Al utilizar este sitio web está consintiendo el tratamiento de información acerca de usted por Zopim. Por tanto, el ejercicio de cualquier derecho en este sentido deberá hacerlo comunicando directamente con Zopim. Para más información, pincha en los siguientes enlaces: <a href="www.zopim.com">www.zopim.com</a> y <a href="https://www.zopim.com/privacy#cookie">https://www.zopim.com/privacy#cookie</a></li>
                <li>Clicktale: Almacena cookies para poder elaborar estadísticas sobre el tráfico y volumen de visitas de esta web. Al utilizar este sitio web está consintiendo el tratamiento de información acerca de usted por Clicktale. Por tanto, el ejercicio de cualquier derecho en este sentido deberá hacerlo comunicando directamente con Clicktale. Para más información, pincha en los siguientes enlaces: <a href="www.clicktale.com">www.clicktale.com</a> y <a href="http://www.clicktale.com/privacy-policy">http://www.clicktale.com/privacy-policy</a></li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
    	<!-- ACCORDION 9 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingNine">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              ¿Cómo puedo configurar mis preferencias?
            </a>
          </h4>
        </div>
        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
          <div class="panel-body">
    				<p>
              Usted puede permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones de su navegador de internet.
A continuación le ofrecemos enlaces en los que encontrará información sobre cómo puede activar sus preferencias en los principales navegadores:
            </p>
            <ul>
              <li><a href="https://support.google.com/chrome/answer/95647?hl=es">Google Chrome</a></li>
              <li><a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-?redirectlocale=en-US&redirectslug=Cookies">Mozilla Firefox</a></li>
              <li><a href="https://support.microsoft.com/es-es/kb/196955">Internet Explorer</a></li>
              <li><a href="https://support.apple.com/?path=Safari/3.0/fr/9277.html">Safari</a></li>
              <li><a href="https://support.apple.com/es-es/HT201265">Safari para IOS (iPhone, iPad)</a></li>
            </ul>
            <p>
              Finalmente, puede usted dirigirse al portal <a href="http://www.youronlinechoices.com/es/">Your Online Choices</a> dónde además de encontrar información útil, podrá configurar, proveedor por proveedor, sus preferencias sobre las cookies publicitarias de terceros.
            </p>
          </div>
        </div>
      </div>
    	<!-- ACCORDION 10 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTen">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              ¿Qué ocurre si se deshabilitan las cookies?
            </a>
          </h4>
        </div>
        <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
          <div class="panel-body">
    				<p>
              En el caso de bloquear o no aceptar la instalación de cookies es posible que ciertos servicios ofrecidos por nuestro sitio web que necesitan su uso queden deshabilitados y, por lo tanto, no estén disponibles para usted por lo que no podrá aprovechar por completo todo lo que nuestras webs y aplicaciones le ofrecen. Es posible también que la calidad de funcionamiento de la página web pueda disminuir.
            </p>
          </div>
        </div>
      </div>
    	<!-- ACCORDION 11 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEleven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              Aceptación de cookies
            </a>
          </h4>
        </div>
        <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
          <div class="panel-body">
    				<p>
              Si usted sigue navegando después de haberle informado sobre nuestra Política de cookies entendemos que acepta la utilización de las cookies.
Al acceder a este sitio web o aplicación por primera vez, verá una ventana donde se le informa de la utilización de las cookies y donde puede consultar esta política de cookies. Si usted consiente la utilización de cookies, continúa navegando o hace clic en algún link se entenderá que usted ha consentido nuestra política de cookies y, por tanto, la instalación de las mismas en su equipo o dispositivo.
Además del uso de nuestras cookies propias, permitimos a terceros establecer cookies y acceder a ellas en su ordenador. El consentimiento del uso de las cookies de estas empresas está ligado a la navegación por este sitio web.
            </p>
          </div>
        </div>
      </div>
    	<!-- ACCORDION 12 -->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwelve">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
              Actualizaciones en la Política de Cookies
            </a>
          </h4>
        </div>
        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
          <div class="panel-body">
    				<p>
              Nuestro portal puede modificar esta Política de Cookies en función de exigencias legislativas, reglamentarias, o con la finalidad de adaptar dicha política a las instrucciones dictadas por la Agencia Española de Protección de Datos, por lo que se aconseja a los usuarios que la visiten periódicamente.
    				</p>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>

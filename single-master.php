<?php
/*
========================================
SINGLE MASTER
========================================
@package javiergarval-theme

QUICK FUNCTIONS
========================================
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

$url = 'http://www.javiergarval-oea.com/wordpress';

get_header();?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid single-master-container">
      <?php
      // Get Master Area.
      function get_area() {
        // Get the areas by it's name
        $areas = get_the_terms(get_the_ID(), 'area_formativa');
        foreach ($areas as $area) {
          return $area = $area->slug;
        }
      }

      // Master info.
      $masterId = $post->ID; // Master ID
      $masterTitle = $post->post_title; // Master Title
      $masterPrice = get_post_meta( $post->ID, '_master_no_scholarship_value_key', true ); // Master Price
      $masterPriceScholarship = get_post_meta( $post->ID, '_master_scholarship_value_key', true ); // Master Scholarship Price
      $masterArea = get_area(); // Master Area
      $masterStartDate = get_post_meta( $post->ID, '_master_start_date_value_key', true ); // Master Start Date
      $masterDuration = get_post_meta( $post->ID, '_master_duration_value_key', true ); // Master Duration
      $masterPresentation = get_post_meta( $post->ID, '_master_presentation_value_key', true ); // Master Presentation
      $masterAddressedTo = get_post_meta( $post->ID, '_master_objective_value_key', true ); // Master Addressed To
      $masterContent = get_post_meta( $post->ID, '_master_description_value_key', true ); // Master Content
      $masterName = $post->post_name;
      ?>

      <!-- TÍTULO -->
      <div class="container-fluid" style="position: relative; z-index: 1;">
        <div class="container-fluid" style="background: url(<?php bloginfo('template_url'); ?>/images/areas/<?php echo $masterArea; ?>.jpg) no-repeat center center; background-size: cover; position: absolute; z-index: -1; top: 0; bottom: 0; left: 0; right: 0; width: 100%; height: 100%; opacity: .4; "></div>
        <div class="container single-master-title-container">
          <div class="row">
            <div class="col-xs-12 single-master-title text-left">
              <h1>MAESTRÍA UNIVERSITARIA</h1>
              <h2 class="master__title"><?php echo $masterTitle; ?></h2>
              <h3>100% Online</h3>
            </div><!-- /.single-master-title -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.container-fluid -->
      <!-- /TÍTULO -->

      <div class="clearfix"></div>

      <!-- BLOQUES DE INFORMACIÓN -->
      <div class="container single-master-info-container" style="font-size: 20px;">
        <div class="row text-left">

          <!-- BLOQUE 1: FECHA INICIO -->
          <div class="col-xs-12 col-sm-3 sm__info bloque-info">
            <div class="col-xs-3 col-sm-3" style="background: url(<?php bloginfo('template_url'); ?>/images/single-master/fecha-inicio-icon.svg) no-repeat center center; height:50px;">
              <!--<span class="dashicons dashicons-welcome-learn-more"></span>-->
            </div><!-- /.col-xs-3 -->
            <div class="col-xs-9 col-sm-9">
              <h4>Fecha de inicio</h4>
              <?php
              echo $masterStartDate;
              ?>
            </div><!-- /.col-xs-9 -->
          </div><!-- /.col-xs-3 -->
          <!-- BLOQUE 2: DURACIÓN -->
          <div class="col-xs-12 col-sm-3 sm__info bloque-info">
            <div class="col-xs-3 col-sm-3" style="background: url(<?php bloginfo('template_url'); ?>/images/single-master/duracion-icon.svg) no-repeat center center; height: 50px;">
              <!--<span class="dashicons dashicons-welcome-learn-more"></span>-->
            </div><!-- /.col-xs-3 -->
            <div class="col-xs-9 col-sm-9">
              <h4>Duración</h4>
              <p><?php echo $masterDuration; ?> Meses (Online)</p>
            </div><!-- /.col-xs-9 -->
          </div><!-- /.col-xs-3 -->
          <!-- BLOQUE 3: PRECIO SIN BECA -->
          <div class="col-xs-12 col-sm-2 sm__info bloque-info">
            <div class="col-xs-12 col-sm-12">
              <h4>Precio sin beca</h4>
              <?php echo $masterPrice; ?> €
            </div><!-- /.col-xs-9 -->
          </div><!-- /.col-xs-3 -->
          <!-- BLOQUE 4: PRECIO CON BECA -->
          <div class="col-xs-12 col-sm-4 bloque-info">
            <div class="col-xs-12 col-sm-12 bloque-4-precio-beca">
              <h4>Precio con beca</h4>
              <?php echo $masterPriceScholarship; ?> €
            </div><!-- /.col-xs-9 -->
          </div><!-- /.col-xs-3 -->

        </div><!-- /.row -->
      </div><!-- /.single-master-info-container -->
      <!-- /BLOQUES DE INFORMACIÓN -->

      <!-- BLOQUES DE CONTENIDO -->
      <div class="container single-master-content-container">
        <div class="row">

          <div class="col-xs-12 col-sm-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

              <!-- PRESENTACIÓN Y OBJETIVO -->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Presentación y Objetivo
                    </a>
                  </h4>
                </div><!-- /.panel-heading -->
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <?php echo $masterPresentation; ?>
                  </div><!-- /.panel-body -->
                </div><!-- /#collapseOne -->
              </div><!-- /.panel -->

              <!-- DIRIGIDO A -->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Dirigido a
                    </a>
                  </h4>
                </div><!-- /.panel-heading -->
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <?php echo $masterAddressedTo; ?>
                  </div><!-- /.panel-body -->
                </div><!-- /#collapseTwo -->
              </div><!-- /.panel -->

              <!-- CONTENIDO -->
              <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingThree">
                 <h4 class="panel-title">
                   <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Contenido
                   </a>
                 </h4>
               </div><!-- /.panel-heading -->
               <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                 <div class="panel-body">
                  <?php echo $masterContent; ?>
                </div><!-- /.panel-body -->
              </div><!-- /#collapseThree -->
            </div><!-- /.panel -->

          </div><!-- /.panel-group -->
        </div><!-- /.col-xs-12 -->

          <div class="col-xs-12 col-sm-4">
            <!-- FORMULARIO -->
            <div class="col-xs-12 text-left">
              <a href="<?php echo $url.'/preinscripcion' ?>" type="button" class="btn btn-default btn-lg btn-success sidebar__button">Solicitar admisión</a>
              <?php get_sidebar(); ?>
            <!-- END FORMULARIO -->
              <a href="<?php bloginfo('template_url'); ?>/pdf/<?php echo get_post_field( 'post_name', get_post() ); ?>.pdf"type="button" class="btn btn-default btn-lg btn-info sidebar__button">Documento Informativo <span class="dashicons dashicons-media-document" style="font-size: 25px;"></span></a>

              <!-- Botón compra -->
              <form action="<?php echo $url.'/pago'; ?>" method="post">
                  <input type="hidden" name="masterArea" value="<?php echo $masterArea; ?>">
                  <input type="hidden" name="masterName" value="<?php echo $masterName; ?>">
                  <input type="hidden" name="masterPrice" value="<?php echo $masterPrice; ?>">
                  <input type="hidden" name="masterPriceScholarship" value="<?php echo $masterPriceScholarship; ?>">
                  <input type="hidden" name="masterTitle" value="<?php echo $masterTitle; ?>">
                  <input type="hidden" name="masterId" value="<?php echo $masterId; ?>">
                  <input type="hidden" name="masterStartDate" value="<?php echo $masterStartDate; ?>">
                  <button type="submit" class="btn btn-success btn-lg sidebar__button margin-top">
                    Comprar <span class="dashicons dashicons-cart"></span>
                  </button>
              </form>

            </div><!-- /.col-xs-12 -->
          </div><!-- /.col-xs-12 -->

        </div><!-- /.row -->
      </div><!-- /.single-master-content-container -->
      <!-- /BLOQUES DE CONTENIDO -->
    </div><!-- /.single-master-container -->
  <?php endwhile; ?>
<?php endif; ?>

<div class="clearfix"></div>

<?php get_footer(); ?>

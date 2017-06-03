<?php
/*
====================
ARCHIVE MASTER
====================
@package eadic-theme
*/

define( 'WP_USE_THEMES', false ); get_header(); ?>

<div class="container text-center">

  <?php
  // Obtenemos las Áreas Formativas en el array $categories.
  // Las ordenamos por mayor número de áreas, descendientemente.
  $categories = get_terms( array(
    'taxonomy'    => 'area_formativa',
    'orderby'     => 'count',
    'order'       => 'DESC',
    'hide_empty'  => true
  ) );
  // Recorremos el array $categories.
  foreach ($categories as $category) {
    // Guardamos el nombre del Área Formativa.
    $area_name = $category->name;
    // Guardamos el enlace del Área Formativa.
    $area_slug = $category->slug;
    // Elegimos el banner localizado en la carpeta ../images/areas.
    $area_banner = get_template_directory_uri().'/images/areas/'.$area_slug.'.jpg';
    // Guardamos el id del Área Formativa.
    $area_id = $category->term_id;
    // Creamos un <div> que será el título de la página.
    echo '
    <div id="area-'.$area_slug.'" class="container-fluid area__title">
      <div class="row tex-center">
        <div class="col-xs-12">
          <h2  class="archive-master-title-area">'.$area_name.'</h2>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->';

    // Obtenemos los Másteres que contienen dicha Área Formativa.
    // Guardamos un array de Másteres $posts_array.
    $posts_array = get_posts(
        array(
            'posts_per_page' => 20,
            'post_type' => 'master',
            'tax_query' => array(
                array(
                    'taxonomy' => 'area_formativa',
                    'field' => 'name',
                    'terms' => $area_name,
                )
            )
        )
    );

    // Recorremos el array $posts_array.
    foreach ($posts_array as $post) {
      // Guardamos el título del Máster.
      $title = $post->post_title;
      // Guardamos el link del Máster.
      $name = $post->post_name;
      // Guardamos el id del Máster.
      $ID = $post->ID;
      // Creamos el <div> que contendrá el Máster individual.
      echo '
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="col-xs-12 col-sm-12 col-md-12 archive-master-container">
            <a id="master'.$ID.'" href="'.get_permalink($post).'" rel="bookmark" title="'.$title.'">
              <div class="col-xs-12 thumbnail archive-master-thumbnail '.$area_slug.'">

                  <div class="col-xs-12 archive-master-icon">
                    <div class="img-circle master__img-circle">
                      <img src="'.get_template_directory_uri().'/images/icons/master/'.$name.'.png" alt="" height=90px width=90px/>
                    </div>
                  </div>

                  <div class="col-xs-12 archive-master-title-master">
                    <p>'.$title.'</p>
                  </div>

                  <div class="col-xs-12 archive-master-button" style="top:0;">
                    <button type="button" class="btn btn-default btn-lg master__button">Más información</button>
                  </div>

              </div>
            </a>
          </div><!-- /.col-md-4 -->
    </div><!-- /.col-xs-12 -->';
  }
  echo '<div class="clearfix"></div>';

}
?>
</div><!-- /.container -->

<div class="clearfix"></div>

<?php get_footer(); ?>

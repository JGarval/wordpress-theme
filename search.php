<?php
/*
====================
SEARCH
====================
@package eadic-theme
*/

get_header();

$s = get_search_query();
$args = array( 's' => $s );

// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
  echo '
    <div class="container-fluid faq-container-fluid">
      <div class="container">
        <div class="row text-center faq-container-title">
            <h2 class="search__title">Has buscado: '.get_query_var('s').'</h2>
        </div>
      </div>
    </div>';

  echo '
    <div class="container" style="margin-top: 20px;">';
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
<?php }
    } else { ?>
        <div class="container-fluid faq-container-fluid">
          <div class="container">
            <div class="row text-center faq-container-title">
                <h2 class="search__title">No hay resultados                 <span class="dashicons dashicons-thumbs-down" style="font-size:50px;"></span></h2>
            </div>
          </div>
        </div>

        <div class="container" style="margin-top: 20px;">
          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <div class="col-sm-11 col-xs-12" style="margin-bottom: 10px;">
              <input class="form-control field" rows="1" cols="40" id="busqueda" name="s" placeholder="Busca por la maestría que quieras..." value="<?php echo esc_attr( get_search_query() ); ?>"></input>
            </div>
            <div class="col-sm-1 col-xs-12">
              <button name="submit" type="submit" class="btn btn-primary submit" id="searchsubmit" value="Buscar">Buscar</button>
            </div>
          </form>
        </div>
<?php } ?>
  </div>
  
<?php get_footer(); ?>

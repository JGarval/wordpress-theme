<?php
/*
 * ====================
 * PAGE - BUSQUEDA
 * ====================
 * @package javiergarval-theme
*/

get_header(); ?>

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
  <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="col-sm-11 col-xs-12" style="margin-bottom: 10px;">
      <input class="form-control field" rows="1" cols="40" id="busqueda" name="s" placeholder="Busca por la maestría que quieras..." value="<?php echo esc_attr( get_search_query() ); ?>"></input>
    </div>
    <div class="col-sm-1 col-xs-12">
      <button name="submit" type="submit" class="btn btn-primary submit" id="searchsubmit" value="Buscar">Buscar</button>
    </div>
  </form>
</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

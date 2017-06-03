<?php
/*
====================
PAGE - CONTACTO
====================
@package eadic-theme
*/

get_header(); ?>

<!-- Título -->
<div class="container-fluid contacto-container-fluid">
  <div class="container">
    <div class="row text-center contacto-container-title">
      <h2 class="contacto__title"><?php echo the_title(); ?></h2>
	  </div><!-- /.row -->
  </div>
</div><!-- /.container-fluid -->

<div class="clearfix" style="margin-top: 30px;"></div>

<div class="container text-center">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <h3>ESPAÑA</h3>
                <h4>Calle Miguel Yuste, 16 - 5ºD</h4>
                <h4>Madrid - 28037</h4>
                <h4>+34 913 930 319</h4>
            </div>
            <div class="row">
                <a href="https://www.google.es/maps/place/EADIC/@40.4398031,-3.6274259,17z/data=!3m1!4b1!4m5!3m4!1s0xd422f0a3e119dd5:0x5e15c4b59b9cb09a!8m2!3d40.4398031!4d-3.6252372" target="_blank">
                    <img class="mapa-spain" src="<?php echo get_template_directory_uri().'/images/mapa/mapa-spain.png'; ?>" alt="Mapa España EADIC" />
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <h3>COLOMBIA</h3>
                <h4>Calle 64 #11-37 - Oficina 221</h4>
                <h4>Bogotá - 110231</h4>
                <h4>+57 1 3814942</h4>
            </div>
            <div class="row">
                <a href="https://www.google.es/maps/place/Cl.+64+%2311-37,+Bogot%C3%A1,+Colombia/@4.6504894,-74.0650273,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9a4665c6a24d:0xbc1f9331e11a1d25!8m2!3d4.6504894!4d-74.0628386" target="_blank">
                    <img class="mapa-colombia" src="<?php echo get_template_directory_uri().'/images/mapa/mapa-colombia.png'; ?>" alt="Mapa Colombia EADIC" />
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

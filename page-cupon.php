<?php
/*
====================
PAGE - CUPON
====================
@package eadic-theme
*/

$url = 'http://www.eadic-oea.com/wordpress';

// 1. Obtenemos todos los nombres de los cupones.
// ============================================================
$cupones = $wpdb->get_col(
    "SELECT post_title
    FROM $wpdb->posts
    WHERE $wpdb->posts.post_type = 'cupon'
    AND $wpdb->posts.post_status ='publish'"
);
// 1.1. Recorremos los cupones y creamos un array $arrayCupones.
foreach ($cupones as $cupon ) {
    $arrayCupones[] = $cupon;
}

// Obtenemos los datos del Máster.
// ============================================================
// Master data
$masterId = htmlspecialchars($_POST['masterId']);
$masterName = htmlspecialchars($_POST['masterName']);
$masterArea = htmlspecialchars($_POST['masterArea']);
$masterTitle = htmlspecialchars($_POST['masterTitle']);
$masterPrice = htmlspecialchars_decode($_POST['masterPrice']);
$masterPriceScholarship = htmlspecialchars_decode($_POST['masterPriceScholarship']);
$masterStartDate = htmlspecialchars($_POST['masterStartDate']);
$masterDuration = htmlspecialchars($_POST['masterDuration']);
$finalPrice = htmlspecialchars($_POST['finalPrice']);
?>

<?php get_header(); ?>

<!-- Título -->
<div class="container-fluid informacion-container-fluid">
  <div class="container">
    <div class="row text-center informacion-container-title">
      <h2 class="informacion__title"><?php echo the_title(); ?></h2>
	  </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.container-fluid -->

<div class="container">
    <h1 class="text-center">¿Tienes cupón de descuento?</h1>

    <!-- THUMBNAIL MASTER -->
      <div class="col-sm-12 archive-master-container text-container">

        <div id="master<?php echo $masterId; ?>" rel="bookmark" title="<?php echo $masterTitle; ?>">
          <div class="col-sm-3 thumbnail pago-master-thumbnail <?php echo $masterArea; ?>">
              <div class="col-sm-12">
                <div class="col-sm-12 archive-master-icon">
                  <div class="img-circle master__img-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/master/<?php echo $masterName; ?>.png" alt="Logo maestría" height=90px width=90px/>
                  </div>
                </div>
              </div><!-- /.col-sm-12 -->

              <div class="col-sm-12 archive-master-title-master text-center">
                <p><?php echo $masterTitle; ?></p>
              </div><!-- /.col-sm-12 -->

              <div class="col-sm-12 archive-master-button text-center">
                <button type="button" class="btn btn-default btn-lg master__button">Precio a pagar:
                  <br>
                  <?php echo $masterPrice; ?> €</button>
              </div><!-- /.col-sm-12 -->
          </div><!-- /.col-sm-12 -->
        </div><!-- /#master -->
        <form class="form-group col-sm-9" method="post" action="<?php echo $url.'/pago'; ?>" onsubmit="doAction()">
            <div class="form-group col-sm-12">
              <div class="col-sm-6">
                <input id="cuponForm" class="form-control" type="text" name="formCoupon" placeholder="Cupón">
              </div>
              <input type="hidden" name="masterArea" value="<?php echo $masterArea; ?>">
              <input type="hidden" name="masterName" value="<?php echo $masterName; ?>">
              <input type="hidden" name="masterPrice" value="<?php echo $masterPrice; ?>">
              <input type="hidden" name="masterPriceScholarship" value="<?php echo $masterPriceScholarship; ?>">
              <input type="hidden" name="masterTitle" value="<?php echo $masterTitle; ?>">
              <input type="hidden" name="masterId" value="<?php echo $masterId; ?>">
              <input type="hidden" name="masterStartDate" value="<?php echo $masterstar; ?>">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Validar</button>
              </div>
            </div>
        </form>
      </div><!-- /.col-sm-12 -->
    <!-- /THUMBNAIL MASTER -->

</div>

<?php get_footer(); ?>

<!-- Pass $cupones to JS -->
<script type="text/javascript">
  // Pass cupones array to JS.
  var cupones = <?php echo json_encode($arrayCupones); ?>;
  var valido = false;
  function validarCupon() {
    // Retrive value data from input.
    var cuponForm = document.getElementById("cuponForm").value;
    // Loop for every item in array.
    for (var i = 0; i < cupones.length; i++) {
      if (cupones[i] == cuponForm) {
        return true;
      }
    }
    return false;
  }

  function doAction() {
    // Get boolean of validating cupon.
    var value = validarCupon();
    // Obtenemos $finalPrice

    if (value) {
      alert("El cupón introducido es correcto.");
      // Cambiamos el precio final.
      $("button").click(function(){
    });
});
    } else {
      alert("El cupón introducido no es correcto.");
      // Dejamos el precio del Máster.

    }
  }

</script>

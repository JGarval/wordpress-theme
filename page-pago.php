<?php
/*
====================
PAGE - PAGO
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
$cuponForm = htmlspecialchars($_POST['cuponForm']);
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

<!-- Contenido -->
<div class="container-fluid">
  <div class="row">

    <!-- THUMBNAIL MASTER -->
    <div class="col-sm-3">
      <div class="col-sm-12 archive-master-container">

        <div id="master<?php echo $masterId; ?>" rel="bookmark" title="<?php echo $masterTitle; ?>">
          <div class="col-sm-12 thumbnail pago-master-thumbnail <?php echo $masterArea; ?>">
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
                <?php
                  if ($cuponForm == '') {
                    echo '
                    <button type="button" class="btn btn-default btn-lg master__button">Precio a pagar:
                      <br>
                      '.$masterPrice.' €</button>';
                  } else {
                    echo '
                    <button type="button" class="btn btn-default btn-lg master__button">Precio a pagar:
                      <br>
                      200 €</button>';
                  }
                ?>

              </div><!-- /.col-sm-12 -->
          </div><!-- /.col-sm-12 -->
        </div><!-- /#master -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="width:100%;">Tengo un cupón</button>

        <!-- Modal -->
        <form class="" action="<?php echo $url.'/pago'; ?>" method="post" enctype=”multipart/form-data”>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">¿Tienes cupón de descuento?</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" name="cuponForm" value="" placeholder="Cupón" style="width:100%;">
                    <input type="hidden" name="masterArea" value="<?php echo $masterArea; ?>">
                    <input type="hidden" name="masterName" value="<?php echo $masterName; ?>">
                    <input type="hidden" name="masterPrice" value="<?php echo $masterPrice; ?>">
                    <input type="hidden" name="masterPriceScholarship" value="<?php echo $masterPriceScholarship; ?>">
                    <input type="hidden" name="masterTitle" value="<?php echo $masterTitle; ?>">
                    <input type="hidden" name="masterId" value="<?php echo $masterId; ?>">
                    <input type="hidden" name="masterStartDate" value="<?php echo $masterStartDate; ?>">
                    <input type="hidden" name="cuponForm" value="<?php echo $cuponForm; ?>">
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary btn-lg">Validar</button>
                  </div>
                </div>
              </div>
            </div>
        </form>

      </div><!-- /.col-sm-12 -->
    </div><!-- /.col-sm-3 -->
    <!-- /THUMBNAIL MASTER -->

    <!-- DATOS DE CONTACTO -->
    <!--<h2 class="text-center">Datos de contacto</h2>-->
    <div class="col-sm-9">
      <div class="col-sm-12">
        <div class="thumbnail pago-master-thumbnail">
          <div class="col-sm-12">
            <form name="myForm" class="form-group" method="post" action="<?php echo get_template_directory_uri().'/redsys.php'; ?>">
              <!-- Nombre -->
              <div class="form-group col-sm-6">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="formName" required="true" placeholder="Nombre">
              </div>
              <!-- Apellidos -->
              <div class="form-group col-sm-6">
                <label for="">Apellidos</label>
                <input class="form-control" type="text" name="formSecondName" value="" required="true" placeholder="Apellidos">
              </div>
              <!-- Teléfono -->
              <div class="form-group col-sm-6">
                <label for="">Teléfono</label>
                <input class="form-control" type="text" name="formPhone" value="" required="true" placeholder="Teléfono">
              </div>
              <!-- Email -->
              <div class="form-group col-sm-6">
                <label for="">Email</label>
                <input class="form-control" type="email" name="formEmail" value="" required="true" placeholder="Email">
              </div>
              <!-- País -->
              <div class="form-group col-sm-6">
                <label for="">País</label>
                <!-- <input class="form-control" type="text" name="formCountry" value="" required="true" placeholder="País"> -->
                <select class="form-control" name="country" id="pais" required>
                  <option value="" disabled selected hidden>País de residencia*</option>
                  <option value="Afganistan">Afganistán</option>
                  <option value="Albania">Albania</option>
                  <option value="Alemania">Alemania</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                  <option value="Antillas Holandesas">Antillas Holandesas</option>
                  <option value="Arabia Saudi">Arabia Saudí</option>
                  <option value="Argelia">Argelia</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaiyan">Azerbaiyán</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrein">Bahrein</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belgica">Bélgica</option>
                  <option value="Belice">Belice</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermudas">Bermudas</option>
                  <option value="Bielorrusia">Bielorrusia</option>
                  <option value="Birmania">Birmania</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brasil">Brasil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Butan">Bután</option>
                  <option value="Cabo Verde">Cabo Verde</option>
                  <option value="Camboya">Camboya</option>
                  <option value="Camerun">Camerún</option>
                  <option value="Canada">Canadá</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Chipre">Chipre</option>
                  <option value="Ciudad del Vaticano">Ciudad del Vaticano (Santa Sede)</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comores">Comores</option>
                  <option value="Congo">Congo</option>
                  <option value="Republica Democratica del Congo">Congo, República Democrática del</option>
                  <option value="Corea">Corea</option>
                  <option value="Corea del Norte">Corea del Norte</option>
                  <option value="Costa de Marfil">Costa de Marfil</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Coracia">Croacia (Hrvatska)</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Dinamarca">Dinamarca</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egipto">Egipto</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Emiratos Arabes Unidos">Emiratos &Aacute;rabes Unidos</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Eslovenia">Eslovenia</option>
                  <option value="España">España</option>
                  <option value="Estados Unidos">Estados Unidos</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Etiopia">Etiopia</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Filipinas">Filipinas</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Francia">Francia</option>
                  <option value="Gabon">Gabón</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Granada">Granada</option>
                  <option value="Grecia">Grecia</option>
                  <option value="Groenlandia">Groenlandia</option>
                  <option value="Guadalupe">Guadalupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guayana">Guayana</option>
                  <option value="Guayana Francesa">Guayana Francesa</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Haiti">Haití</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hungria">Hungría</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Iran">Irán</option>
                  <option value="Irlanda">Irlanda</option>
                  <option value="Isla Bouvet">Isla Bouvet</option>
                  <option value="Isla de Christmas">Isla de Christmas</option>
                  <option value="Islandia">Islandia</option>
                  <option value="Islas Caiman">Islas Caimán</option>
                  <option value="Islas Cook">Islas Cook</option>
                  <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                  <option value="Islas Feroe">Islas Faroe</option>
                  <option value="Islas Heard y McDonald ">Islas Heard y McDonald</option>
                  <option value="Islas Malvinas">Islas Malvinas</option>
                  <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                  <option value="Islas Marshall">Islas Marshall</option>
                  <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                  <option value="Islas Palau">Islas Palau</option>
                  <option value="Islas Salomon">Islas Salomón</option>
                  <option value="Islas Svalbard y Jan Mayen ">Islas Svalbard y Jan Mayen</option>
                  <option value="Islas Tokelau">Islas Tokelau</option>
                  <option value="Islas Turks y Caicos ">Islas Turks y Caicos</option>
                  <option value="Islas Virgenes">Islas Vírgenes (EE.UU.)</option>
                  <option value="Islas Virgenes ">Islas Vírgenes (Reino Unido)</option>
                  <option value="Islas Wallis y Futuna ">Islas Wallis y Futuna</option>
                  <option value="Israel">Israel</option>
                  <option value="Italia">Italia</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japon">Japón</option>
                  <option value="Jordania">Jordania</option>
                  <option value="Kazajistan">Kazajistán</option>
                  <option value="Kenia">Kenia</option>
                  <option value="Kirguizistan">Kirguizistán</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Laos">Laos</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Letonia">Letonia</option>
                  <option value="Libano">Líbano</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libia">Libia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lituania">Lituania</option>
                  <option value="Luxemburgo">Luxemburgo</option>
                  <option value="Macedonia">Macedonia, Ex-República Yugoslava de</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malasia">Malasia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Maldivas">Maldivas</option>
                  <option value="Mali">Malí</option>
                  <option value="Malta">Malta</option>
                  <option value="Marruecos">Marruecos</option>
                  <option value="Martinica">Martinica</option>
                  <option value="Mauricio">Mauricio</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">México</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldavia">Moldavia</option>
                  <option value="Monaco">Mónaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Níger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk">Norfolk</option>
                  <option value="Noruega">Noruega</option>
                  <option value="Nueva Caledonia">Nueva Caledonia</option>
                  <option value="Nueva Zelanda">Nueva Zelanda</option>
                  <option value="Oman">Omán</option>
                  <option value="Paises Bajos">Países Bajos</option>
                  <option value="Panama">Panamá</option>
                  <option value="Papua Nueva Guinea">Papúa Nueva Guinea</option>
                  <option value="Paquistan">Paquistán</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Perú</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Polinesia Francesa">Polinesia Francesa</option>
                  <option value="Polonia">Polonia</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reino Unido">Reino Unido</option>
                  <option value="Republica Centroafricana">República Centroafricana</option>
                  <option value="Republica Checa">República Checa</option>
                  <option value="Republica Sudafricana">República de Sudáfrica</option>
                  <option value="Republica Dominicana">República Dominicana</option>
                  <option value="Republica Eslovaca">República Eslovaca</option>
                  <option value="Reunion">Reunión</option>
                  <option value="Ruanda">Ruanda</option>
                  <option value="Rumania">Rumania</option>
                  <option value="Rusia">Rusia</option>
                  <option value="Sahara Occidental">Sahara Occidental</option>
                  <option value=" Saint Kitts y Nevis ">Saint Kitts y Nevis</option>
                  <option value="Samoa">Samoa</option>
                  <option value="Samoa Americana">Samoa Americana</option>
                  <option value="San Marino">San Marino</option>
                  <option value="San Vicente y Granadinas ">San Vicente y Granadinas</option>
                  <option value="Santa Helena">Santa Helena</option>
                  <option value="Santa Lucia">Santa Lucía</option>
                  <option value="Santo Tomas y Principe">Santo Tomás y Príncipe</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leona">Sierra Leona</option>
                  <option value="Singapur">Singapur</option>
                  <option value="Siria">Siria</option>
                  <option value="Somalia">Somalia</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Pierre y Miquelon ">St. Pierre y Miquelon</option>
                  <option value="Suazilandia">Suazilandia</option>
                  <option value="Sudan">Sudán</option>
                  <option value="Suecia">Suecia</option>
                  <option value="Suiza">Suiza</option>
                  <option value="Surinam">Surinam</option>
                  <option value="Tailandia">Tailandia</option>
                  <option value="Taiwan">Taiwán</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Tayikistan">Tayikistán</option>
                  <option value="Territorios franceses del Sur ">Territorios franceses del Sur</option>
                  <option value="Timor Oriental">Timor Oriental</option>
                  <option value="Togo">Togo</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                  <option value="Tunez">Túnez</option>
                  <option value="Turkmenistan">Turkmenistán</option>
                  <option value="Turquia">Turquía</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Ucrania">Ucrania</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistán</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Yugoslavia">Yugoslavia</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabue">Zimbabue</option>
                </select>
              </div>
              <!-- Titulación -->
              <div class="form-group col-sm-6">
                <label for="">Titulación</label>
                <input class="form-control" type="text" name="formTitulation" value="" required="true" placeholder="Titulación">
              </div>
              <!-- Tipo de Documento de Identidad-->
              <div class="form-group col-sm-6">
                <label for="">Tipo de Documento de Identidad</label>
                <select class="form-control" name="formDocumentType" id="formDocumentType" required title="Tipo de Documento de Identidad">
                    <option value="" class="selecciona">Selecciona tipo de documento de identidad...</option>
                    <option value="DNI">DNI</option>
                    <option value="Cedula de Identidad">C&eacute;dula de Identidad</option>
                    <option value="Cedula de ciudadania">C&eacute;dula de ciudadan&iacute;a</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                    <option value="Documento unico de identidad">Documento &uacute;nico de identidad</option>
                    <option value="Documento personal de identificacion">Documento personal de identificaci&oacute;n</option>
                    <option value="Credencial de Elector">Credencial de Elector</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
              </div>
              <!-- Número Documento de Identidad -->
              <div class="form-group col-sm-6">
                <label for="">Número Documento de Identidad</label>
                <input class="form-control" type="text" name="formDocumentNumber" value="" required="true" placeholder="Número Documento de Idendtidad">
              </div>
              <!-- Convocatoria -->
              <div class="form-group col-sm-6">
                <label for="">Convocatoria</label>
                <select class="form-control" name="formConvocatoria" id="formDocumentType" required title="Convocatoria">
                  <option value="" class="selecciona">Convocatoria</option>
                  <option value="<?php echo $masterStartDate; ?>"><?php echo $masterStartDate; ?></option>
                </select>
              </div>
              <!-- Botón comprar -->
              <div class="form-group col-sm-6 text-center">
                <!-- Archivos que se envían ocultos -->
                <input type="hidden" name="arrayCupones" value="<?php echo $arrayCupones; ?>">
                <input type="hidden" name="masterArea" value="<?php echo $masterArea; ?>">
                <input type="hidden" name="masterName" value="<?php echo $masterName; ?>">
                <input type="hidden" name="masterPrice" value="<?php echo $masterPrice; ?>">
                <input type="hidden" name="masterPriceScholarship" value="<?php echo $masterPriceScholarship; ?>">
                <input type="hidden" name="masterTitle" value="<?php echo $masterTitle; ?>">
                <input type="hidden" name="masterId" value="<?php echo $masterId; ?>">
                <input type="hidden" name="cuponesPorcentaje" value="<?php echo $cuponesPorcentaje; ?>">
                <input type="hidden" name="cuponesMonetario" value="<?php echo $cuponesMonetario; ?>">

                <!-- Botón de enviar -->
                <button type="submit" name="submit" class="btn btn-success btn-lg" style="width:100%;margin-top:20px;">Comprar <span class="dashicons dashicons-cart"></button>

              </div>
            </form><!-- /.form-group -->
          </div><!-- /.col-sm-12 -->
        </div><!-- /.thumbnail -->
      </div><!-- /.col-sm-12 -->
    </div><!-- /.col-sm-9 -->
    <!-- /DATOS DE CONTACTO -->

  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="clearfix"></div>

<?php get_footer(); ?>

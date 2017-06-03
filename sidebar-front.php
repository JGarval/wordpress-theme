<?php
/*
====================
SIDEBAR - FRONT
====================
@package eadic-theme
*/

require 'connect.php'; ?>

<form class="form-horizontal" name="Formulario eadic-oea" method="post" accept-charset="utf-8">
  <!--<input name="__vtrftk" value="sid:b4b9b0616af94ee761abef8f4d538938168efaa2,1456397610" type="hidden">
  <input name="publicid" value="b06be784b690ac00c581561c6209f71f" type="hidden">
  <input name="name" value="Formulario eadic-oea" type="hidden">
  <input name="VTIGER_RECAPTCHA_PUBLIC_KEY" value="RECAPTCHA PUBLIC KEY FOR THIS DOMAIN" type="hidden">
  <input name="leadsource" value="Formulario Web" value="Formulario Web" type="hidden">
  <input name="label:Gestión_comercial" value="1. Solicitud informacion OEA" type="hidden">
  <input name="label:Estado_de_la_gestión_telefónica" value="No contactado" type="hidden">
  <input name="label:Campaña_Origen_del_suscriptor" value="Formulario_OEA_20161005" type="hidden">
  <input name="label:Enlace_fuente" value="http://www.eadic-oea.com/wordpress" type="hidden">
  <input name="label:Tipo_de_curso" value="M_Master" type="hidden">
  <input name="leadstatus" value="Activo" type="hidden">
  <input type="hidden" name="block_spam_bots" value="1" />-->
  <div class="form-group">
    <h3 class="text-center">Contacta con nosotros</h3>
    <!-- Nombre -->
    <div class="form-group">
      <div class="col-sm-12">
        <input class="form-control" type="text" id="nombre" name="firstname" value=""  placeholder="Nombre *" required>
        <input name="label:Campaña_Origen_del_suscriptor" value="Formulario_OEA_<?php echo date("Ymd", time()); ?>" type="hidden">
        <input name="label:Enlace_fuente" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" type="hidden">
      </div>
    </div>
    <!-- Apellidos -->
    <div class="form-group">
      <div class="col-sm-12">
        <input class="form-control" type="text" id="apellidos" name="lastname" value="" placeholder="Apellidos *" required>
      </div>
    </div>
    <!-- Email -->
    <div class="form-group">
      <div class="col-sm-12">
        <input class="form-control" type="email" id="email" name="email" value="" placeholder="Email *" required>
      </div>
    </div>
    <!-- País -->
    <div class="form-group">
      <div class="col-sm-12">
        <select class="form-control" name="country" id="pais" required>
          <option value="" selected="selected">País de residencia... *</option>
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
          <option value="Burundi">Burundi</opion>
          <option value="Butan">Bután</option>
          <option value="Cabo Verde">Cabo Verde</option>
          <option value="Camboya">Camboya</option>
          <option value="Camerun">Camerún</option>
          <option value="Canada">Canadá;</option>
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
    </div>
    <!-- Teléfono -->
    <div class="form-group">
      <div class="col-sm-12">
        <input class="form-control" type="text" id="tel" name="phone" value="" placeholder="Teléfono + prefijo (ej: +34 00000000)*" required>
      </div>
    </div>
    <!-- Cursos de Interés -->
    <div class="form-group">
      <div class="col-sm-12">
        <select class="form-control" name="label:Curso_de_Interés" id="curso" required>
          <option value="" selected="selected">Curso de interés...*</option>
          <option value="Master en Diseno, Construccion y Mantenimiento de Carreteras_MCARRE" data-label:Codigo_Curso_Interés="MCARRE" >Máster en Diseño,Construcción y Mantenimiento de Carreteras</option>
          <option value="Master en Calculo de Estructuras de Obras Civiles_MESTRU" data-label:Codigo_Curso_Interés="MESTRU">Máster en Cálculo de Estructuras de Obras Civiles</option>
          <option value="Master en Infraestructuras Ferroviarias (Titulo Propio)_MIFFCC" data-label:Codigo_Curso_Interés="MIFFCC" >Máster en Infraestructuras Ferroviarias</option>
          <option value="Master en Financiacion y Gestion de Infraestructuras_MFINGE" data-label:Codigo_Curso_Interés="MFINGE" >Máster en Financiación y Gestión de Infraestructuras</option>
          <option value="Master en Direccion de Proyectos Internacionales - PMI_MDIPRO" data-label:Codigo_Curso_Interés="MDIPRO">Máster en Dirección de Proyectos Internacionales ? PMI®</option>
          <option value="Master en Diseno, Construccion y Explotacion Obras Hidraulicas_MOOHH" data-label:Codigo_Curso_Interés="MOOHH">Máster en Diseño, Construcción y Explotación de Obras Hidráulicas</option>
          <option value="Master Internacional en Trafico, Transportes y Seguridad Vial_MTTSEG " data-label:Codigo_Curso_Interés="MTTSEG">Máster Internacional en Tráfico, Transportes y Seguridad Vial </option>
          <option value="Master Internacional en Ingenieria y Gestion Ambiental _MIAMB " data-label:Codigo_Curso_Interés="MIAMBI">Máster Internacional en Ingeniería y Gestión Ambiental  </option>
          <option value="Master en Aeropuertos: Diseno, Construccion y Mantenimiento " data-label:Codigo_Curso_Interés="MAEROP">Máster en Aeropuertos: Diseño, Construcción y Mantenimiento   </option>
          <option value="Master en Mineria. Planificacion y Gestion de Minas y Operaciones Mineras_MOPMIN" data-label:Codigo_Curso_Interés="MOPMIN">Máster en Minería. Planificación y Gestión de Minas y Operaciones Mineras</option>
          <option value="Master en Petroleo y Gas: Prospeccion, Transformacion y Gestion_MPEYGA" data-label:Codigo_Curso_Interés="MPEYGA">Máster en Petróleo y Gas: Prospección, Transformación y Gestión </option>
          <option value="Master en Gestion Integrada de la Calidad, la Seguridad y el Medio Ambiente_MGICSM" data-label:Codigo_Curso_Interés="MGICSM">Máster en Gestión integrada de la Calidad, la Seguridad y el Medio Abiente</option>
          <option value="Master en BIM Management_MBIMMA" data-label:Codigo_Curso_Interés="MBIMMA">Máster en Bim Management</option>
          <option value="Master en Logisitica y Transporte_MTRLOG" data-label:Codigo_Curso_Interés="MTRLOG">Máster en Logística y Transporte</option>
          <option value="Master en Energias Renovables y Eficiencia Energetica_MERYEE" data-label:Codigo_Curso_Interés="MERYEE">Máster en Energías Renovables y Eficiencia Energética</option>
          <option value="Master en Big Data y Business Intelligence_MBIGDA" data-label:Codigo_Curso_Interés="MBIGDA">Máster en Big Data y Business Intelligence</option>
          <!--MASTER NUEVOS-->
          <option value="Master en Planificacion, Construccion y Explotacion de Infraestructuras Ambientalmente Sostenibles (Titulo Propio)_MASOST" data-label:Codigo_Curso_Interés="MASOST">Máster en Planificación, Construcción y Explotación de Infraestructuras Ambientalmente Sostenibles</option>
          <option value="Master en Diseno, Construccion y explotacion de puertos, costas y obras maritimas especiales_MPUERT" data-label:Codigo_Curso_Interés="MPUERT">Máster en Diseño, Construcción y explotación de puertos, costas y obras marítimas especiales</option>
          <option value="Master en Electronica Industrial, Automatizacion y Control_MELECT" data-label:Codigo_Curso_Interés="MELECT">Máster en Electrónica Industrial, Automatización y Control</option>
          <option value="Master en BIM Management en Infraestructura e ingenieria civil_MBIMCI" data-label:Codigo_Curso_Interés="MBIMCI">Máster en BIM Management en Infraestructura e ingeniería civil</option>
          <option value="Master en Diseno y Construccion de instalaciones y plantas industriales_MPLAIN" data-label:Codigo_Curso_Interés="MPLAIN">Máster en Diseño y Construcción de instalaciones y plantas industriales</option>
          <option value="Master en Construccion, mantenimiento y Explotacion de Metros, Tranvias y Ferrocarriles Urbanos_MTRANV" data-label:Codigo_Curso_Interés="MTRANV">Máster en Construcción, mantenimiento y Explotación de Metros, Tranvías y Ferrocarriles Urbanos</option>
        </select>
        <input type=hidden name="label:Codigo_Curso_Interés" id="Codigo_Curso_Interés" />
      </div>
    </div>
    <!-- Consulta -->
    <div class="form-group">
      <div class="col-sm-12">
        <textarea class="form-control" rows="2" cols="40" id="mensaje" name="label:Comentarios_de_solicitud_de_información" placeholder="Consulta..."></textarea>
      </div>
    </div>
    <!-- Button -->
    <button name="enviar" type="submit" class="btn btn-primary" id="enviar" value="Enviar">Enviar</button>
    <span class="oblig" >* campos obligatorios</span>
    <!-- Términos y condiciones -->
    <div class="form-check acepto">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox" required>
        Acepto los <a href="condiciones.html">términos y condiciones</a>
      </label>
    </div>

  </div><!-- /.form-group -->
</form><!-- /.form-horizontal -->

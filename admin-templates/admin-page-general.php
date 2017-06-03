<!--
====================
ADMIN PAGE GENERAL
====================
@package eadic-theme
-->

<!--<div class="wrap">-->
	<h1>Ajustes generales</h1>

	<?php settings_errors(); ?>

	<!-- <ul class="tab">
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Inicio')" id="defaultOpen">Inicio</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Maestrias')">Maestrías</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Informacion')">Información</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Metodologia')">Metodología</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Faq')">Faq</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Contacto')">Contacto</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Busqueda')">Búsqueda</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Privacidad')">Privacidad</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Cookies')">Cookies</a></li>
	</ul>

	<div id="Inicio" class="tabcontent">

		<div class="eadic-admin-menu-banner">

			<div id="columns">
				<div id="column-1" class="column" draggable="true"><header>Menú de Contacto</header></div>
				<div id="column-2" class="column" draggable="true"><header>Menú de Navegación</header></div>
				<div id="column-3" class="column" draggable="true"><header>Banner</header></div>
				<div id="column-4" class="column" draggable="true"><header>Fases</header></div>
				<div id="column-5" class="column" draggable="true"><header>Sobre EADIC</header></div>
				<div id="column-6" class="column" draggable="true"><header>Categorías</header></div>
				<div id="column-7" class="column" draggable="true"><header>Metodología</header></div>
				<div id="column-8" class="column" draggable="true"><header>Testimonios</header></div>
				<div id="column-9" class="column" draggable="true"><header>Colaboradores</header></div>
			</div>

		</div>-->

		<form id="submitForm" method="post" action="options.php" class="eadic-general-form">
			<?php settings_fields( 'eadic__general' ); ?>
			<h2 class="tab-content-title">Activar y desactivar opciones</h2>
			<?php do_settings_sections( 'eadic-admin' ); ?>
			<h2 class="tab-content-title">Configurar opciones</h2>
			<?php do_settings_sections( 'eadic-admin-theme' ); ?>
			<?php submit_button( 'Guardar cambios', 'primary', 'btnSubmit' ); ?>
		</form>
	</div><!-- /.Inicio -->

	<!-- <div id="Maestrias" class="tabcontent">
		<h2>Activar y desactivar opciones</h2>

	</div><!-- /.Maestrias -->

	<!--<div id="Informacion" class="tabcontent">

	</div><!-- /.Informacion -->

	<!--<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script> -->
<!--</div>-->

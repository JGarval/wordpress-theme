<!--
====================
ADMIN PAGE GENERAL
====================
@package javiergarval-theme
-->

<!--<div class="wrap">-->
	<h1>Ajustes generales</h1>

	<?php settings_errors(); ?>

		<form id="submitForm" method="post" action="options.php" class="javiergarval-general-form">
			<?php settings_fields( 'javiergarval__general' ); ?>
			<h2 class="tab-content-title">Activar y desactivar opciones</h2>
			<?php do_settings_sections( 'javiergarval-admin' ); ?>
			<h2 class="tab-content-title">Configurar opciones</h2>
			<?php do_settings_sections( 'javiergarval-admin-theme' ); ?>
			<?php submit_button( 'Guardar cambios', 'primary', 'btnSubmit' ); ?>
		</form>
	</div><!-- /.Inicio -->
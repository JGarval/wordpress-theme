<!--
====================
ADMIN PAGE THEME
====================
@package javiergarval-theme
-->

<div class="wrap">
	<h1>Configurar el Tema</h1>

	<?php settings_errors(); ?>

	<form method="post" action="options.php" class="javiergarval-general-form">
		<?php settings_fields( 'javiergarval__general' ); ?>
		<?php do_settings_sections( 'javiergarval-admin-theme' ); ?>
		<?php submit_button(); ?>
	</form>
</div>

<!--
====================
ADMIN PAGE THEME
====================
@package eadic-theme
-->

<div class="wrap">
	<h1>Configurar el Tema</h1>

	<?php settings_errors(); ?>

	<form method="post" action="options.php" class="eadic-general-form">
		<?php settings_fields( 'eadic__general' ); ?>
		<?php do_settings_sections( 'eadic-admin-theme' ); ?>
		<?php submit_button(); ?>
	</form>
</div>

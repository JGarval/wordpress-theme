<?php
/*
  PRODUCTS SUBMENU
  ========================================
*/
function eadic__products() {
  // PEDIDOS
  register_setting('eadic__products', 'pedidos');
  register_setting('eadic__products', 'p_master');
  register_setting('eadic__products', 'p_precio');
  register_setting('eadic__products', 'p_estado');
  register_setting('eadic__products', 'p_nombre');
  register_setting('eadic__products', 'p_apellidos');
  register_setting('eadic__products', 'p_telefono');
  register_setting('eadic__products', 'p_email');
  register_setting('eadic__products', 'p_pais');
  register_setting('eadic__products', 'p_titulacion');
  register_setting('eadic__products', 'p_situacion_laboral');
  register_setting('eadic__products', 'p_comentario');
  add_settings_section('eadic__products_section', '');

  // CUPONES
  register_setting('eadic__products', 'cupones');
  // ESTADISTICAS
  register_setting('eadic__products', 'estadisticas');
  add_settings_section();
  add_settings_field();
}

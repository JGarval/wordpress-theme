<?php
/*
  PRODUCTS SUBMENU
  ========================================
*/
function javiergarval__products() {
  // PEDIDOS
  register_setting('javiergarval__products', 'pedidos');
  register_setting('javiergarval__products', 'p_master');
  register_setting('javiergarval__products', 'p_precio');
  register_setting('javiergarval__products', 'p_estado');
  register_setting('javiergarval__products', 'p_nombre');
  register_setting('javiergarval__products', 'p_apellidos');
  register_setting('javiergarval__products', 'p_telefono');
  register_setting('javiergarval__products', 'p_email');
  register_setting('javiergarval__products', 'p_pais');
  register_setting('javiergarval__products', 'p_titulacion');
  register_setting('javiergarval__products', 'p_situacion_laboral');
  register_setting('javiergarval__products', 'p_comentario');
  add_settings_section('javiergarval__products_section', '');

  // CUPONES
  register_setting('javiergarval__products', 'cupones');
  // ESTADISTICAS
  register_setting('javiergarval__products', 'estadisticas');
  add_settings_section();
  add_settings_field();
}

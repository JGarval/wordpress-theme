<!--
====================
ADMIN PAGE PRODUCTS
====================
@package javiergarval-theme
-->

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 98%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<h1>Productos</h1>

<?php settings_errors(); ?>

<table>
  <tr>
    <th>ID</th>
    <th>Pedido</th>
    <th>Precio</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Convocatoria</th>
    <th>Cupón</th>
    <th>Comentario Usuario</th>
  </tr>

  <?php foreach( $results as $row ){
     echo "<tr><td>";
       echo $row['id'];
       echo "</td><td>";
       echo $row['pedido'];
       echo "</td><td>";
       echo $row['precio'];
       echo "</td><td>";
       echo $row['nombre'];
       echo "</td><td>";
       echo $row['apellidos'];
       echo "</td><td>";
       echo $row['convocatoria'];
       echo "</td><td>";
       echo $row['cupon'];
       echo "</td><td>";
       echo $row['comentario_usuario'];
       echo "</td>";
     echo "</tr>";
     }
   ?>
</table>

<form id="submitForm" method="post" action="options.php" class="javiergarval-products-form">
  <?php settings_fields( 'javiergarval__products' ); ?>
  <?php do_settings_sections( 'javiergarval-admin-products' ); ?>
</form>

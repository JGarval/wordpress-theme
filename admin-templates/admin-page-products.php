<?php
 $user = 'apoyoweb';
 $pass = 'Welcome2016';
try {
  $db = new PDO( 'mysql:host=localhost;dbname=118542wordpress20160830153326;charset=utf8', $user, $pass );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $sql = "SELECT * FROM `eadic_pedidos` LIMIT 0 , 30";
  $query = $db->prepare( $sql );
  $query->execute();
  $results = $query->fetchAll( PDO::FETCH_ASSOC );
} catch(PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
}
?>

<!--
====================
ADMIN PAGE PRODUCTS
====================
@package eadic-theme
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

<form id="submitForm" method="post" action="options.php" class="eadic-products-form">
  <?php settings_fields( 'eadic__products' ); ?>
  <?php do_settings_sections( 'eadic-admin-products' ); ?>
</form>

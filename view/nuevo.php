<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">INGRESAR NUEVO PRODUCTO</h1>
<form action="" method="GET">
  <input type="text" placeholder="INGRESE NOMBRE" name="nombre">
  <input type="text" placeholder="INGRESE PRECIO" name="precio">
  <input type="submit" class="btn" name="btn" value="GUARDAR">
  <input type="hidden" name = "m" value="guardar"> <!-- el hidden es para enviar el metodo guardar al controlador, ya que el formulario no lo envia -->
</form>

<?php
require_once("layouts/footer.php");
?>

?>
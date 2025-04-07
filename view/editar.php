<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">EDITAR PRODUCTO</h1>
<form action="" method="GET">
  <?php 
  foreach ($dato as $key =>$value):
      foreach ($value as $v):
    ?>
  <input type="text" placeholder="<?php echo $v['nombre'] ?>" name="nombre" required>
  <input type="text" placeholder="<?php echo $v['precio'] ?>" name="precio" required>
  <input type="hidden" name="id" value="<?php echo $v['id'] ?>">
  <input type="submit" class="btn" name="btn" value="ACTUALIZAR">
  <input type="hidden" name = "m" value="actualizar"> <!-- el hidden es para enviar el metodo guardar al controlador, ya que el formulario no lo envia -->
  <?php
      endforeach;
    endforeach;
  ?>
</form>

<?php
require_once("layouts/footer.php");
?>

?>
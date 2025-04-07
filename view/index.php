<?php

# En la vista tenemos que mostrar los resultados de la consulta que se hizo en el controlador, junto a las plantillas de html
# var_dump($dato); Se muestra el resultado de la consulta, que es un array con los datos de la tabla productos
require_once ("layouts/header.php");
?>

<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<br>
<br>

<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>PRECIO</td>
        <td>ACCION</td>
    </tr>

    <tbody>
      <?php
          if(!empty($dato)): # No necesita de llaves, ya que es un array y no un bloque de codigo.
          # Se usan dos foreach debido a que el resultado de la consulta es un array dentro de otro array, por lo que se necesita recorrer el primer array y luego el segundo.
              foreach ($dato as $key =>$value)
                  foreach ($value as $v): ?>
                  <tr>
                      <td> <?php echo $v["id"] ?></td>
                      <td> <?php echo $v["nombre"] ?></td>
                      <td> <?php echo $v["precio"] ?></td>
                      <td>
                          <a class="btn" href="index.php?m=editar&id= <?php echo $v["id"]?>">EDITAR</a>
                          <a class="btn" href="index.php?m=eliminar&id= <?php echo $v["id"]?>" onclick="return confirm('¿ESTA SEGURO?'); false">ELIMINAR</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
          <?php else: ?>
              <tr>
                 <td colspan="3">NO HAY REGISTROS</td> <!-- colspan="3" indica que la celda ocupa 3 columnas, para centrar el texto -->
              </tr>
          <?php endif ?>
    </tbody>
</table>

<?php
require_once ("layouts/footer.php");

?>
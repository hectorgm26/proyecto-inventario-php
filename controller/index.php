<?php

require_once("model/index.php");

class modeloController {

    private $model;

    function __construct() {
        $this->model = new Modelo(); # El modelo viene de la clase modelo que se encuentra en model/index.php
    }

    #Metodo para mostrar un registro de la base de datos. El metodo es estatico porque no es necesario instanciar la clase para usarlo
    static function index() {
      $producto = new Modelo();

      $dato = $producto->mostrar("productos", "1");

      #Luego de realizar la consulta, debemos mostrar el resultado en la vista
      require_once("view/index.php");
    }

    # NUEVO
    static function nuevo() {
      require_once("view/nuevo.php");
    }

    static function guardar() {
      $nombre = $_REQUEST["nombre"];
      $precio = $_REQUEST["precio"];
      $data = "'" . $nombre . "',". $precio;
      $producto = new Modelo();
      $dato = $producto->insertar("productos", $data);
      header("Location:". urlsite); # Header redirecciona a la pagina que se le indique, en este caso a la pagina principal
    }

    // # EDITAR
      static function editar() {
        $id = $_REQUEST["id"]; # Se recibe el id del producto a editar
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "id = " . $id); # Se busca el producto en la base de datos
        require_once("view/editar.php");
      }

      static function actualizar() {
        $id = $_REQUEST["id"];
        $nombre = $_REQUEST["nombre"];
        $precio = $_REQUEST["precio"];
        $data = "nombre = '" . $nombre . "', precio = " . $precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos", $data, "id = " . $id); # Se actualiza el producto en la base de datos
        header("Location:". urlsite); # Header redirecciona a la pagina que se le indique, en este caso a la pagina principal
      }

      # ELIMINAR

      static function eliminar() {
        $id = $_REQUEST["id"]; # Se recibe el id del producto a editar
        $producto = new Modelo();
        $dato = $producto->eliminar("productos", "id = " . $id); # Se busca el producto en la base de datos
        header("Location:". urlsite); # Header redirecciona a la pagina principal y no a una vista, ya que no se necesita mostrar nada
      }
}
?>
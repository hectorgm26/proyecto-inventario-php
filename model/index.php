<?php

class Modelo {

    private $Modelo;
    private $db;
    private $datos;

    public function __construct()
    {
      $this->Modelo = array();
      $this->db = new PDO("mysql:host=localhost;dbname=mvc2", "root", "");
    }

    public function insertar($tabla, $data) {

      $consulta = "INSERT INTO " . $tabla . " values(null, " . $data . ")"; # Como el id es autoincremental, se le pasa null para que lo genere la base de datos
      $resultado = $this->db->query($consulta);

      if ($resultado) {
        return true;
      } else {
        return false;
      }
    }

    public function mostrar($tabla, $condicion) {

      $consul = "SELECT * FROM " . $tabla . " WHERE " . $condicion . ";";
      $resu = $this->db->query($consul);

      while ($filas = $resu->fetchAll(PDO::FETCH_ASSOC)) { # Mientras haya filas, se guardan en el array $filas el resultado de la consulta
        $this->datos[] = $filas;
      }
      return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion) {

      $consulta = "UPDATE " . $tabla . " SET " . $data . " WHERE " . $condicion;
      $resultado = $this->db->query($consulta);

      if ($resultado) {
        return true;
      } else {
        return false;
      }
    }

    public function eliminar($tabla, $condicion) {

      $eli = "DELETE FROM " . $tabla . " WHERE " . $condicion;
      $res = $this->db->query($eli);

      if ($res) {
        return true;
      } else {
        return false;
      }
    }
}
?>
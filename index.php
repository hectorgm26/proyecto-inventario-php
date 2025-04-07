<?php
# Este archivo principal sera el que se levantara al servidor

require_once("config.php");
require_once("controller/index.php");

if (isset($_GET["m"])):
    if(method_exists("modeloController", $_GET["m"])): # El method exist recibe dos strings, el primero es el nombre de la clase y el segundo el nombre del metodo que se quiere llamar
      modeloController::{$_GET["m"]}();
    endif;
else:
    modeloController::index();
endif;

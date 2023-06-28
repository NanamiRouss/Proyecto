<?php

require_once "modelos/vehiculo.php";

class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){
       $this->modelo=new Vehiculo();
  
      }

    public function Inicio(){
        //echo "Este es el controlador de inicio";
        require_once "vistas/encabezado.php";
        require_once "vistas/pie.php";
        require_once "vistas/inicio/principal.php";

    }
}
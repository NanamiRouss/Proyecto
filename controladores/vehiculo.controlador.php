<?php

require_once "modelos/vehiculo.php";

Class VehiculoControlador{
    private $modelo;

    public function __construct(){
        $this->modelo = new Vehiculo;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/pie.php";
        require_once "vistas/vehiculos/index.php";
    }

    public function FormCrear(){
        $titulo = "Registrar";
        $v= new Vehiculo;
        if(isset($_GET['id'])){
            $v=  $this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/pie.php";
        require_once "vistas/vehiculos/form.php";

    }

    public function Guardar(){
        $v=new Vehiculo();
        $v->setVe_id(intval($_POST['ve_id']));
        $v->setVe_placa($_POST['ve_placa']);
        $v->setVe_tipo($_POST['ve_tipo']);
        $v->setVe_color($_POST['ve_color']);
        $v->setVe_marca($_POST['ve_marca']);
        $v->setVe_entrada($_POST['ve_entrada']);
        $v->setVe_estado($_POST['ve_estado']);

        $v->getVe_id() > 0 ?
        $this->modelo->Actualizar($v) :
        $this->modelo->Insertar($v);

        header("location:?c=vehiculo"); //redirecciona al listado de los vehiculos
    }

}   
<?php 
session_start();

if (!isset($_SESSION["id"])) {
  header("Location: login.php");
  exit();
}


require_once "modelos/basededatos.php"; //llamando a la base de datos

if(!isset($_GET['c'])){
    require_once "controladores/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador, "inicio"));
}else{
    $controlador = $_GET['c'];
    require_once "controladores/$controlador.controlador.php";
    $controlador = ucwords($controlador)."Controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio"; //metodo que vamos a pasar por la url 'a'
    call_user_func(array($controlador,$accion)); 
}


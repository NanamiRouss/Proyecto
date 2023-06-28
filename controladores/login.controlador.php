<?php
require_once '../modelos/basededatos.php';

session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        // Obtener una instancia de la conexión
        $conexion = BasedeDatos::Conectar();

        // Utilizar una sentencia preparada
        $stmt = $conexion->prepare("SELECT * FROM usuario WHERE usuario=? AND clave=?");
        $stmt->execute([$usuario, $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Usuario encontrado
           $_SESSION["id"]=$result->id; //almaceno en una variable id el id del usuario
           $_SESSION["correo"]=$result->correo;
           $_SESSION["nombre"]=$result->nombre;
           $_SESSION["cargo"]=$result->cargo;    
            header("location:../index.php");
            exit();
        } else {
            // Usuario no encontrado
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }

        // Cerrar la sentencia preparada
        $stmt->closeCursor();
    }
}

 
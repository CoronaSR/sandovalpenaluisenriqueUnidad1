<?php
session_start();

require_once "conexion.php";
require_once "funciones.php";

//$Correo = $_SESSION['Correo'];
$Correo = 'darinel.teodoro@gmail.com'; //Quitar
$Contrasena = $_POST['Psw'];

$Actualizar = actualizar($Correo,$Contrasena);

if ($Actualizar == 1) {
    $response = 1;
} else {
    $response = 2;
}

echo $response;
?>
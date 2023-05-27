<?php
session_start();

//$codigoRecibido = $_SESSION['CodigoRecibido'];
$codigoRecibido = 234; //Quitar
$codigoIngresado = $_POST['Codigo'];

if ($codigoRecibido == $codigoIngresado) {
    $response = 1;
} else {
    $response = 2;
}

echo $response;
?>
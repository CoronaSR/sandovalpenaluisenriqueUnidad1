<?php
function consulta($Correo){
	require_once 'conexion.php';

    $conexion= new conexion();
    $query=$conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
    $query->bindParam(':correo',$Correo);
    $query->execute();
    $count=$query->rowCount(); //Cuenta si existe el registro

    if ($count == 1) {
        // Si se encontró un registro, devuelve los datos del usuario como un array asociativo
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        // Si no se encontró ningún registro, devuelve false
        return false;
    }
}
?>
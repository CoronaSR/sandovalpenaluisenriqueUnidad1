<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/leer.png" alt="favicon">
	<title>A través de la Lectura</title>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body class="bg-main">

<div class="view-main view-main-image">

    <div class="container" align="center">
        <h1 class="color-title mb-4"><b>A través de la Lectura</b></h1>

        <!--Fomulario de Inicio de Sesion-->
        <form method="post" action="" class="loginForm L-R L-C" id="loginForm">
            <h4 class="color-aditional mb-3"><b>Iniciar Sesión</b></h4>
            <!--Campos del formulario-->
            <input type="e-mail" name="L-Correo" id="L-Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <input type="password" name="L-Contrasena" id="L-Contrasena" class="campo" placeholder="Ingresa tu Contraseña">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton" name="Loguear">Iniciar Sesion</button>
            </div>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="mt-3 change-view">
                ¿Aun no tienes una cuenta? <b class="change_L-C">Crear una Cuenta</b><br>
                ¿Olvidate tu Contraseña? <b class="change_L-R" id="ancla-b">Recuperar Contraseña</b>
            </div>
        </form>

        <!--Fomulario de Recuperar Contraseña-->
        <div class="recuperarForm L-R">
            <div class="row">
                <div class="col-6">
                    <h4 class="color-aditional mb-3"><b>Recuperar Contraseña</b></h4>
                </div>
                <div class="col-6 change-view">
                    <ion-icon name="close" class="change_L-R h3"></ion-icon>
                </div>
            </div>
            <!--Campos del formulario-->
            <form method="post" action="">
            <input type="e-mail" name="R-Correo" id="R-Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton" name="Recuperar">Recuperar</button>
            </div>
            </form>
        </div>

        <!--Fomulario de Registro-->
        <form method="post" action="" class="registroForm L-C">
            <h4 class="color-aditional mb-3"><b>Crear Cuenta</b></h4>
            <!--Campos del formulario-->
            <input type="text" name="C-Nombre" id="C-Nombre" class="campo" placeholder="Ingresa tu Nombre" autocomplete="off">
            <input type="e-mail" name="C-Correo" id="C-Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <input type="password" name="C-Contrasena" id="C-Contrasena" class="campo" placeholder="Ingresa tu Contraseña">
            <input type="password" name="C-RContrasena" id="C-RContrasena" class="campo" placeholder="Repite la Contraseña">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton" name="Crear">Crear Cuenta</button>
            </div>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="mt-3 change-view">
                ¿Ya tienes una cuenta? <b class="change_L-C">Iniciar Sesión</b>
            </div>
        </form>

    </div>

</div>

<script src="js/script.js"></script>

<script type="text/javascript">
    /*Cambiar Formulario de Login a Registro y vicebersa*/
    $('.change-view .change_L-C').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    /*Cambiar Formulario de Login a Recuperar y vicebersa*/
    $('.change-view .change_L-R').click(function(){
        $('.L-R').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
require_once "funciones.php";


//ACCION PARA INSERTAR UN NUEVO REGISTRO
if (isset($_POST['Crear'])) {
    $C_Nombre = $_POST['C-Nombre'];
    $C_Correo = $_POST['C-Correo'];
    $C_Contrasena = $_POST['C-Contrasena'];

    //Funcion para consultar si el correo ya esta registrado
    $Crear = consulta($C_Correo);

    if ($Crear) {
            echo '<script>
                mensajeError("Correo Invalido", "El correo ya esta dado de alta");
            </script>';
    } else {
        $Registrar = registrar($C_Nombre,$C_Correo,$C_Contrasena);

        if ($Registrar == 1) {
            $_SESSION['Usuario'] = $C_Correo;
            go("inicio.php");
        } else {
            echo '<script>
                mensajeError("Error en el Proceso", "El usuario no fue dado de alta");
            </script>';
        }
    }
}


//ACCION PARA VALIDAR CORREO EN RECUPERAR CONTRASEÑA
if (isset($_POST['Recuperar'])) {
    $R_Correo = $_POST['R-Correo'];

    //Funcion para consultar si el correo ya esta registrado
    $Recuperar = consulta($R_Correo);

    if ($Recuperar) {
        $EnviarCorreo = enviarCorreo($R_Correo);
        $_SESSION['Correo'] = $R_Correo;
        $_SESSION['CodigoRecibido'] = $EnviarCorreo;
        go("cambiar_contrasena.php");
    } else {
        echo '<script>
            mensajeError("Correo Invalido", "El correo no esta registrado");
        </script>';
    }
}


//ACCION PARA VALIDAR CREDENCIALES ACCESO
if (isset($_POST['Loguear'])) {
    $L_Correo = $_POST['L-Correo'];
    $L_Contrasena = $_POST['L-Contrasena'];

    //Funcion para consultar si el correo ya esta registrado
    $Loguear = consulta($L_Correo);

    if ($Loguear) {
        $Contrasena = $Loguear['contrasena'];

        if ($Contrasena == $L_Contrasena) {
            $_SESSION['Usuario'] = $L_Correo;
            go("inicio.php");
        } else {
            echo '<script>
                mensajeError("Acceso Denegado", "El correo/contraseña es incorrecto");
            </script>';
        }

    } else {
            echo '<script>
                mensajeError("Acceso Denegado", "El correo/contraseña es incorrecto");
            </script>';
    }
}
?>
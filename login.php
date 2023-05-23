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
    <style>
        .view-main{
            background: rgba(0, 0, 0, 0.7) url(https://4.bp.blogspot.com/--UpFf4XDSJY/VgBAXI-MZ-I/AAAAAAAAGAU/5SsOwET7Woo/s1600/parallel-universe-image.jpg) no-repeat center center; 
            background-size: cover;
            background-blend-mode: darken;
            color: #ffffff;
        }


        .campo{
            border: 2px solid #bbbef8;
            padding: 10px;
            width: 70%;
            margin: 10px;
        }

        .registroForm{
            display: none;
        }

        .recuperarForm{
            display: none;
        }

        .change,
        .ancla-b,
        .close{
            cursor: pointer;
            color: #c3d9fd;
        }
    </style>
</head>
<body class="bg-main">

<div class="view-main">

    <div class="container" align="center">
        <h1 class="color-title mb-4"><b>A través de la Lectura</b></h1>

        <!--Fomulario de Inicio de Sesion-->
        <form method="post" action="" class="loginForm" id="loginForm">
            <h4 class="color-aditional mb-3"><b>Iniciar Sesión</b></h4>
            <!--Campos del formulario-->
            <input type="e-mail" name="Correo" id="Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <input type="password" name="Password" id="Password" class="campo" placeholder="Ingresa tu Contraseña">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton" id="Ingresar">Iniciar Sesion</button>
            </div>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="mt-3 change-view">
                ¿Aun no tienes una cuenta? <b class="change">Crear una Cuenta</b><br>
                ¿Olvidate tu Contraseña? <b class="ancla-b" id="ancla-b">Recuperar Contraseña</b>
            </div>
        </form>

        <!--Fomulario de Recuperar Contraseña-->
        <div class="recuperarForm" id="recuperarForm">
            <div class="row">
                <div class="col-6">
                    <h4 class="color-aditional mb-3"><b>Recuperar Contraseña</b></h4>
                </div>
                <div class="col-6">
                    <ion-icon name="close" class="close h3" id="close"></ion-icon>
                </div>
            </div>
            <!--Campos del formulario-->
            <input type="e-mail" name="Correo" id="Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton">Recuperar</button>
            </div>
        </div>

        <!--Fomulario de Registro-->
        <form method="post" action="" class="registroForm" id="registroForm">
            <h4 class="color-aditional mb-3"><b>Crear Cuenta</b></h4>
            <!--Campos del formulario-->
            <input type="text" name="Nombre" id="Nombre" class="campo" placeholder="Ingresa tu Nombre" autocomplete="off">
            <input type="e-mail" name="Correo" id="Correo" class="campo" placeholder="Ingresa tu Correo" autocomplete="off">
            <input type="password" name="Password" id="Password" class="campo" placeholder="Ingresa tu Contraseña">
            <!--Boton para Ejecutar-->
            <div class="mt-3">
                <button type="sumbit" class="boton" id="Registrar">Crear Cuenta</button>
            </div>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="mt-3 change-view">
                ¿Ya tienes una cuenta? <b class="change">Iniciar Sesión</b>
            </div>
        </form>

    </div>

</div>

<script type="text/javascript">
    let loginForm = document.getElementById('loginForm');
    let recuperarForm = document.getElementById('recuperarForm');

    /*Animacion en formularios de Registro y login*/
    $('#ancla-b').on('click', function() {
        loginForm.style.display = "none";
        recuperarForm.style.display = "block";
    });

    $('#close').on('click', function() {
        loginForm.style.display = "block";
        recuperarForm.style.display = "none";
    });

    /*Animacion en formularios de Registro y login*/
    $('.change-view .change').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
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
<?php
    session_start();
    if (!empty($_SESSION['Usuario'])) {
        echo "<script>
            window.location.href = 'inicio.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/leer.png" alt="favicon">
    <title>A través de la Lectura</title>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .descripcion{
            margin: 30px 0px;
            height: 50vh;
        }
        .img{
            width: 100%;
            height: 50vh;
        }

        #inicio{
            display: none;
        }.elementosearch{
            display: none;
        }
        .view-main{
            background: rgba(0, 0, 0, 0.7) url(https://4.bp.blogspot.com/--UpFf4XDSJY/VgBAXI-MZ-I/AAAAAAAAGAU/5SsOwET7Woo/s1600/parallel-universe-image.jpg) no-repeat center center; 
            background-size: cover;
            background-blend-mode: darken;
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-main">
<div>
     <?php include('navbar.php'); ?>
</div>
<!--Presentacion-->
<div class="view-main">
    <div class="container mb-4 text-center">
        <h1 class="font-1 color-title"><b>Nuevos Mundos te Esperan</b></h1>
    </div>

    <div class="container mb-5">
        <p class="fs-4" align="center"><i>"La lectura te puede transportar a escenarios maravillosos en donde con ayuda de tu imaginacion puedes convertirte en el actor principal. Tu mente es el portal y la lectura un mundo sin igual. No tengas miedo a adentrarte al mundo de la lectura, no tengas miedo a vivir nuevas aventuras. Voces claman por un heroe, ¿Acudiras al llamado?"</i></p>
    </div>

    <a href="login.php" class="button-main mt-4">Empezar</a>
</div>



<!--Informacion-->
<div class="row align-items-center descripcion">
    <div class="col-6">
        <img src="https://definicion.de/wp-content/uploads/2009/06/genero-fantastico.jpg" class="img">
    </div>
    <div class="col-6 ">
       <h2 class="color-suntitle">Historias Sorprendentes</h2>
        <div class="line"></div>
        <p class="fs-5">Encuentra las mejores historias sobre aventura, fantasia y ciencia ficción.</p>
    </div>
</div>


<div class="row align-items-center descripcion">
    <div class="col-6">
        <h2 class="color-subtitle">Totalmente Gratis</h2>
        <div class="line"></div>
        <p class="fs-5">No necesitas suscripcion, solo crea una cuenta y accede a los libros disponibles.</p>
    </div>
    <div class="col-6">
        <img src="https://pbs.twimg.com/media/EOgSIxQX0AEFdxg.jpg" class="img">
    </div>
</div>


<div class="row align-items-center descripcion">
    <div class="col-6">
        <img src="https://codigoworpress.com/wp-content/uploads/2021/04/1619303339_%C2%BFMejor-una-tableta-o-un-lector-de-libros-electronicos-para.jpg" class="img">
    </div>
    <div class="col-6">
        <h2 class="color-subtitle">Siempre Disponibles</h2>
        <div class="line"></div>
        <p class="fs-5">Puedes descargar los libros que tenemos, para poder leerlos en el momento que tu quieras.</p>
    </div>
</div>



<!--Ayuda (Preguntas Frecuentes)-->
<div class="container mt-3" id="FAQ" style="padding-top: 110px; padding-bottom: 80px;">

    <div class="container-fluid mb-4" align="center">
        <h4>Preguntas Frecuentes</h4>
    </div>
    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        <div class="text-start color-subtitle"><li>¿De que trata el proyecto?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse1">
        <div class="information">
            <p><b>A través de la Lectura</b> es un proyecto que busca fomentar la lectura por medio de la distribucion y promocion de libros con historias fantasticas y sorprendentes.</p>
        </div>
    </div>

    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        <div class="text-start color-subtitle"><li>¿Como accedo a los libros?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse2">
        <div class="information">
            <p>Para poder acceder al los libros que tenemos disponibles, primero debes de tener una cuenta. Si todavia no tienes una cuenta haz <a href="login.php#registro" class="a-help"><b>clic aqui</b></a></p>
        </div>
    </div>

    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        <div class="text-start color-subtitle"><li>¿Como descargo un libro?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse3">
        <div class="information">
            <p>Para descargar un libro debes dar clic en el boton descargar que aparece junto a la informacion del libro que deseas.</p>
        </div>
    </div>
    
    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        <div class="text-start color-subtitle"><li>¿Puedo obtener los libros en formato fisico?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse4">
        <div class="information">
            <p>Los libros que ofrecemos solo son accesibles en formato digital, nuestro equipo no se dedica a la venta de libros.</p>
        </div>
    </div>
    
    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        <div class="text-start color-subtitle"><li>¿Cuanto cuesta la suscripción?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse5">
        <div class="information">
            <p>El acceso a los libros es TOTALMENTE GRATUITO. Nosotros no cobramos ni pedimos donaciones para ofrecer este servicio.</p>
        </div>
    </div>
    
    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        <div class="text-start color-subtitle"><li>Tengo problemas al crear una cuenta ¿Que debo hacer?</li></div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse6">
        <div class="information">
            <p>Algunas de las razones por la que no se puede crear una cuenta, es porque el correo ya esta dado de alta o es invalido, de cualquier modo verifica que la informacion que proporcionas es correcta.</p>
        </div>
    </div>
</div>



<!--Mapa del Sitio-->
<div class="mapa" id="Mapa" style="padding-top: 110px; padding-bottom: 110px;">
    <h4 class="mb-5">Mapa del Sitio</h4>
    <div class="row">
        <div class="col-3">
            <div class="mb-2"><b>Servicios</b></div>
            <a href="login.php" class="a-map">Iniciar Sesion</a><br>
            <a href="login.php#registro" class="a-map">Registrarme</a><br>
            <a href="login.php#recuperar" class="a-map">Recuperar Contraseña</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Asistencia</b></div>
            <a href="chatbot.php" class="a-map">Chat en Linea</a><br>
            <a href="index.php#Buzon" class="a-map">Buzon</a><br>
            <a href="index.php#Contacto" class="a-map">Contactanos</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Ayuda</b></div>
            <a href="index.php#FAQ" class="a-map">Preguntas Frecuentes</a><br>
            <a href="index.php#Mapa" class="a-map">Mapa del Sitio</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Sobre Nosostros</b></div>
            <a href="informacion.php#mision" class="a-map">Mision</a><br>
            <a href="informacion.php#vision" class="a-map">Vision</a><br>
            <a href="informacion.php#objetivos" class="a-map">Objetivos</a><br>
            <a href="informacion.php#compromiso" class="a-map">Compromiso</a>
        </div>
    </div>
</div>



<!--Contactanos-->
<div class="contacto" id="Contacto">
    <h4>Contactanos</h4>
    <div class="row align-items-center">
        <div class="col-8"><b class="text-danger">+52 (844) 000 0022</b></div>
        <div class="col-4">
            <a href="https://github.com/CoronaSR/sandovalpenaluisenriqueUnidad1"><ion-icon name="logo-github" style="font-size: 40px; color: black;"></ion-icon></a>
            <a href="https://github.com/CoronaSR/sandovalpenaluisenriqueUnidad1"><ion-icon name="logo-facebook" style="font-size: 40px; color: blue;"></ion-icon></a>
            <a href="https://github.com/CoronaSR/sandovalpenaluisenriqueUnidad1"><ion-icon name="mail" style="font-size: 40px; color: darkred;"></ion-icon></a>
        </div>
    </div>
</div>



<!--Buzon-->
<div class="buzon" id="Buzon">
    <h4 class="color-title">Queremos Escucharte</h4>
    <form method="post" action="" id="buzonForm">
        <div>
            <input class="campo" type="e-mail" id="Correo" placeholder="Introduce tu Correo" pattern="[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$" required title="Ingresa una dirección de correo electrónico válida">
            <textarea class="campo" id="Opinion" placeholder="Escribe tu Opinión" required></textarea>
        </div>

        <button type="submit" class="boton mt-1">Enviar</button>
    </form>
</div>

<script type="text/javascript">
    var cElectronico = document.getElementById("Correo");
    var comentario = document.getElementById("Opinion");

    $(document).ready(function() {
        $('#buzonForm').submit(function(e) {
            e.preventDefault(); // Prevenir el envío del formulario por defecto

            var correo = $('#Correo').val();
            var opinion = $('#Opinion').val();

            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'Procesos/comentario.php', // Archivo PHP para procesar los datos en el servidor
                data: { Opinion: opinion, Correo: correo }, // Se envia el dato
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    if (response == 1) {
                        Swal.fire({
                            title: "Proceso Exitoso",
                            text: "El mensaje se ha enviado",
                            icon: 'success'
                        })

                        cElectronico.value = '';
                        comentario.value = '';
                    } else if (response == 2) {
                        mensajeError("Mensaje no Enviado", "Intente nuevamente");
                    }
                }
            });
        });
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
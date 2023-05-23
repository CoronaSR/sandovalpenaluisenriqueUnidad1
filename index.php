<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/leer.png" alt="favicon">
	<title>A través de la Lectura</title>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .view-main{
            background: rgba(0, 0, 0, 0.7) url(https://4.bp.blogspot.com/--UpFf4XDSJY/VgBAXI-MZ-I/AAAAAAAAGAU/5SsOwET7Woo/s1600/parallel-universe-image.jpg) no-repeat center center; 
            background-size: cover;
            background-blend-mode: darken;
            color: #ffffff;
        }
        .descripcion{
            margin: 30px 0px;
            height: 50vh;
        }
        .img{
            width: 100%;
            height: 50vh;
        }
        .faq{
            margin-bottom: 5px;
        }


        .buzon{
            margin: 0px;
            padding: 40px 20px;
            background-color: #000000;
            text-align: center;
            color: white;
        }


        .mapa{
            margin: 0px;
            padding: 40px 20px;
            background: transparent;
            text-align: center;
        }


        .contacto{
            margin: 0px;
            padding: 20px;
            background-color: #e9efff;
            text-align: center;
        }

        a{
            white-space: nowrap;
            color: black;
            text-decoration: none;
        }a:hover{
            text-decoration: underline;
        }

        .campo{
            border: 2px solid #bbbef8;
            padding: 10px;
            width: 70%;
            margin: 10px;
        }

        textarea{
            resize: none;
        }
    </style>
</head>
<body class="bg-main">



<!--Presentacion-->
<div class="view-main">
    <div class="container mb-4 text-center">
        <h1 class="font-1 color-title"><b>Nuevos Mundos te Esperan</b></h1>
    </div>

    <div class="container mb-5">
        <p class="fs-4" align="center"><i>"La lectura te puede transportar a escenarios maravillosos en donde con ayuda de tu imaginacion puedes convertirte en el actor principal. Tu mente es el portal y la lectura un mundo sin igual. No tengas miedo a adentrarte al mundo de la lectura, no tengas miedo a vivir nuevas aventuras. Voces claman por un heroe, ¿Acudiras al llamado?"</i></p>
    </div>

    <button class="button-main mt-4">Empezar</button>
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
<div class="container faq">

    <div class="container-fluid mb-4" align="center">
        <h4>Preguntas Frecuentes</h4>
    </div>
    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        <div class="text-start color-subtitle">¿De que trata el proyecto?</div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse1">
        <div class="information">
            <p><b>A través de la Lectura</b> es un proyecto que busca fomentar la lectura por medio de la distribucion y promocion de libros con historias fantasticas y sorprendentes.</p>
        </div>
    </div>

    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        <div class="text-start color-subtitle">¿Como accedo a los libros?</div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse2">
        <div class="information">
            <p>Para poder acceder al los libros que tenemos disponibles, primero debes de tener una cuenta. Si todavia no tienes una cuenta haz <a href="#">clic aqui</a></p>
        </div>
    </div>

    <!--Collapse-->
    <button class="button-collapse align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        <div class="text-start color-subtitle">¿Como descargo un libro?</div>
        <div><ion-icon name="chevron-down-outline"></ion-icon></div>
    </button>

    <div class="collapse" id="collapse3">
        <div class="information">
            <p>Para descargar un libro ...</p>
        </div>
    </div>
</div>



<!--Mapa del Sitio-->
<div class="mapa">
    <h4 class="mb-5">Mapa del Sitio</h4>
    <div class="row" align="start">
        <div class="col-3">
            <div class="mb-2"><b>Servicios</b></div>
            <a href="">Iniciar Sesion</a><br>
            <a href="">Registrarme</a><br>
            <a href="">Recuperar Contraseña</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Asistencia</b></div>
            <a href="">Chat en Linea</a><br>
            <a href="">Buzon</a><br>
            <a href="">Contactanos</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Ayuda</b></div>
            <a href="">Preguntas Frecuentes</a><br>
            <a href="">Mapa del Sitio</a>
        </div>
        <div class="col-3">
            <div class="mb-2"><b>Sobre Nosostros</b></div>
            <a href="">Mision</a><br>
            <a href="">Vision</a>
        </div>
    </div>
</div>



<!--Contactanos-->
<div class="contacto">
    <h4>Contactanos</h4>
    <div class="row">
        <div class="col-8">+52 (844) 000 0022</div>
        <div class="col-4">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="mail"></ion-icon>
        </div>
    </div>
</div>



<!--Buzon-->
<div class="buzon">
    <h4 class="color-title">Queremos Escucharte</h4>

    <div>
        <input class="campo" type="e-mail" name="Correo" placeholder="Introduce tu Correo">
        <textarea class="campo" placeholder="Escribe tu Opinión"></textarea>
    </div>

    <button class="boton mt-1">Enviar</button>
</div>

    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
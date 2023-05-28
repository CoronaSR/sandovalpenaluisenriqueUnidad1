<?php
    session_start();
    require_once "Procesos/funciones.php";

    $Usuario = $_SESSION['Usuario'];

    $Datos = Consulta($Usuario);

    if (isset($_POST['exit'])) {
        session_destroy();
        echo "<script>
            window.location.href = 'login.php';
        </script>";
    }

    if (empty($_SESSION['Usuario'])) {
        echo "<script>
            window.location.href = 'login.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/leer.png" alt="favicon">
	<title>A traves de la Lectura</title>
	<!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .img-lib{
            height: 300px;
            width: 200px;
        }
    </style>
</head>
<body class="bg-main">
    <?php include('navbar.php'); ?>
    <div align="center" style="padding-top: 110px;margin-bottom: 30px;">
        <h1>Bienvenido</h1><span class="text-capitalize"><?php echo $Datos['nombre']?></span>
    </div>

    <div align="center">
        <form method="post" action="">
            <button type="sumbit" class="boton" name="exit">Cerrar Sesion</button>
        </form>
    </div>

    <div class="container" align="center">
        <div class="row">
            <?php
            require_once 'Procesos/conexion.php';
            $conexion=new conexion();
            $sql = "SELECT * FROM libros";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            ?>

            <?php
            while ($campo = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo " <div class='col-4 pt-5 pb-5'>
                  <div>
                     <img src='" . $campo['img'] . "' class='img-lib'>
                  </div>
                  <div class='p-3'>
                     <b>". $campo['nombre'] ."</b>
                  </div>
                  <div>
                     <a href='". $campo['pdf'] ."' download='". $campo['nombre'] ."'>Descargar</a>
                  </div>
                </div>";
            }
        ?>
</div>
</div>
    
    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
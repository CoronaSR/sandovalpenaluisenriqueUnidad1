<?php
session_start();
require_once "Procesos/funciones.php";
$Usuario = $_SESSION['Usuario'];
$Datos = Consulta($Usuario);

if (empty($_SESSION['Usuario'])) {
    echo "<script>
        window.location.href = 'login.php';
    </script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['exit'])) {
        session_destroy();
        echo "<script>
            window.location.href = 'login.php';
        </script>";
    } else {
        $captcha = $_POST['g-recaptcha-response'];
        $secretKey = '6LdaODQmAAAAANwgfEpuL2XmO4PjYsI_mvm9kirg';
        $libro = $_POST['pdflibro'];

        // Verificar el reCAPTCHA
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}");
        $responseData = json_decode($response);

        if ($responseData->success) {
            // Ruta del archivo PDF a descargar
            $rutaArchivo = $libro;

            // Verificar si el archivo existe
            if (file_exists($rutaArchivo)) {
                // Configuración de la descarga
                header('Content-Description: File Transfer');
                header('Content-Type: application/pdf');
                header('Content-Disposition: attachment; filename="' . basename($rutaArchivo) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($rutaArchivo));
                readfile($rutaArchivo);
                exit;
            } else {
                echo '<script>
                    alert("Archivo no Encontrado, Solucionaremos el problema")
                </script>';
            }
        } else {
            echo '<script>
                alert("Error de Captcha: No se valido el captcha")</script>
            </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/leer.png" alt="favicon">
    <title>A traves de la Lectura</title>
    <!--Captcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .img-lib{
            height: 300px;
            width: 200px;
        }

        #acceder{
            display: none;
        }#option1{
            display: none;
        }#option2{
            display: none;
        }#inicio{
            display: none;
        }.navbar{
            height: 80px;
        }
    </style>
</head>
<body class="bg-main">

    <?php include('navbar.php'); ?>

    <div align="center" style="padding-top: 100px;margin-bottom: 30px;">
        <h1>Bienvenido</h1><span class="text-capitalize"><?php echo $Datos['nombre']?></span>
    </div>

    <div align="center">
        <form method="post" action="">
            <button type="sumbit" class="boton" name="exit" value="exit">Cerrar Sesion</button>
        </form>
    </div>

    <div class="container" align="center" id="d">
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
                     <div data-bs-toggle='modal' data-bs-target='#exampleModal". $campo['id'] ."'><b class='a-download'>Descargar</b></div>
                  </div>
                </div>";

                echo '<div class="modal fade" id="exampleModal'. $campo['id'] .'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-main">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Descargar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6 class="mb-4 color-subtitle">Descargar '. $campo['nombre'] .'</h6>
                                <form method="POST" action="">
                                    <input type="hidden" name="pdflibro" value="'. $campo['pdf'] .'">
                                    <div class="g-recaptcha" data-sitekey="6LdaODQmAAAAAERG16xF_IbvqQT2tztjuIa4wTlb">
                                    </div><br>
                                    <button type="submit" class="boton">Descargar PDF</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        ?>  
        </div>
    </div>

    <script src="js/script.js"></script>

    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
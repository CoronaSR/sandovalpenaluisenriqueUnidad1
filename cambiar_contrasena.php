<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cambiar Contraseña</title>
	<!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style type="text/css">
    	#changeForm{
    		display: none;
    	}
    	.purple-container{
    		background-color: yellowgreen;
    	}
    </style>
</head>
<body class="bg-main">
<div class="view-main view-main-image">
	<div class="container" align="center">
		<form method="post" action="" id="validarCodigoForm">
			<label>Ingresa el Codigo Recibido</label><br>
			<input type="number" id="CodigoIngresado" class="campo" placeholder="Ejemplo: 123456">
			<div class="mt-1">
				<button type="sumbit" class="boton">Continuar</button>
			</div>
		</form>

		<form method="post" action="" id="changeForm">
			<h4 class="color-title"><b>Nueva Contraseña</b></h4>
			<input type="password" id="New_Contrasena" class="campo" placeholder="Ingresa una Contraseña">
			<input type="password" id="RNew_Contrasena" class="campo" placeholder="Repite la Contraseña">
			<div class="mt-1">
				<button type="sumbit" class="boton">Continuar</button>
			</div>
		</form>
	</div>
</div>

<script src="js/script.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#validarCodigoForm').submit(function(e) {
		    e.preventDefault(); // Prevenir el envío del formulario por defecto

	        const validarCodigoForm = document.getElementById("validarCodigoForm");
	        const changeForm = document.getElementById("changeForm");

            var Codigo = $('#CodigoIngresado').val(); // Obtener el codigo ingresado

            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'validarCodigo.php', // Archivo PHP para procesar los datos en el servidor
                data: { Codigo: Codigo }, // Se envia el dato
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    if (response == 1) {
                        validarCodigoForm.style.display = "none";
                        changeForm.style.display = "block";
                    } else if (response == 2) {
                        mensajeError("Código Invalido", "El código es incorrecto");
                    } else {
                        mensajeError("Error en el Proceso", "Intente nuevamente");
                    }
                }
            });
        });

        $('#changeForm').submit(function(e) {
	        e.preventDefault(); // Prevenir el envío del formulario por defecto

            var newContrasena = $('#New_Contrasena').val(); // Obtener el codigo ingresado

            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'aprobarContrasena.php', // Archivo PHP para procesar los datos en el servidor
                data: { Psw: newContrasena }, // Se envia el dato
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    if (response == 1) {
                        mensajeExito("Contraseña Actualizada","login.php");
                        //window.location.href = "index.php";
                    } else {
                        // Mensaje de error
                        mensajeError("Error en el Proceso", "Intente nuevamente");
                    }
                }
            });
        });
    });
</script>

</body>
</html>
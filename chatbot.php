<!DOCTYPE html>
<html lang="en">
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
        .row{
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
    </style>
</head>
<body>
    
</body>
</html>
<?php include('navbar.php'); ?>
<script SameSite="None; Secure" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<div id="myLandbot" style="width: 100%; height: 500px"></div>
<script>
  var myLandbot = new Landbot.Container({
    container: '#myLandbot',
    configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1607695-RAPEHGUA2QSFEX91/index.json',
  });
</script>
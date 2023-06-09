<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--Librerias Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

  <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>

  <title>Librería</title>
</head>

<body background="https://wallpaperaccess.com/full/4128940.jpg">

<?php include('navbar.php'); ?>
  <!--Columnas responsivas-->
  <div class="container-lg">

    <div class="container text-center ">
      <div class="row align-items-start">








        <!--Carrusel de imgn-->
        <div class="col ">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img src="imgs/car1.jpg" class="w-75 p-3 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p>"Los que sueñan de día son conscientes de muchas cosas que escapan a los que sueñan sólo de noche".
                    -Edgar Allan Poe</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imgs/car2.jpg" class="w-75 p-3 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>La más amplia galería de libros en línea.</h5>
                  <p>Agenda una cita con un libro ahora mismo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imgs/car3.png" class="w-75 p-3 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Entrevista con John Katzenbach en exclusiva.</h5>
                  <p>Autor del gran libro "El Psicoanalísta"</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <hr>

          <div class="card text-center">
            <div class="card-header">
              Tips de la semana
            </div>
            <div class="card-body">
              <h5 class="card-title">Top 7 libros para formar hábitos de lectura.</h5>
              <p class="card-text">Cortesía de Mariano Trejo, en este video se muestran 7 libros para empezar a leer y
                generar hábito de lectura para principiantes.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YxdyHNZZRXc"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>

          </div>
          <hr>

          <h1 style="color: white;">Boletín de noticias</h1>
          <!--Desplegables-->
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" img src="..." class="rounded mx-auto d-block" alt="...">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Audiolibros, ¿Amenzados por la tecnología?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <img
                  src="https://www.elsoldemexico.com.mx/cultura/literatura/r5v3tx-pexels-stas-knop/alternates/LANDSCAPE_320/pexels-stas-knop-"
                  class="w-10 p-3 img-thumbnail" alt="...">
                <div class="accordion-body">La Inteligencia Artificial (IA) ya comenzó a transformar el mundo de los
                  audiolibros, debido a su capacidad de generar locuciones fluidas y sin la necesidad de utilizar un
                  narrador humano</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Del estante. Recomendaciones para leer.
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <img
                  src="https://www.elsoldemexico.com.mx/cultura/mcr735-estante.jpg/alternates/LANDSCAPE_320/Estante.jpg"
                  class="w-10 p-3 img-thumbnail" alt="...">
                <div class="accordion-body">Esta es una oferta diversa en la que encontrarás una opción para iniciar a
                  los niños en la lectura de la poesía.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Rosa Montero va más allá de la novela negra en su libro La desconocida.
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <img
                  src="https://www.elsoldemexico.com.mx/gossip/pz92ho-rosa-montero.jpg/alternates/LANDSCAPE_320/Rosa%20Montero.jpg"
                  class="w-10 p-3 img-thumbnail" alt="...">
                <div class="accordion-body">Rosa Montero Y Oliver Truc escribieron La desconocida, un thriller con la
                  trata de personas como telón de fondo</div>
              </div>
            </div>
          </div>
          <hr>

          <h1 style="color: white;">Libros de la Semana</h1>
          <div class="container-fluid">

            <!--Cat de libros-->
            <div class="container text-center-align">
              <div class="row w-auto">
                <div class="col w-auto p-3" width="auto">

                  <!--Card 1-->
                  
                  <div class="col w-100 p-3 ">
                    <div class="card w-100 p-3 img-thumbnail">
                      <img src="imgs/tolkien.jpg" width="auto">


                      <div class="card-body">
                        <h5 class="card-header">J.R.R Tolkien: A Biography</h5>
                        <p class="card-text">Autora: Humphrey Carpenter</p>
                        <p class="card-text">La biografía autorizada del creador de la Tierra Media. En las décadas
                          transcurridas desde su muerte en septiembre de 1973, millones han leído EL HOBBIT, EL SEÑOR DE
                          LOS ANILLOS y EL SILMARILLION y se han fascinado con el hombre tan privado que hay detrás de
                          los libros. Nacido en Sudáfrica en enero de 1892, John Ronald Reuel Tolkien quedó huérfano en
                          la infancia y se crió en la pobreza. Sirvió en la Primera Guerra Mundial y sobrevivió a la
                          Batalla del Somme, donde perdió a muchos de los amigos más cercanos que había tenido. Después
                          de la guerra, regresó a la vida académica, logrando una gran reputación como erudito y
                          profesor universitario, y finalmente se convirtió en profesor de inglés Merton en Oxford,
                          donde fue amigo cercano de C.S. Lewis y los otros escritores conocidos como The Inklings.</p>
                        <a href="libros/A Biography.pdf" download="A Biography" class="btn btn-primary">Download</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">

                  <!--Card 2-->
                  <div class="col w-auto p-3">
                    <div class="card w-100 p-3 img-thumbnail">
                      <img src="imgs/confi.jpg" width="auto">


                      <div class="card-body">
                        <h5 class="card-header">Confianza Ciega</h5>
                        <p class="card-title">Autor: John Katzenbach</p>
                        <p class="card-text">Vuelve el autor del thriller psicológico por excelencia, John Katzenbach,
                          autor de El psiconalista y Jaque al psicoanalista . Cuando Maeve desaparece sin dejar rastro,
                          su hija Sloane no se sorprende: si su madre tenía que desaparecer, solo podía ser en extrañas
                          circunstancias . Sin embargo, esta vez es distinto: al cabo de unos días de la desaparición de
                          su progenitora, Sloane recibe un paquete que esta misma le ha mandado, con varios miles de
                          dólares, la escritura de su casa y un arma. También hay una nota con las siguientes palabras:
                          Vén delo todo. Quédate la pistola. Practica. Huye. Ahora. A solo dos semanas de graduarse como
                          arquitecta y en medio de esta encrucijada personal, Sloane recibe la oferta de trabajo de un
                          misterioso millonario que quiere construir seis memoriales para seis personas que murieron, de
                          nuevo, en extrañas circunstancias. A medida que Sloane investigaesas muertes, el consejo de su
                          madre se hace cada vez más presente. ¿En quién puede confiar ahora Sloane? ¿Tendrá tiempo de
                          seguir las indicaciones de su madre cuando llegue al final del laberinto que ha ido creando su
                          siniestro empleador?</p>
                        <a href="libros/Confianza Ciega.pdf" download="Confianza Ciega"
                          class="btn btn-primary">Download</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <!--Card 3-->
                  <div class="col w-100 p-3 ">
                    <div class="card w-100 p-3 img-thumbnail">
                      <img src="imgs/shine.jpg" width="auto">


                      <div class="card-body">
                        <h5 class="card-header">El Resplandor</h5>
                        <p class="card-title">Autor: Stephen King</p>
                        <p class="card-text"> Jack Torrance acepta una oferta de trabajo en un hotel de montaña que se
                          encuentra a 65 kilómetros del pueblo más cercano. Además, las carreteras se encuentran
                          cerradas al tráfico por las fuertes nevadas del invierno. Pronto comenzarán a manifestarse
                          espíritus y apariciones extrañas. Es el propio hotel el que intenta controlar tanto a los
                          vivos como a los muertos. Danny, el hijo de Jack tiene la capacidad de ver visiones sobre el
                          pasado del hotel y de resistirse a su poder hipnótico. Es entonces cuando su padre comienza a
                          enloquecer.</p>
                        <a href="libros/El Resplandor.pdf" download="El Resplandor" class="btn btn-primary">Download</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <!--Card 4-->
                  <div class="col w-auto p-3 ">
                    <div class="card w-auto p-3 img-thumbnail">
                      <img
                        src="https://images.cdn1.buscalibre.com/fit-in/360x360/6a/f8/6af8c92bc9ae00c40dbda298bcc1f892.jpg"
                        width="auto">


                      <div class="card-body">
                        <h5 class="card-header">Una serie de eventos desafortunados: Un Mal Principio</h5>
                        <p class="card-title">Autor: Lemony Snicket</p>
                        <p class="card-text">Querido lector, Siento decirte que el libro que tienes en las manos es
                          extremadamente desagradable: cuenta la triste historia de tres niños con muy mala suerte.Los
                          hermanos Baudelaire llevan una vida repleta de desgracias e infortunios. Vaya, que son un imán
                          para las catástrofes. Sólo en este librito, se enfrentan a un malvado codicioso y repulsivo,
                          sobreviven a un incendio terrible, a un complot para despojarlos de su fortuna y se ven
                          obligados a llevar ropa que pica.Yo tengo la triste obligación de escribir estos desagradables
                          acontecimientos, pero a ti nada te impide cerrar inmediatamente este libro y leer algo más
                          alegre, si eso es lo que prefieres.Con todo mi respeto,Lemony Snicket.</p>

                        <a href="libros/malprincipio.zip" download="Un Mal Principio"
                          class="btn btn-primary">Download</a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>

          </div>


        </div>
        <HR>
        </HR>

      </div>

    </div>
    <!-- Code injected by live-server -->
    <script>
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
        (function () {
          function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
              var elem = sheets[i];
              var parent = elem.parentElement || head;
              parent.removeChild(elem);
              var rel = elem.rel;
              if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
              }
              parent.appendChild(elem);
            }
          }
          var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
          var address = protocol + window.location.host + window.location.pathname + '/ws';
          var socket = new WebSocket(address);
          socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
          };
          if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
          }
        })();
      }
      else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
	// ]]>
    </script>
</body>

</html>
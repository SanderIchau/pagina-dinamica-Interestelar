<html>
    <head>
        <title>Pagina Dinamica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    
    </head>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="./">Logo</a></div>
                
                <ul class="nav navbar-nav">

                <li ><a></a></li>
                <li ><a></a></li>
                <li ><a></a></li>
                <li><a></a></li>
                <li class="active"><a href="">Inicio</a></li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Redes Sociales<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="https://www.facebook.com/Multicines.ec/about?locale=es_LA">Facebook</a></li>
                        <li><a href="https://www.instagram.com/multicines.ec?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a></li>
                        <li><a href="https://twitter.com/multicinesec?lang=es">Twitter</a></li>
                        </ul>
                    </li>
                    <li><a href="contactanos.php">Contactenos</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="registrar.php"><span class="glyphincon glyphicon-user"></span></a></li>
                    <li><a href="login.php"><span class="glyphincon glyphicon-log-in"></span></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <body>
        <!--comienza slider-->


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


           <div class="carousel-inner ">
                  <div class="item active"><center><img src="imagenes/descarga.jpeg" width="90%" ></center></div>
                  <div class="item"><center><img src="imagenes/descarga.jpeg" width="90%"></center></div>
                  <div class="item"><center><img src="imagenes/descarga.jpeg" width="90%" ></center></div>
         </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron.left"></span>
            <span class="sr-only">Atras</span>

        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron.right"></span>
            <span class="sr-only">Siguiente</span>
        </a>

        <!--Finaliza slider-->


        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Interestelar</h2>
                    <ul class=" nav nav-pills nav-stacked">
                        <li class="active"><a href="#Interestelar1">Interestelar</a></li>
                        <li><a href="#Interestelar">Black Hole</li>
                        <li><a href="#Interestelar">Astronauta</li>
                        <li><a href="#Interestelar">Narve en Orbita</li>
                        <li><a href="#Interestelar">Galaxia</li>
                        <li><a href="#Interestelar">Pulsar</li>
                    </ul>
                </div>


                <div class="col-md-4">
                    <div class="well well-lg">
                        <img src="imagenes/Interstellar.jpeg" width="100%">
                        <div class="card-body">
                            <h5>Nave en orbita</h5>
                            <p>Semilla<p>
                                <a href="Nave en Orbita.php" class="btn btn-primary">ver Más</a>
                    </div> 
                </div>
        </div>
        <div class="col-md-4">
                    <div class="well well-lg">
                        <img src="imagenes/Agujeronegro.jpeg" width="100%">
                        <div class="card-body">
                            <h5>Black Hole</h5>
                            <p>Semilla<p>
                                <a href="Black Hole.php" class="btn btn-primary">ver Más</a>
                    </div> 
                </div>
        </div>
        <div class="col-md-4">
                    <div class="well well-lg">
                        <img src="imagenes/Astronauta.jpeg" width="69%">
                        <div class="card-body">
                            <h5>Astronauta</h5>
                            <p>Semilla<p>
                                <a href="Astronauta.php" class="btn btn-primary">ver Más</a>
                    </div> 
                </div>
        </div>
        <div class="col-md-4">
                    <div class="well well-lg">
                        <img src="imagenes/descarga (1).jpeg" width="84%">
                        <div class="card-body">
                            <h5>Galaxia</h5>
                            <p>Semilla<p>
                                <a href="Galaxia.php" class="btn btn-primary">ver Más</a>
                    </div> 
                </div>
        </div>
        <div class="col-md-4">
                    <div class="well well-lg">
                        <img src="imagenes/astronomhub _ Neutron stars are formed when a massive star runs out of fuel and collapses_.jpeg" width="100%">
                        <div class="card-body">
                            <h5>Pulsar</h5>
                            <p>Semilla<p>
                                <a href="pulsar.php" class="btn btn-primary">ver Más</a>
                    </div> 
                </div>
          </div>
 </body>

    <footer style="background-color:color-mix(in srgb, black 10%, white 90%);">

  <div class="container">
     <div class="row">
         <div class="col-md-4">
             <h2>Pie de Pagina</h2>
             <p>Somos una pagina de Interestelar</p>
         </div>
         <div class="col-md-4">
             <h2>Link de la web </h2>

             <ul>
                 <li><a href=".php">Inicio</a></li>
                 <li><a href="contactanos.php">Contactenos</a></li>
                 <li><a href="https://www.multicines.com.ec/">Nosotros</a></li>
             </ul>
         </div>
         <div class="col-md-4">
             <h2><a href="https://www.facebook.com/Multicines.ec/about?locale=es_LA">Facebok</a></h2>

             <h2>Mapa</h2>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7923167910494!2d-78.42831802596015!3d-0.2068605353969685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59126c5f5d81b%3A0x467a1eef2aa83848!2sMulticines%20-%20Scala!5e0!3m2!1ses-419!2sec!4v1715005509705!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

      </div>
  </div>


  </footer>
   
</html>
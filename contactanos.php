<html>
   <?php 
   include('head.php');
   include('header.php');
   ?>
    <body>
       <?php include('head.php');?>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Dirección:</h2>

                    <p style="background-color: white;">Telefono: 0980422882</p>
                    <p style="background-color: white;">E-mail:sand384@gmail.com</p>
                    <form method="post" action="envia.php">
                        <div class="col-md-6">
                        <input class="form-control" type="text" placeholder="Nombre" name="nombre">
                        <input class="form-control" placeholder="Apellido" name="apellido">
                        </div>
                        <div class="col-md-6">
                        <input class="form-control" placeholder="Telefono" name="telefono">
                        <input class="form-control"placeholder="E-mail" name="correo">
                        </div>
                    </form>
                </div>
    </body>

    <?php
    include('footer.php');
    ?>
</html>
<?php include("vista/cabecera.php"); ?>
<body background= "../img/fondo6.jpg" style="background-repeat: no-repeat; background-size: cover;">
    
            <div class="col-md-8">
            <div class="jumbotron">
             <h1 class="display-3">BIENVENIDO <?php echo $nomUsuario;?></h1>
                <p class="lead">ZONA ADMINISTRATIVA</p>
                <hr class="my-2">
                
                <p class="lead">
                <a class="btn btn-dark btn-lg" href="../admin/sesion/producto.php" role="button">ADMINISTRAR PRODUCTOS</a>
                </p>
            </div>
            </div>
            
<?php include("vista/pie.php"); ?>
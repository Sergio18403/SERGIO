<?php  include("vista/cabecera.php");?>
<?php
include("admin/config/conexion.php");
$result = ("SELECT * FROM producto");
?>
<body style="background-color: black">
    

   <?php foreach($conn->query($result) as $list){ ?>
<div class="col-md-3">
    <br>
<div class="card">
    <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $list['nombre']?></h4>
        <h4 class="card-title"><span>$</span><?php echo $list['precio']?></h4
        <a href="index.php" class="btn btn-dark ">Ver mas</a>
    </div>
</div> 
</div>

<?php }?>

</body>



<?php  include("vista/pie.php");?>
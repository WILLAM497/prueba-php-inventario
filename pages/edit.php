<?php
require_once('../modelo/administrador.php');
$Modelo = new administrador();
$Id =$_GET['id'];
$infoproducto = $Modelo->getById($Id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Prueba Practica</title>
</head>
<body>
<br>
<div class="container prueba justify-content-center">
<a type="button" class="btn btn-primary btn-sm boton" href="index.php" target="blank"><strong>Volver</strong></a><h1 class="pad2 text-center"><strong>Editar Producto</strong></h1>
<div class="col-sm-12 col-md-6 col-lg-4  m-auto">
    <form class="form-signin" method="POST" action="../controladores/edit.php">
    <input type="hidden" name="Id" value="<?php echo $Id; ?>">
    <?php 
    if($infoproducto != null){
    foreach ($infoproducto as $info){
    ?>  
    <div class="form-group">
    <label for=""> <strong>Nombre</strong></label>
    <input class="form-control" type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" value="<?php echo $info['nombre']?>">
    </div>
    <div class="form-group">
    <label for=""> <strong>Referencia</strong></label>
    <input class="form-control" type="text" name="Referencia" required="" autocomplete="off" placeholder="Referencia" value="<?php echo $info['referencia']?>"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Precio</strong></label>
    <input class="form-control" type="number" name="Precio" required="" autocomplete="off" placeholder="Precio" value="<?php echo $info['precio']?>"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Peso</strong></label>
    <input  class="form-control" type="number" name="Peso" required="" autocomplete="off" placeholder="Peso" value="<?php echo $info['peso']?>">  
    </div>
    <div class="form-group">
    <label for=""> <strong>Categoria</strong></label>
    <input  class="form-control" type="text" name="Categoria" required="" autocomplete="off" placeholder="Categoria" value="<?php echo $info['categoria']?>"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Stock</strong></label>
    <input class="form-control" type="number" name="Stock" required="" autocomplete="off" placeholder="Stock" value="<?php echo $info['stock']?>"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Fecha de Ultima Venta</strong></label>
    <input class="form-control" type="date" name="Fechaultimaventa" required="" autocomplete="off" placeholder="fecha Ultima venta " value="<?php echo $info['fechaultimaventa']?>"> 
   <?php 
    }
     }
     ?>
     </div>

    <input class=" form-control btn  btn-primary" type="submit" value="Actualizar">
  
</form>
    </div>
</body>
<!------------------------------------------------------------------------JavaScript ----------------------------------------------------------------->
<!------------------------------------------------------ jQuery first, then Popper.js, then Bootstrap JS --------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
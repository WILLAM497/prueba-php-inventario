<?php
$Id =$_GET['id'];
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
<a type="button" class="btn btn-primary btn-sm boton" href="index.php" target="blank"><strong>Volver</strong></a><h1 class="pad2 text-center"><strong>Eliminar Producto</strong></h1>
<div class="col-sm-12 col-md-6 col-lg-4  m-auto">
    <form method="POST" action="../controladores/delete.php">
    <input type="hidden" name="Id" value="<?php echo $Id; ?>">
    <h3><p class="text-danger">¿estas seguro de eliminar el producto?</p></h3>

    <input class=" form-control btn  btn-primary" type="submit" value="SI, Eliminar Producto">
</form>
</div></div>
</body>
<!------------------------------------------------------------------------JavaScript ----------------------------------------------------------------->
<!------------------------------------------------------ jQuery first, then Popper.js, then Bootstrap JS --------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
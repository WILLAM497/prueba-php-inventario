<?php
require_once('../modelo/administrador.php');
$Modelo = new administrador();
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
<h1 class="pad2 text-center"><strong>PRODUCTOS</strong></h1>

    <a type="button" class="btn btn-primary btn-sm boton" href="add.php" target="blank"><strong>Registrar Producto</strong></a><br><br>
    <table class="table table-hover table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Fecha de Creacion</th>
            <th>Fecha de Ultima Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $producto = $Modelo -> get();
        if($producto != null){
        foreach ($producto as $product){
        ?>
        <tr>
            <th><?php echo $product['nombre']?></th>
            <th><?php echo $product['referencia']?></th>
            <th><?php echo $product['precio']?></th>
            <th><?php echo $product['peso']?></th>
            <th><?php echo $product['categoria']?></th>
            <th><?php echo $product['stock']?></th>
            <th><?php echo $product['fechacreacion']?></th>
            <th><?php echo $product['fechaultimaventa']?></th>
            <th>
                <a type="button" class="btn btn-primary btn-sm boton " href="edit.php?id=<?php echo $product['id']?>" target="blank">Editar</a>
                <a type="button" class="btn btn-primary btn-sm boton" href="delete.php?id=<?php echo $product['id']?>" target="blank">Eliminar</a>
            </th>
        </tr>
        <?php
        }

    }
        ?>
          </tbody>
    </table>
</div>
</body>
<!------------------------------------------------------------------------JavaScript ----------------------------------------------------------------->
<!------------------------------------------------------ jQuery first, then Popper.js, then Bootstrap JS --------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
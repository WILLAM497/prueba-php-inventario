<?php
require_once('../modelo/administrador.php');

if($_POST){
    $Modelo = new administrador();
    $nombre=$_POST['Nombre'];
    $referencia=$_POST['Referencia'];
    $precio=$_POST['Precio'];
    $peso=$_POST['Peso'];
    $categoria=$_POST['Categoria'];
    $stock=$_POST['Stock'];
    $fechacreacion = date('y-m-d');
    $fechaultimaventa=$_POST['Fechaultimaventa'];
    $Modelo->add($nombre,$referencia,$precio,$peso,$categoria,$stock,$fechacreacion,$fechaultimaventa);

}else{

    header('Location: ../index.php');
}


?>
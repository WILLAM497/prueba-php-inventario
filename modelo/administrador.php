<?php
require_once('../conexion.php');
class administrador extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add( $nombre, $referencia, $precio, $peso, $categoria, $stock, $fechacreacion, $fechaultimaventa){
      $statement = $this->db->prepare ("INSERT INTO producto (nombre, referencia, precio, peso, categoria, stock, fechacreacion, fechaultimaventa) VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, :fechacreacion, :fechaultimaventa)");
      $statement->bindParam(':nombre',$nombre);
      $statement->bindParam(':referencia',$referencia);
      $statement->bindParam(':precio',$precio);
      $statement->bindParam(':peso',$peso);
      $statement->bindParam(':categoria',$categoria);
      $statement->bindParam(':stock',$stock);
      $statement->bindParam(':fechacreacion',$fechacreacion);
      $statement->bindParam(':fechaultimaventa',$fechaultimaventa);
      if($statement->execute()){
          header('Location:../pages/index.php');
      }else{
        header('Location:../pages/add.php');
      }
    }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT * FROM producto");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM producto WHERE id = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($id, $nombre, $referencia, $precio, $peso, $categoria, $stock, $fechacreacion,$fechaultimaventa){
        $statement = $this->db->prepare("UPDATE producto SET nombre = :nombre, referencia = :referencia, precio = :precio, peso = :peso, categoria = :categoria, stock = :stock, fechacreacion = :fechacreacion, fechaultimaventa = :fechaultimaventa WHERE id = :id");
        $statement->bindParam(':id',$id);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':referencia',$referencia);
        $statement->bindParam(':precio',$precio);
        $statement->bindParam(':peso',$peso);
        $statement->bindParam(':categoria',$categoria);
        $statement->bindParam(':stock',$stock);
        $statement->bindParam(':fechacreacion',$fechacreacion);
        $statement->bindParam(':fechaultimaventa',$fechaultimaventa);
        $statement->execute();
        if($statement->execute()){
            header('Location:../pages/index.php');
        }else{
          header('Location:../pages/edit.php');
        }

    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM producto WHERE id = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../pages/index.php');
        }else{
          header('Location:../pages/delete.php');
        }
    }

}


?>
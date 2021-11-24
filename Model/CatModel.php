<?php

class CatModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valTablaCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
     }

     
     ////////////////////// Usuario administrador/////////////////////

     
      function insertarCategorias($nombre_c,$tipo_c){
        $sentencia = $this->db->prepare('INSERT INTO categoria (id_categoria,nombre_categoria,tipo_categoria) VALUES (NULL,?,?)');
        $sentencia->execute(array($nombre_c,$tipo_c));
     }

     function editarCategoria($id,$nombre_c,$tipo_c){
        $sentencia = $this->db->prepare("UPDATE categoria SET nombre_categoria = ?, tipo_categoria = ?  WHERE id_categoria=?");
        $sentencia->execute(array($nombre_c,$tipo_c,$id));
     }


     function borrarCategoria($id){
      $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
      $sentencia->execute(array($id));
     }
}

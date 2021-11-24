<?php
 
 class ProdModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valTablaProductos(){
        $sentencia = $this->db->prepare("SELECT * FROM producto");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
     }

     function valTablaProdbyCat($id){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria=?");
        $sentencia->execute(array($id));
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
     }//productos por categoria

     function productoDetalle($id){
         $sentencia = $this->db->prepare( "SELECT * FROM producto WHERE id_producto=?");
         $sentencia->execute(array($id));
         $productoDet = $sentencia->fetch(PDO::FETCH_OBJ);
         return $productoDet;
     }// detalle del producto
     
     ////////////////////// Usuario administrador/////////////////////

     function agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria){
        $sentencia = $this->db->prepare('INSERT INTO producto(id_producto,nombre_p,marca_p,precio_p,stock_p,id_categoria) VALUES (NULL,?,?,?,?,?)');
        $sentencia->execute(array($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria));
     }


     function editarProducto($id,$nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria){
        $sentencia = $this->db->prepare("UPDATE producto SET nombre_p= ?, marca_p = ?, precio_p = ?, stock_p = ? , id_categoria = ? WHERE id_producto =?");
        $sentencia->execute(array($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria,$id));
     }


     function eliminarProducto($id){
        $sentencia = $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
        $sentencia->execute(array($id));
     }

}

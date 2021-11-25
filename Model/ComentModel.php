<?php

class ApiComentModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    public function obtenerComentariosDB(){
        $sentencia = $this->db->prepare("SELECT * FROM comentario");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;//solo voy a traer los comentarios de un producto en especial
    }
    public function obtenerComentario($id){
        $sentencia = $this->db->prepare("SELECT FROM comentario WHERE id_coment = $id ");
        $sentencia->execute();
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }
    public function enviarComenteario($id_producto,$comentario,$fecha,$puntaje){
        $sentencia = $this->db->prepare("INSERT INTO comentario(id_producto,comentario,fecha,puntaje) VALUES(?,?,?,?)");
        $sentencia->execute(array($id_producto,$comentario,$fecha,$puntaje));
    }

    public function borrarComentario($id){
        $sentencia = $this->db->prepare('DELETE FROM comentario WHERE id_coment=?');
        $sentencia->execute(array($id));
    }

}
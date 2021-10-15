<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    
   function registrar($nombreUsuario,$contraseña){
    $query = $this->db->prepare('INSERT INTO user (email_user, pass_user) VALUES (? , ?)');
    $query->execute(array($nombreUsuario,$contraseña));
   }

    function obtenerUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE email_user= ?");
        $sentencia->execute(array($user));
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }
 
}

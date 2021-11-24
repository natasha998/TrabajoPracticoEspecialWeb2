<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    
   function registrarUsuario($userEmail,$userName,$rol_user,$date,$password){
        $query = $this->db->prepare('INSERT INTO user (email_user,name_user,rol_user,date_user,pass_user) VALUES (?,?,?,?,?)');
        $query->execute(array($userEmail,$userName,$rol_user,$date,$password));
   }

   function verificarNewUser($email){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE email_user= ?");
        $sentencia->execute(array($email));
        $email_user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $email_user;
   }
    function obtenerUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE email_user= ?");
        $sentencia->execute(array($user));
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function userComun($tipo_user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE rol_user = ?");
        $sentencia->execute(array($tipo_user));
        $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }

    function asignarRol($new_rol,$id){
        $sentencia = $this->db->prepare("UPDATE user SET rol_user = ? WHERE id_user=?");
        $sentencia->execute(array($new_rol,$id));
    }

    function borrarUsuario($id){
        $sentencia = $this->db->prepare('DELETE FROM user WHERE id_user=?');
        $sentencia->execute(array($id));
    }
 
}

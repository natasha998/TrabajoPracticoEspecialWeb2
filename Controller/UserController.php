<?php

require_once "./Model/userModel.php";
require_once "./View/LoginView.php";

class UserController{
    
     private $model;
     private $view; 

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function verificarLogin(){
        if (!empty($_POST['email_user'])||!empty($_POST['name_user'])&& !empty($_POST['password'])) {
            $userName = $_POST['email_user'];
            $passwordUser = $_POST['password'];
            $user = $this->model->obtenerUser($userName);
            if (password_verify($passwordUser, $user->pass_user)) {
                session_start();
                $_SESSION["email_user"] = $user;// guarda la sesion que necesito mantener
                $this->view->showLogin($user->rol_user);
                if($user->rol_user == "administrador"){
                    header("Location: " . BASE_URL . "lista-de-usuarios");
                }else{
                    $this->view->mostrarHome();
                }
            } else {
                $this->view->showLogin($session = "Error Contraseña incorrecta");
            }
        }else{
            $this->view->showLogin($session ="Error");
        }
    }

    function verificarNewUser(){
        if (!empty($_POST['email'])){
            $email = $_POST['email'];
            if($this->model->verificarNewUser($email)!=null){
                return true ;    
            }else{
                return false;
            }
        }
            
    }

    function registrarUsuario(){
            if (!empty($_POST['nombre'])&& !empty($_POST['fechaDeNacimiento'])&&!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['passwordConfirm'])){
                $userName = $_POST['nombre'];
                $date = $_POST['fechaDeNacimiento'];
                $userEmail = $_POST['email'];
                $password = $_POST['password'];
                $passwordConfirm = $_POST['passwordConfirm'];
                $rol = "usuario";
                if($this->verificarNewUser()){
                    if($password === $passwordConfirm){
                        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                        $this->model->registrarUsuario($userEmail,$userName,$rol,$date,$password);
                        $this->view->estadoRegistro($estadoRegistro = "Ingreso");//ok
                    }else{
                        $this->view->estadoRegistro($estadoRegistro = "Contraseña incorrecta");//contraseñas no coinsiden
                    }
                }else{
                    $this->view->estadoRegistro($estadoRegistro = "Ya existe el usuario");//Usuario Existente
                }
            }else{
               $this->view->estadoRegistro($estadoRegistro = "Datos invalidos");//Datos ingresados no validos
            }
        
       
    }

    function listarUsuarios(){
        $usuarios = $this->model->userComun($tipo_user = 'usuario');//lista de usuarios de rol usuario
        $this->view->listarUsuarios($usuarios);
        //cambio el rol en el model 
    }

    function borrarUsuario($id){
        $this->model->borrarUsuario($id);//tengo que poner un cartel de usuario borrado
        header("Location: " . BASE_URL . "lista-de-usuarios");
    }
    function asignarRol($id){
        $this->model->asignarRol($new_rol = "administrador",$id);//tengo que poner un cartel de usuario borrado
        header("Location: " . BASE_URL . "lista-de-usuarios");
    }


    function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "home");
    }




}

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

    function crearUsuario(){
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $userName = $_POST['user'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->registrar($userName, $userPassword);
            $this->view->showLogin("", "Usuario registrado");
        }
    }

    function verificarLogin(){

        if (!empty($_POST['userIn']) && !empty($_POST['password'])) {
            $userName = $_POST['userIn'];
            $passwordUser = $_POST['password'];

            $user = $this->model->obtenerUser($userName);
           
            if (password_verify($passwordUser, $user->pass_user)) {
                session_start();
                $_SESSION["userIn"] = $user;
                $this->view->mostrarHome();
                var_dump("Inicio");

            } else {
                $this->view->showLogin("","No se pudo iniciar");
                var_dump("no inicio");
            }

        }
    }


}

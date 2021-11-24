<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();//inicio session
        if(!isset($_SESSION["email_user"])){//verifico que el usuario fue ingresado
            header("Location: ".BASE_URL."login"); 
            die();
        }
    }
}
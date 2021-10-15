<?php
require_once './libs/Smarty.class.php';

class LoginView{

    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }


    function showLogin($sesion = ""){
        $this->smarty->assign('sesion', $sesion);
        $this->smarty->display('templetes/usuario-admin.tpl');
    }
    
    function mostrarHome(){
        $this->smarty->assign('home', 'Home');
        $this->smarty->display('templetes/home.tpl');
    }
}



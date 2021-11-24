<?php
require_once './libs/smarty/Smarty.class.php';

class LoginView{

    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }


    function showLogin($session = ''){
        $this->smarty->assign('session', $session);
        $this->smarty->display('templetes/usuario-admin.tpl');
    }
    
    function mostrarHome(){
        $this->smarty->assign('home', 'Home');
        $this->smarty->display('templetes/home.tpl');
    }

    function estadoRegistro($estado){
        if($estado == "Ingreso"){
            $this->smarty->display('templetes/home.tpl');
        }else{
            $this->smarty->assign('registro',$estado);
            $this->smarty->display('templetes/registro.tpl');
        }
        
        
    }

    function listarUsuarios($usuarios){
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templetes/usuarios.tpl');
    
    }

}



<?php

require_once './libs/Smarty.class.php';

class CatView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarTablaCategorias($categorias){

        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templetes/categorias.tpl');
    } 


    function mostrarCategorias(){
        header("Location: ".BASE_URL."categorias");
    }

    
}
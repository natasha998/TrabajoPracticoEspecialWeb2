<?php

require_once './libs/smarty/Smarty.class.php';

class CatView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarTablaCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templetes/categorias.tpl');
    } 
    function errorAlcargar(){
        $this->smarty->assign('error', 'No se pudo cargar');
        $this->smarty->display('templetes/error.tpl');
    } 

    function mostrarCategorias(){
        header("Location: ".BASE_URL."categorias");
    }

    function mostrarHome(){
        $this->smarty->display('templetes/home.tpl');
    }
    
}
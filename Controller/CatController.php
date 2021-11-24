<?php

require_once "./Model/CatModel.php";
require_once "./View/CatView.php";

require_once "./Helpers/AuthHelper.php";

class CatController{
    private $CatModel;
    private $CatView;

    private $authHelper; 

    function __construct(){

        $this->CatModel= new  CatModel();
        $this->CatView = new  CatView();

        $this->authHelper = new AuthHelper();
    }

    //Categorias

    function mostrarHome(){
       $this->CatView->mostrarHome();
    }

    function mostrarTablaCategoria(){
        $categorias = $this->CatModel->valTablaCategorias();
        $this->CatView->mostrarTablaCategorias($categorias);
    }

 
    //Usuario administrador//
   
    function insertarCategorias(){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST["nombre_c"])&&isset($_POST["tipo_c"])){
            if(!empty($_POST["nombre_c"])&&!empty($_POST["tipo_c"])){
                $nombre_C = $_POST["nombre_c"];
                $tipo_c = $_POST["tipo_c"];
                $this->CatModel->insertarCategorias($nombre_C, $tipo_c);
                $this->CatView->mostrarCategorias();
            }else{
                $this->CatView->errorAlcargar();            }
            }else{
                $this->CatView->errorAlcargar();
            }
            
    }

    function editarCat($id){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST["nombre_c_ed"])&&!empty($_POST["tipo_c_ed"])){
            $nombre_C = $_POST["nombre_c_ed"];
            $tipo_c = $_POST["tipo_c_ed"];
            $this->CatModel->editarCategoria($id,$nombre_C,$tipo_c);
            $this->CatView->mostrarCategorias();
        }else{
            $this->CatView->errorAlcargar();//Pasar variable por parametro indicando el error exacto
        }
    }

    function borrarCat($id){
        $this->authHelper->checkLoggedIn();
        $this->CatModel->borrarCategoria($id);
        $this->CatView->mostrarCategorias();
    
    }


    
}
<?php

require_once "./Model/CatModel.php";
require_once "./View/CatView.php";

require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

require_once "./Helpers/AuthHelper.php";

class CatController{
    private $CatModel;
    private $CatView;
    
    private $ProdModel;
    private $ProdView;

    private $authHelper; 



    function __construct(){
        $this->CatModel= new  CatModel();
        $this->CatView = new  CatView();

        $this->ProdModel = new ProdModel();
        $this->ProdView = new ProdView();

        $this->authHelper = new AuthHelper();
        }


    //Categorias

    function mostrarTablaCategoria(){
        $categorias = $this->CatModel->valTablaCategorias();
        $this->CatView->mostrarTablaCategorias($categorias);
    }


    //Productos

    
    function tablaProducto(){
        $productos = $this->ProdModel->valTablaProductos();
        $categorias = $this->CatModel->valTablaCategorias();
        $this->ProdView->mostrarTablaCompleta($productos,$categorias);
    }

    function mostrarTablaProductosByCat($id){
        
        $productos = $this->ProdModel->valTablaProdByCat($id);
        $this->ProdView->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->ProdModel->productoDetalle($id_p);
        $categoria = $this->CatModel->valTablaCategorias();
        $this->ProdView->verProducto($producto,$categoria);
    }


 
    ////////////////////Usuario administrador//////////////
     
    // Categoria

    function insertarCategorias(){
        
        $this->authHelper->checkLoggedIn();

        if(isset($_POST["nombre_c"])&&isset($_POST["tipo_c"])){
            if(!empty($_POST["nombre_c"])&&!empty($_POST["tipo_c"])){
                $nombre_C = $_POST["nombre_c"];
                $tipo_c = $_POST["tipo_c"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->CatModel->insertarCategorias($nombre_C, $tipo_c);
        $this->CatView->mostrarCategorias();
    }


    
    function editarCat($id){
        
        $this->authHelper->checkLoggedIn();

        if(!empty($_POST["nombre_c_ed"])&&!empty($_POST["tipo_c_ed"])){
                $nombre_C = $_POST["nombre_c_ed"];
                $tipo_c = $_POST["tipo_c_ed"];
         }else{
             echo "Error";
         }

        var_dump($nombre_C + $tipo_c);
        $this->CatModel->editarCategoria($id,$nombre_C,$tipo_c);
        $this->CatView->mostrarCategorias();

    }

    function borrarCat($id){
        
        $this->authHelper->checkLoggedIn();
         
        $this->CatModel->borrarCategoria($id);
        $this->CatView->mostrarCategorias();
    }


    /// Productos

    function agregarProducto(){
        
        $this->authHelper->checkLoggedIn();

        if(isset($_POST["nombre"])&&(isset($_POST["marca"])&&isset($_POST["precio"])&&isset($_POST["stock"])&&isset($_POST["categoria"]))){
            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->ProdModel->agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        $this->ProdView->mostrarProductos();
        
    } 

    
    function editarProd($id){

        $this->authHelper->checkLoggedIn();

         if(!empty($_POST["nombre_ed"])&&(!empty($_POST["marca_ed"])&&!empty($_POST["precio_ed"])&&!empty($_POST["stock_ed"]))){
                $nombre_p = $_POST["nombre_ed"];
                $marca_p = $_POST["marca_ed"];
                $precio_id = $_POST["precio_ed"];
                $stock_id = $_POST["stock_ed"];
                $id_categoria = $_POST["categoria_ed"];
         }else{
             echo "Error";
         }
        $this->ProdModel->editarProducto($id,$nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        header("Location: ".BASE_URL."productos"); 

    }

    function borrarProd($id){

        $this->authHelper->checkLoggedIn();
        
        $this->ProdModel->eliminarProducto($id);
        header("Location: ".BASE_URL."productos"); 
        
    }
}
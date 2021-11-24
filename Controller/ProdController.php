<?php

require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

require_once "./Model/CatModel.php";


class ProdController{

    private $prodModel;
    private $prodView;
    private $catModel;

    private $authHelper;

    function __construct(){
        $this->prodModel = new ProdModel();
        $this->prodView = new ProdView();

        $this->catModel = new CatModel();
        $this->authHelper = new AuthHelper();
    }

    function tablaProducto(){
        $productos = $this->prodModel->valTablaProductos();
        $categorias = $this->catModel->valTablaCategorias();
        $this->prodView->mostrarTablaCompleta($productos,$categorias);
    }

    function mostrarTablaProductosByCat($id){
        
        $productos = $this->prodModel->valTablaProdByCat($id);
        $this->prodView->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->prodModel->productoDetalle($id_p);
        $categoria = $this->catModel->valTablaCategorias();
        $this->prodView->verProducto($producto,$categoria);
    }


    // Usuario Administrador//

    function agregarProducto(){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST["nombre"])&&(isset($_POST["marca"])&&isset($_POST["precio"])&&isset($_POST["stock"])&&isset($_POST["categoria"]))){
            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
                $this->prodModel->agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
                $this->prodView->mostrarProductos();
            }else{
                $this->prodView->errorAlcargar();
            }
        }else{
            $this->prodView->errorAlcargar();  
        }
    } 

    
    function editarProd($id){
        $this->authHelper->checkLoggedIn();
            if(!empty($_POST["nombre_ed"])&&(!empty($_POST["marca_ed"])&&!empty($_POST["precio_ed"])&&!empty($_POST["stock_ed"]))){
                $nombre_p = $_POST["nombre_ed"];
                $marca_p = $_POST["marca_ed"];
                $precio_id = $_POST["precio_ed"];
                $stock_id = $_POST["stock_ed"];
                $id_categoria = $_POST["categoria"];
                $this->prodModel->editarProducto($id,$nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
                $this->prodView->mostrarProductos();
            }else{
                $this->prodView->errorAlcargar();
            }
    }

    function borrarProd($id){
        $this->authHelper->checkLoggedIn();
        $this->prodModel->eliminarProducto($id);
        header("Location: ".BASE_URL."productos");     
    }
}
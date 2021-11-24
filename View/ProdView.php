<?php

require_once './libs/smarty/Smarty.class.php';

class ProdView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function mostrarTablaCompleta($productos,$categorias){
        $this->smarty->assign('titulo','Lista de productos');
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categorias',$categorias);
 
        $this->smarty->display('templetes/productos.tpl');
    }//le tengo que pasar las categorias para poder mostarlas en la tabla de los productos a agregar

    function mostrarTablaProductos($productos){
        $this->smarty->assign('titulo', "lista de productos por categoria");
        $this->smarty->assign('productos',$productos);

        $this->smarty->display('templetes/productos.tpl');

    }

    function verProducto($producto,$categoria){
        $this->smarty->assign('titulo', "Producto Unico");

        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categoria',$categoria);

        $this->smarty->display('templetes/producto-detalle.tpl');
    }

    function mostrarProductos(){
        header("Location: ".BASE_URL."productos");
    }
    
    function errorAlcargar(){
        $this->smarty->assign('error', 'No se pudo cargar');
        $this->smarty->display('templetes/error.tpl');
    } 
}

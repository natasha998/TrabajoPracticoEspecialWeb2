<?php

require_once "./Controller/CatController.php";
require_once "./Controller/UserController.php";
require_once "./Helpers/AuthHelper.php";



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$CatController = new CatController();
$UserController = new UserController();
$AuthHelper = new AuthHelper();




// determina que camino seguir según la acción
switch ($params[0]) {
     case 'home': 
       $CatController->mostrarTablaCategoria();
    break;
     case 'categorias': 
        $CatController->mostrarTablaCategoria();
     break;
     case 'agregar-categorias':
        $CatController->insertarCategorias();
        break;
     case 'productos':
        $CatController->tablaProducto();
        break;
     case 'productos-por-categoria':
        $CatController->mostrarTablaProductosByCat($params[1]);
     break;
      case 'editar-cat':
         $CatController->editarCat($params[1]);
      break;
      case 'borrar-cat':
         $CatController->borrarCat($params[1]);
      break;
      case 'agregar-producto':
         $CatController->agregarProducto();
      break;

      case 'editar-prod':
         $CatController->editarProd($params[1]);
      break;
      case 'borrar-prod':
         $CatController->borrarProd($params[1]);
      break;
      case 'detalle-producto':
         $CatController->verProducto($params[1]);
      break;
      case 'registrar':
         $UserController->crearUsuario();
       break;
      case 'login':
         $UserController->showLogin();
       break;
     case 'acceso':
        $UserController->verificarLogin();
      break;
      case 'logout':
         $AuthHelper->logout();
         break;
    default: 
        echo('404 Page not found'); 
        break;
}

?>

       
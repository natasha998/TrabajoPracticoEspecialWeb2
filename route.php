<?php

require_once "./Controller/CatController.php";
require_once "./Controller/ProdController.php";
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
$ProdController = new ProdController();
$UserController = new UserController();





// determina que camino seguir según la acción
switch ($params[0]) {
     case 'home': 
       $CatController->mostrarHome();
    break;
     case 'categorias': 
        $CatController->mostrarTablaCategoria();
     break;
     case 'agregar-categorias':
        $CatController->insertarCategorias();
        break;
     case 'productos':
        $ProdController->tablaProducto();
        break;
     case 'productos-categoria':
        $ProdController->mostrarTablaProductosByCat($params[1]);
     break;
      case 'editar-cat':
         $CatController->editarCat($params[1]);
      break;
      case 'borrar-cat':
         $CatController->borrarCat($params[1]);
      break;
      case 'agregar-producto':
         $ProdController->agregarProducto();
      break;

      case 'editar-prod':
         $ProdController->editarProd($params[1]);
      break;
      case 'borrar-prod':
         $ProdController->borrarProd($params[1]);
      break;
      case 'detalle-producto':
         $ProdController->verProducto($params[1]);
      break;
      case 'login':
         $UserController->showLogin();
       break;
     case 'acceso':
        $UserController->verificarLogin();
      break;
      case 'registrar':
         $UserController->registrarUsuario();
         break;
      case 'borrar':
         $UserController->borrarUsuario($params[1]);
         break;
      case 'cambiar-rol':
         $UserController->asignarRol($params[1]);
      break;
      case 'lista-de-usuarios':
         $UserController->listarUsuarios();
      break;
      case 'logout':
         $UserController->logout();
         break;
    default: 
        echo('404 Page not found'); 
        break;
}

?>

       
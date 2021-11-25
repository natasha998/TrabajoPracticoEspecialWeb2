<?php
require_once 'libs/Router.php';
require_once 'Api/ApiComentController.php';

$router = new Router();


$router->addRoute('comentarios','GET','ApiComentController','obtenerComentariosDB');
$router->addRoute('comentarios/:ID','GET','ApiComentController','getComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentController', 'eliminarComentarios');
$router->addRoute('comentarios', 'POST', 'ApiComentController', 'crearComentario');

$router->route($_GET["resource"],$_SERVER['REQUEST_METHOD']);



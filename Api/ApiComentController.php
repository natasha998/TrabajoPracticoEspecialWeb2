<?php

require_once "./Model/ComentModel.php";
require_once "./Api/ApiController.php";

class ApiComentController extends ApiController {

    public function __construct() {
      parent::__construct();
        $this->model = new ApiComentModel();
     }

     function obtenerComentariosDB(){
      $comentarios = $this->model->obtenerComentariosDB();
      return $this->view->response($comentarios, 200);
     }

     function getComentario($params = null){
       if(!empty($params)){
          $comentarios = $this->model->obtenerComentariosDB($params[":ID"]);
          return $this->view->response($comentarios ,200);
        }
        else {
          $comentarios = $this->model->obtenerComentariosDB($params[":ID"]);
          if(!empty($comentarios)) {
            return $this->view->response($comentarios,200);
          }else{
            return $this->view->response(' ',404);
          }
        }
    }

    function borrarComentario($params = null){
      $idComentario = $params[":ID"];
      $comentario = $this->model->obtenerComentario($idComentario);//lo llamo para saber si existo y si lo puedo borrar
      if ($comentario) {
          $this->model->borrarComentario($idComentario);
          return $this->view->response("Comentario borrado", 200);
      } else {
          return $this->view->response("el coemntario no existe pruebe con otro", 404);
      }

    }

    function crearComentario(){
      $body = $this->getData();
      if($body){
        if($body->puntaje <= 5 && $body->puntaje>0 && !empty($body->datos)){
          $data= $this->model->enviarComenteario($body->id_producto,$body->comentario,$body->fecha,$body->puntaje);
          if($data){
            return $this->view->response("Comentario agregado con exito", 200);
          }else{
            return $this->view->response("El comentario no pudo ser posteado", 404);
          }
        }
      }else{
        $this->view->response($body,500);
      }
    }

}
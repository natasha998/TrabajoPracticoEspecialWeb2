<?php
require_once "./View/ComentView.php";

abstract class ApiController{
    // solo necesito hacer los comentarios por api rest
    protected $model; // lo instancia el hijo
    protected $view;

    private $data; 

    public function __construct() {
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 
        return json_decode($this->data); 
    }  


}
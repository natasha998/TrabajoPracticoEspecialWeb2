<?php
require_once './libs/smarty/Smarty.class.php';

class ApiView{

    function response($data, $status){
        header("Content-Type: application/json");
        header("HTTP/1.1".$status."".$this->_requestStatus($status));
       echo json_encode($data); 
    }

    private function _requestStatus($code){
        $status = array(
            200 => "OK",
            404 => "Not found",
            500 =>"Internal Server Error",
            501 => "Internal Error"
        );
        return (isset($status[$code]))? $status[$code] : $status[500]; // es un if para comprobar que el estadp no este vacio
    }
}


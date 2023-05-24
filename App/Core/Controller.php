<?php 

class Controller {
    public function model($model){
        require_once "./App/Models/".$model.".php";
        return $model = new $model;
    }
    public function view($view,$data){
        require_once "./App/Views/layouts/".$view.".php";
    }
}

?>
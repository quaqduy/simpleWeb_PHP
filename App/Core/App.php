<?php 

class App{

    public $controller = "Home";
    public $action = "viewHome";
    public $params = [];

    public function __construct(){
        $url = $this->urlHandler();


        //Controller handle
        if(isset($url[0])){
            if(file_exists("./App/Controller/".$url[0].".php")){
                echo'aaa';
                $this->controller = $url[0];
            }
            unset($url[0]);
        }

        require_once "./App/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller;


        //Action handle
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->action = $url[1];
            }
            unset($url[1]);
        }

        //Params handle
        $this->params = $url ? array_values($url) : [];

        //Call controller
        call_user_func_array([$this->controller, $this->action],$this->params);
    }

    function urlHandler(){
        if(isset($_GET['url'])){
            return explode('/',filter_var(trim($_GET['url'],'/')));
        }
    }
}

?>
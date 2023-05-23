<?php 

class Home extends Controller{
    function viewHome(){
        $model = $this->model("Product");
        $data = $model->getProducts();
        $this->view('home',$data);
    }

    function viewDetail(){
        echo "Detail page";
    }
}

?>
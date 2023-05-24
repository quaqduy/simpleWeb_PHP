<?php 

class Home extends Controller{
    function viewHome(){
        $model = $this->model("Product");
        $data = [
            'dataModel'=>$model->getProducts(),
            'viewContent'=>'home'
        ];
        $this->view('layoutHome',$data);
    }

    function viewDetail(){
        echo "Detail page";
    }
}

?>
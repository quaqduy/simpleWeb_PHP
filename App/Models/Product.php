<?php 

class Product extends DB {
    function getProducts(){

        mysqli_select_db($this->conn, $_ENV['DB_DATABASE']);
        mysqli_query($this->conn,"SET NAMES 'utf8'");

        $qr = "SELECT * FROM products";
        $result = mysqli_query($this->conn,$qr);
        $data = [];
        if($result){
            if(mysqli_num_rows($result)>0){
                foreach($result as $row){
                    array_push($data,$row);
                }
            }
        }
        return $data;
    }
}

?>
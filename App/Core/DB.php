<?php 
class DB {
    public $conn;

    // Create connection
    function __construct(){
        $this->conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "<script>console.log('connected successfully')</script>";
       if($this->checkDB()){
            $this->createDB();
            $this->createTable();
       }
    }

    function checkDB(){
        // check if exist database
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".$_ENV['DB_DATABASE']."'";
        $result = $this->conn->query($query);

        if (mysqli_num_rows($result) == 0) {
            return true;
        }
        return false;
   }

    function createDB(){
        $sql = "CREATE DATABASE simpleWeb";
        if ($this->conn->query($sql) === TRUE) {
            echo "<script>console.log('Database created successfully')</script>";
        } else {
            echo "<script>console.log('Error creating database: ". $conn->error."')</script>";
        }
    }


   function createTable(){

        mysqli_select_db($this->conn, $_ENV['DB_DATABASE']);
        mysqli_query($this->conn,"SET NAMES 'utf8'");

        $sql = "CREATE TABLE Products (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            productName VARCHAR(30) NOT NULL,
            price VARCHAR(30) NOT NULL
        )";
        
        if ($this->conn->query($sql) === TRUE) {
          echo "Table created successfully";
        } else {
          echo "Error creating table: " . $this->conn->error."";
        }
   }
   
}

?>
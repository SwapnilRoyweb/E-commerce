<?php
namespace File;
use PDO;
use PDOException;
class Connection{
    public $conn;
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecommerce";
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
           } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function prepareSql($sql){
        return $this->conn->prepare($sql);
    }
}


?>
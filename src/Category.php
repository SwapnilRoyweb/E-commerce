<?php
namespace File;
class Category{
    public function index(){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM category");
        $sql->execute();
        $result = $sql->fetchAll();
        // echo "<pre>";
        // print_r ($result);
        // die();
        return $result;
    }
    public function create($data){
        // print_r($data);
        // die();
        $catagory_name = $data['category_name'];
        $description = $data['c_description'];
        $data = [
        'category_name' => $catagory_name,
        'c_description' => $description];

        $connection = new Connection;
        $connection->connect();
        
        $sql = "INSERT INTO category (category_name, c_description) VALUES (:category_name,:c_description)";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Inserted";
        // session_destroy();
        header("Location:./index.php");
    }
    public function edit($id){
        $id = $_GET['id'];

        $connection = new Connection;
        $connection->connect();
        
        $sql = $connection->prepareSql("SELECT * FROM `category` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function update($data){
        $id = $_GET['id'];
        $catagory_name = $data['category_name'];
        $description = $data['c_description'];
        $data = [
        'category_name' => $catagory_name,
        'c_description' => $description];

        $connection = new Connection;
        $connection->connect();

        $sql = "UPDATE `category` SET category_name=:category_name, c_description=:c_description WHERE id = $id";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Updated";
        // session_destroy();
        header("Location:./index.php");
    }
    public function delete($data){
        $id = $data['id'];

        $connection = new Connection;
        $connection->connect();

        $sql = "DELETE FROM `category` WHERE id = $id";
        $stmt = $connection->prepareSql($sql);
        $result = $stmt->execute();
        session_start();
        $_SESSION['msg'] = "Succsessfully Deleted";
        header("Location: ./index.php");
        return $result;
    }
    public function show($id){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM `category` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
}

?>
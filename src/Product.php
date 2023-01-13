<?php
namespace File;
class Product{
    public function index(){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM product LEFT JOIN category ON product.category_id = category.id");
        $sql->execute();
        $result = $sql->fetchAll();
        // echo "<pre>";
        // print_r($result);
        // die();
        return $result;
    }
    public function create($data){
        // echo "<pre>";
        // print_r($data);
        // die();
        $name = $data['name'];
        $catagory = $data['category_id'];
        $price = $data['price'];
        // image upload
        $imageFile = $_FILES['image']['name'];
        $pathinfo = pathinfo($imageFile);

        $fileBaseName = $pathinfo['basename'];
        $fileName = $pathinfo['filename'];
        $dirName = $pathinfo['dirname'];
        $fileExtension = $pathinfo['extension'];
        $uniqueFile = $fileName.time().$dirName.$fileExtension;

        $targetFile = $_FILES['image']['tmp_name'];
        $docRoot = '/pondit/E-commerce';
        $destination = $_SERVER['DOCUMENT_ROOT'] .$docRoot .'/public/assets/uploads/' . $uniqueFile;
        $fileUploadSuccess = move_uploaded_file($targetFile,$destination);
        // image upload end
        // print_r($imageFile);
        // die();
        $description = $data['description'];

        $data = [
        'name' => $name,
        'category_id' => $catagory,
        'price' => $price,
        'image' => $uniqueFile,
        'description' => $description];

        $connection = new Connection;
        $connection->connect();
        
        $sql = "INSERT INTO product (name, category_id, price, image, description) VALUES (:name, :category_id, :price, :image, :description)";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Inserted";
        header("Location:./index.php");
    }
    public function edit($id){
        $id = $_GET['id'];

        $connection = new Connection;
        $connection->connect();
        
        $sql = $connection->prepareSql("SELECT * FROM product LEFT JOIN category ON product.category_id = category.id WHERE p_id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function update($data){
        $id = $_GET['id'];
        $name = $data['name'];
        $catagory = $data['category_id'];
        $price = $data['price'];
        $description = $data['description'];
        $data = [
        'name' => $name,
        'category_id' => $catagory,
        'price' => $price,
        'description' => $description];

        $connection = new Connection;
        $connection->connect();

        $sql = "UPDATE `product` SET name = :name, category_id = :category_id, price = :price, description = :description WHERE p_id = $id";
        $stmt = $connection->prepareSql($sql);
        $result = $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Updated";
        header("Location:./index.php");
        // return $result;
    }
    public function delete($data){
        $id = $data['p_id'];

        $connection = new Connection;
        $connection->connect();

        $sql = "DELETE FROM `product` WHERE p_id = $id";
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

        $sql = $connection->prepareSql("SELECT * FROM product LEFT JOIN category ON product.category_id = category.id WHERE p_id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
}

?>
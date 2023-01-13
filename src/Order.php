<?php
namespace File;
class Order{
    public function index(){
        // $p_id = $_POST['p_id'];
        // $image = $_POST['image'];
        // $product_name = $_POST['product_name'];
        // $category_name = $_POST['category_name'];
        // $price = $_POST['price'];
        // $qty = $_POST['quantity'];
        // $description = $_POST['description'];
        // $subtotal = round($price * $qty); 
        $userid = $_SESSION['authUser']['id'];
        // echo "<pre>";
        // print_r($userid);
        // die();
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM orders WHERE user_id = :user_id");
        $sql->execute($data = ['user_id' => $userid]);
        $result = $sql->fetchAll();
        // echo "<pre>";
        // print_r($result);
        // die();
        return $result;
    }
       
    public function create($data){
        // print_r($data);
        // die();
        $p_id = $data['p_id'];
        $userid = $data['user_id'];
        $image = $data['image'];
        $product_name = $data['product_name'];
        $category_name = $data['category_name'];
        $price = $data['price'];
        $qty = $data['quantity'];
        $description = $data['description'];
        $subtotal = $data['subtotal'] = round($data['price'] * $data['quantity']);

        $connection = new Connection;
        $connection->connect();

        $sql = "SELECT quantity FROM orders WHERE p_id = :p_id AND user_id = :user_id";
        $data = ['p_id' => $p_id, 'user_id' => $userid];
        $stmt = $connection->prepareSql($sql);
        $stmt -> execute($data);
        $result = $stmt->fetch();

        if($result){
            $existingQty = $result['quantity'];
        }else{
            $existingQty = 0;
        }
         if ($existingQty == 0){    
        $data = [
            'p_id' => $p_id,
            'user_id' => $userid,
            'image' => $image,
            'product_name' => $product_name,
            'category_name' => $category_name,
            'price' => $price,
            'quantity' => $qty,
            'description' => $description,
            'subtotal' => $subtotal];
        
        $connection = new Connection;
        $connection->connect();

        $sql = "INSERT INTO orders (p_id, user_id, image, product_name, category_name,  price, quantity, subtotal, description) VALUES (:p_id, :user_id, :image, :product_name, :category_name, :price, :quantity, :subtotal, :description)";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        header("Location:./buy.php");
     }else{
        $connection = new Connection;
        $connection->connect();

        $sql = "UPDATE orders SET quantity=:quantity, subtotal = :subtotal WHERE p_id = :p_id AND user_id = :user_id";
        $data = ['quantity' => $qty, 'subtotal' => $subtotal, 'p_id' => $p_id, 'user_id' => $userid];
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Updated";
        // session_destroy();
        header("Location:./buy.php");
        }
    }
    
    // public function update($data){
    //     $p_id = $data['p_id'];
    //     $image = $data['image'];
    //     $product_name = $data['product_name'];
    //     $category_name = $data['category_name'];
    //     $price = $data['price'];
    //     $qty = $data['quantity'];
    //     $description = $data['description'];
    //     $data = [
    //         'p_id' => $p_id,
    //         'image' => $image,
    //         'product_name' => $product_name,
    //         'category_name' => $category_name,
    //         'price' => $price,
    //         'quantity' => $qty,
    //         'description' => $description];

    //     $connection = new Connection;
    //     $connection->connect();

    //     $sql = "UPDATE `orders` SET p_id=:p_id, image=:image, product_name=:product_name, category_name=:category_name, price=:price, quantity=:quantity, description=:description WHERE id = $id";
    //     $stmt = $connection->prepareSql($sql);
    //     $stmt->execute($data);
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Updated";
    //     // session_destroy();
    //     header("Location:./index.php");
    //     }
    // }
    public function edit($id){
        $id = $_GET['id'];

        $connection = new Connection;
        $connection->connect();
        
        $sql = $connection->prepareSql("SELECT * FROM `orders` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function destroy($data){
        $id = $data['id'];

        $connection = new Connection;
        $connection->connect();

        $sql = "DELETE FROM `orders` WHERE id = $id";
        $stmt = $connection->prepareSql($sql);
        $result = $stmt->execute();
        session_start();
        $_SESSION['msg'] = "Succsessfully Deleted";
        header("Location: ./buy.php");
        return $result;
    }
    public function show($id){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM `orders` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
}


?>
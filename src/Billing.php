<?php
namespace File;
class Billing{
    public function index(){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM billing_details");
        $sql->execute();
        $result = $sql->fetchAll();
        // echo "<pre>";
        // print_r ($result);
        // die();
        return $result;
    }
    public function create($data){
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $pre_add = $data['present_address'];
        $per_add = $data['permanent_address'];
        $city = $data['city'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $payment_method = $data['payment_method'];
        $delivery_method = $data['delivery_method'];
        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'present_address' => $pre_add,
            'permanent_address' => $per_add,
            'city' => $city,
            'email' => $email,
            'contact_number' => $contact_number,
            'payment_method' => $payment_method,
            'delivery_method' => $delivery_method];
            
            $connection = new Connection;
            $connection->connect();
            
            $sql = "INSERT INTO billing_details (first_name, last_name, present_address, permanent_address, city, email, contact_number, payment_method, delivery_method) VALUES (:first_name,:last_name, :present_address, :permanent_address, :city, :email, :contact_number, :payment_method, :delivery_method)";
            $stmt = $connection->prepareSql($sql);
            $result = $stmt->execute($data);
            // print_r($data);
            // die();
            // return $result;
            // session_start();
            // $_SESSION['msg'] = "Succsessfully Inserted";
            // // session_destroy();
            header("Location:./thanks.php");
        }
    // public function edit($id){
    //     $id = $_GET['id'];

    //     $connection = new Connection;
    //     $connection->connect();
        
    //     $sql = $connection->prepareSql("SELECT * FROM `billing_details` WHERE id = $id");
    //     $sql->execute();
    //     $result = $sql->fetch();
    //     return $result;
    // }
    // public function update($data){
    //     $id = $_GET['id'];
    //     $catagory_name = $data['category_name'];
    //     $description = $data['c_description'];
    //     $data = [
    //     'category_name' => $catagory_name,
    //     'c_description' => $description];

    //     $connection = new Connection;
    //     $connection->connect();

    //     $sql = "UPDATE `billing_details` SET category_name=:category_name, c_description=:c_description WHERE id = $id";
    //     $stmt = $connection->prepareSql($sql);
    //     $stmt->execute($data);
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Updated";
    //     // session_destroy();
    //     header("Location:./index.php");
    // }
    // public function delete($data){
    //     $id = $data['id'];

    //     $connection = new Connection;
    //     $connection->connect();

    //     $sql = "DELETE FROM `category` WHERE id = $id";
    //     $stmt = $connection->prepareSql($sql);
    //     $result = $stmt->execute();
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Deleted";
    //     header("Location: ./index.php");
    //     return $result;
    // }
    public function show($id){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM `billing_details` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
}

?>
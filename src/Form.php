<?php
namespace File;
class Form{
    public function index(){
        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM admin");
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }
    public function create($data){
        // print_r($data);
        // die();
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];
        $pre_add = $data['present_address'];
        $per_add = $data['permanent_address'];
        $contact = $data['contact_number'];
        $gender = $data['gender'];
        $city = $data['city'];
        $zip = $data['zip'];
        $role = 0;
        //image upload
        $imageFile = $_FILES['image']['name'];
        $pathinfo = pathinfo($imageFile);

        $fileBaseName = $pathinfo['basename'];
        $fileName = $pathinfo['filename'];
        $dirName = $pathinfo['dirname'];
        $fileExtension = $pathinfo['extension'];
        $uniqueFile = $fileName.time().$dirName.$fileExtension;

        $targetFile = $_FILES['image']['tmp_name'];
        $docRoot = '/pondit/E-commerce';
        $destination = $_SERVER['DOCUMENT_ROOT'] .$docRoot .'/public/assets/Users/uploads/' . $uniqueFile;
        $fileUploadSuccess = move_uploaded_file($targetFile,$destination);

        $data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'present_address' => $pre_add,
        'permanent_address' => $per_add,
        'contact_number' => $contact,
        'gender' => $gender,
        'city' => $city,
        'zip' => $zip,
        'image' => $uniqueFile,
        'role' => $role];

        $connection = new Connection;
        $connection->connect();
        
        $sql = "INSERT INTO admin (first_name, last_name, email, password, present_address, permanent_address,  contact_number, gender, city, zip, image, role) VALUES (:first_name, :last_name, :email, :password, :present_address, :permanent_address, :contact_number, :gender, :city, :zip, :image, :role)";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Inserted";
        header("Location:../frontend/user.php");
    }
    public function edit($id){
         $id = $_GET['id'];

        $connection = new Connection;
        $connection->connect();
        
        $sql = $connection->prepareSql("SELECT * FROM `admin` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function update($data){
        $id = $_GET['id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];
        $pre_add = $data['present_address'];
        $per_add = $data['permanent_address'];
        $contact = $data['contact_number'];
        $gender = $data['gender'];
        $city = $data['city'];
        $zip = $data['zip'];
        //image
        $imageFile = $_FILES['image']['name'];
        $pathinfo = pathinfo($imageFile);

        $fileBaseName = $pathinfo['basename'];
        $fileName = $pathinfo['filename'];
        $dirName = $pathinfo['dirname'];
        $fileExtension = $pathinfo['extension'];
        $uniqueFile = $fileName.time().$dirName.$fileExtension;

        $targetFile = $_FILES['image']['tmp_name'];
        $docRoot = '/www/pondit/E-commerce';
        $destination = $_SERVER['DOCUMENT_ROOT'] .$docRoot .'/public/assets/Users/uploads/' . $uniqueFile;
        $fileUploadSuccess = move_uploaded_file($targetFile,$destination);

        $data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'present_address' => $pre_add,
        'permanent_address' => $per_add,
        'contact_number' => $contact,
        'gender' => $gender,
        'city' => $city,
        'zip' => $zip,
        'image' => $uniqueFile];
        $connection = new Connection;
        $connection->connect();

        $sql = "UPDATE `admin` SET first_name=:first_name, last_name=:last_name, email=:email, password=:password, present_address=:present_address, permanent_address=:permanent_address, contact_number=:contact_number, gender=:gender, city=:city, zip=:zip, image=:image WHERE id = $id";
        $stmt = $connection->prepareSql($sql);
        $stmt->execute($data);
        session_start();
        $_SESSION['msg'] = "Succsessfully Updated";
        header("Location:./index.php");
    }
    public function delete($data){
        $id = $data['id'];

        $connection = new Connection;
        $connection->connect();

        $sql = "DELETE FROM admin WHERE id = $id";
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

        $sql = $connection->prepareSql("SELECT * FROM `admin` WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function login($data){
        session_start();
        $email = $data['email'];
        $password = $data['password'];

        $data = [
            $email,
            $password
        ];

        $connection = new Connection;
        $connection->connect();

        $sql = $connection->prepareSql("SELECT * FROM admin Where email LIKE ? AND password LIKE ? ");
        $sql->execute($data);
        $result = $sql->fetch();
        // echo "<pre>";
        // print_r($result['first_name']);
        // die();

        if(!empty($result)) {

            $_SESSION['isValidUser'] = true;
            $authUser = [
                'first_name' => $result['first_name'],
                'last_name' => $result['last_name'],
                'present_address' => $result['present_address'],
                'permanent_address' => $result['permanent_address'],
                'city' => $result['city'],
                'zip' => $result['zip'],
                'contact_number' => $result['contact_number'],
                'email' => $result['email'],
                'image' => $result['image'],
                'id' => $result['id'],
                'role' => $result['role']
            ];
            // echo "<pre>";
            // print_r($authUser);
            // die();
            $_SESSION['authUser'] = $authUser;
            if($authUser['role'] == 1){
                header('Location:../admin/index.php');
            }else{
                header('Location:../frontend/home.php');
            }
            // header('Location:../frontend/home.php');
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            //  header('Location:../fontend/product-details.php');
        } else {
            $_SESSION['isValidUser'] = false;
            header('Location:register.php');
        }

    }
    public function guard()
    {
        //    session_start();
        if ($_SESSION['isValidUser']) {
             //header('Location:../frontend/home.php');
        } else {
            $_SESSION['isValidUser'] = false;
            header('Location:./register.php');
        }
    }
    public function logout()
    {
        if (isset($_POST['logoutButtonName'])) {
            session_destroy();
            // unset($_SESSION['isValidUser']);
            header('Location:./user.php');
        }
    }


}

?>
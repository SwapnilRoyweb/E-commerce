<?php
include_once('../vendor/autoload.php');
$db = new File\Form;

if (isset($_POST['logoutButtonName']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $db->logout($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno</title>
        <!-- Css -->
        <link rel="stylesheet" href="../../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- Header Start -->
    <div class="container-fluid overflow-hidden">
        <div class="row float-end">
            <div class="col-12 me-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-1">
                        <li class="breadcrumb-item"><a href="./user.php" class="text-decoration-none text-dark">Login</a>
                        </li>
                        <li class="breadcrumb-item"><a href="./register.php"
                                class="text-decoration-none text-dark">Register</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark">Help</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark">Feedback</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Navbar -->
    <div class="container-fluid bg-danger">
        <div class="row">
            <div class="col-1">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="./home.php">Home</a></li>
                                <li><a class="dropdown-item" href="#">STORES</a></li>
                                <li><a class="dropdown-item" href="#">PRIVACY POLICY</a></li>
                                <li><a class="dropdown-item" href="#">COMPLAIN</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-2">
                <img src="../public/assets/images/Frontend/image/shwapno-logo.jpg" alt="logo" style="height:50px; width:100px;" class="mt-1">
            </div>
            <div class="col-6">
                <form class="d-flex mt-2">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
            <div class="col-3 m-auto">
                <a href="./buy.php">
                    <button type="button" class="btn float-end" ><i class="fa-solid fa-cart-shopping"></i></button>
                </a>
                <a href="./user.php">
                    <button type="button" class="btn float-end" id="Login"><i class="fa-sharp fa-solid fa-user"></i></button>
                </a>
                <form action="" method="POST">
                    <button type="submit" class="btn btn-outline-dark" name="logoutButtonName">Log Out</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
</body>
</html>
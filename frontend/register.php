<?php
include_once('../vendor/autoload.php');
//use File;
$db = new File\Form;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->create($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno User Login</title>
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <?php include ('./partials/inc/header.php');?>
    <?php 
    // include ('./partials/inc/sidebar.php'); 
    ?>
<div class="container d-flex justify-content-center">
            <div class="card w-75 mt-3">
                <!-- Register Part Start -->
                <div class="container p-3 border border-4 border-dark border-top-0 border-bottom-0 rounded" id="Register">
                    <h4 class="text-center border border-5 border-top-0 border-danger rounded rounded-pill pb-1">Register Your Account</h4>
                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6 mt-3">
                            <label for="inputEmail" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="inputPassword4" class="form-label"><b>Password</b></label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="firstname" class="form-label"><b>First Name</b></label>
                            <input type="text" class="form-control" name="first_name" id="fname" >
                        </div>
                            <div class="col-md-6 mt-2">
                                <label for="Lastname" class="form-label"><b>Last Name</b></label>
                                <input type="text" class="form-control" id="lname" name="last_name">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputAddress" class="form-label"><b>Present Address</b></label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="present_address">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputAddress2" class="form-label"><b>Permanent Address</b></label>
                                <input type="text" class="form-control" id="inputAddress2" name="permanent_address"
                                placeholder="Apartment, studio, or floor">
                            </div>
                                <div class="col-md-4 mt-3">
                                    <label for="Gender" class="form-label"><b>Gender?</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" Value="Male">
                                        <label class="form-check-label" for="gender">
                                        Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender" Value="Female">
                                        <label class="form-check-label" for="gender">
                                        Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault3" name="gender" Value="Trans">
                                        <label class="form-check-label" for="gender">
                                        Transgender
                                        </label>
                                    </div>
                                </div>
                        <div class="col-md-4 mt-4">
                            <label for="inputCity" class="form-label"><b>City</b></label>
                            <select id="inputCity" class="form-select" name="city">
                                <option selected>Chittagong</option>
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Sylhet</option>
                                <option>Mymensingh</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="inputZip" class="form-label"><b>Zip</b></label>
                            <input type="text" class="form-control" id="inputZip" name="zip">
                        </div>
                        <div class="col-md-6 mt-3 me-5">
                            <label for="Phone_number" class="form-label"><b>Contact Number</b></label>
                            <input type="number" class="form-control" id="number" name="contact_number">
                        </div>  
                        <div class="col-md-5 mt-5">
                                <label for="file"><b>Image :</b></label>
                                <input type="file" name="image" id="file">
                        </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-danger">Sign Up</button>
                            </div>
                </form>
                </div>
            </div>
</div>
            <!-- Register Part End -->
            <!-- Login Part Start -->
            <!-- <div class="container mt-3 p-3 border border-5 border-danger border-top-0 border-bottom-0 rounded" id="Login">
                <h4 class="text-center border border-5 border-top-0 border-dark rounded rounded-pill pb-1">Already have an account?</h4>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-dark">Sign In</button>
                    </div>
                </form>
            </div>
        </div> -->
        <!-- Login Part End -->
        <?php include ('./partials/inc/footer.php') ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
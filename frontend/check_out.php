<?php
include_once('../vendor/autoload.php');
//use File;
session_start();
// $form = new File\form;
$db = new File\Order;
$result = $db->index();

$bill = new File\Billing;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bill->create($_POST);
}
// $id = $_GET['id'];
// $result = $db->show($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno Order Form</title>
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <?php include ('./partials/inc/header.php');?>
    <?php include ('./partials/inc/sidebar.php') ?>
<div class="container">
        <div class="row mt-3">
            <div class="col-6">
                <div class="card p-5 bg-light bordered border-3 border-success">
                    <h5 class="bg-success text-white">Personal Information</h5>
                    <form  action="" method="POST">
                                <div class="col-md-6">
                                    <!-- <input type="hidden" name="id" value="<?php echo $id?>"> -->
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" name="first_name" value="<?= $userid=$_SESSION['authUser']['first_name']?>" id="first_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name" value="<?= $userid = $_SESSION['authUser']['last_name']?>" id="last_name">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="present_address" id="inputAddress"
                                    value="<?= $userid = $_SESSION['authUser']['present_address']?>">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" name="permanent_address" id="inputAddress2"
                                    value="<?= $userid = $_SESSION['authUser']['permanent_address']?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="<?= $userid = $_SESSION['authUser']['city']?>" id="inputCity">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Email:</label>
                                    <input type="text" class="form-control" name="email" value="<?= $userid = $_SESSION['authUser']['email']?>" id="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Contact number:</label>
                                    <input type="text" class="form-control" name="contact_number" value="<?= $userid = $_SESSION['authUser']['contact_number']?>" id="contact_number">
                                </div>
                </div>
                    <!-- </form> -->
            </div>
                            <div class="col-3">
                                <div class="card p-3 bordered border-3 border-warning">
                                    <div class="card-body">
                                        <h3 class="card-title bg-warning text-center">Payment Method</h3>
                                        <hr>
                                        <p class="card-text">Select a payment method</p>
                                        <input type="radio" id="Cash_on_Delivery" name="payment_method" value="Cash on Delivery">
                                        <label for="payment_method">Cash on Delivery</label><br>
                                        <input type="radio" id="Bkash" name="payment_method" value="Bkash">
                                        <label for="payment_method">Bkash</label><br>
                                        <input type="radio" id="Online_Payment" name="payment_method" value="Online Payment">
                                        <label for="payment_method">Online Payment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card p-3 bordered border-3 border-danger">
                                    <div class="card-body">
                                        <h3 class="card-title bg-danger text-center text-white">Delivery Method</h3>
                                        <hr>
                                        <p class="card-text">Select a delivery method</p>
                                        <input type="radio" id="Home_Delivery" name="delivery_method" value="Home Delivery">
                                        <label for="Delivery_Method">Home Delivery</label><br>
                                        <input type="radio" id="Pick_up_from_store" name="delivery_method" value="Pick up from store">
                                        <label for="Delivery_Method">Pick up from store</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">Confirm order</button>
                        </div>
                    </form>
</div>
        <?php include ('./partials/inc/footer.php') ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
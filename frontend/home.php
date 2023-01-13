<?php
include_once('../vendor/autoload.php');
//use File;
session_start();
// $db = new File\Category;
// $result = $db->index();

// $cat = new File\Category;
// $category = $cat->index();

$db = new File\Product;
$result = $db->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno</title>
    <!-- Css -->
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php include ('./partials/inc/header.php');?>
    <?php include ('./partials/inc/sidebar.php') ?>
    <marquee behavior="scroll" direction="right" class="bg-danger text-light mt-3">* All prices are approximate.
        Products will be delivered at current store/body price & availability. For any changes, you will get a call from
        16469 before delivery. Please place your complaints (if any) within 24hrs of receiving your delivery.</marquee>
    <!-- Product Start -->
    <div class="container-fluid mt-2" id="Deal_of_the_Day">
        <div class="row d-flex g-2">
                
                    <h3 class="text-center bg-dark text-light rounded rounded-pill border border-5 border-danger border-top-0 p-1">Products</h3>
            <?php
                $i = 0;
                foreach ($result as $data){?>
                <?php $_SESSION['product_id'] = $data['p_id'] ?>
            <div class="col-3" <?php echo ++$i?>>
                <a href="./Order_form.php?id=<?php echo $data['p_id']?>" class="text-decoration-none">
                <div class="card bg-dark">
                    <img src="<?php echo '../public/assets/uploads/'. $data['image'] ?>" height="250px" width="200px" class="card-img-top bg-light" alt="...">
                    <div class="card-body">
                        <p class="card-text text-dark text-center fw-bold fs-4 bg-warning rounded rounded-pill"><?php echo $data['name'] ?></p>
                        <p class="card-text text-light text-center fw-bold">Price : $<?php echo $data['price'] ?></p>
                    </div>
                </div>
                </a>
            </div>
            <?php } ?>
            <!-- <div class="col-3">
                <a href="./Order_form.php">
                    <div class="card bg-dark text-white">
                        <img src="../public/assets/images/Frontend/image/Colgate VED Slider 12 Sep 22.webp" class="card-img" alt="Picture2">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="./Order_form.php">
                    <div class="card bg-dark text-white">
                        <img src="../public/assets/images/Frontend/image/Ispahani Slider 12 Sep 22.webp" class="card-img" alt="Picture3">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="./Order_form.php">
                    <div class="card bg-dark text-white">
                        <img src="../public/assets/images/Frontend/image/Harpic 6 Oct 2022.webp" class="card-img" alt="Picture4">
                    </div>
                </a>
            </div> -->
        </div>
    </div>
    <!-- <div class="container mt-2" id="Electronic_Products">
        <h3 class="text-center bg-info">Electronic Products</h3>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/images.jfif" alt="Product1">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/images (1).jfif" alt="Product2">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/2-in-1-product-image-transparent-background.png.rendition.intel.web.480.270.webp"
                        alt="Product3">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/garage-power-single-family-image.png" alt="Product4">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/products_huawei-inverter_2-6.png" alt="Product5">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/wearables-fashion-bip2.webp" alt="Product6">
                    <a href="./Order_form.php" class="text-center">
                        <button type="button" class="btn btn-primary">
                        Shop now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3" id="Organic_Products">
        <h3 class="text-center bg-info">Organic Products</h3>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Edible Oil.webp" alt="Product1">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Milk & Dairy.webp" alt="Product2">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Personal Care.webp" alt="Product3">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Category-Vegetables.webp" alt="Product4">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Fish.webp" alt="Product5">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Fruits.webp" alt="Product6">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3" id="Fashion_&_Life_Style">
        <h3 class="text-center bg-info">Fashion & Life Style</h3>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (2).webp" alt="Product1">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (3).webp" alt="Product2">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (4).webp" alt="Product3">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (5).webp" alt="Product4">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (6).webp" alt="Product5">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/LS Kurti 19 Sep 2022 (7).webp" alt="Product6">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3" id="Fruits_&_Vegetable_Product">
        <h3 class="text-center bg-info">Fruits & Vegetable Product</h3>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Category-Vegetables.webp" alt="Product1">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/Browse All Categoy-Fruits.webp" alt="Product2">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/5-51151_heart-fruit-png-transparent-image-heart-fruits-and.png" alt="Product3">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/152-1522030_fruits-and-vegetables-png-transparent-png.png" alt="Product4">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/337-3377097_fruits-and-vegetables-png-transparent-png.png" alt="Product5">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="../public/assets/images/Frontend/image/894-8942715_fruits-amp-vegetables-clipart-png-fruit-vegetable-png.png" alt="Product6">
                    <a href="./Order_form.php" class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Shop now
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Product End -->
    <!-- Slide Part2 Start -->
    <div class="container mt-3">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../public/assets/images/Frontend/image/Franchise banner H2 12 Jun 2022.webp" class="d-block w-100" alt="slide1">
                    </div>
                    <div class="carousel-item">
                        <img src="../public/assets/images/Frontend/image/Vision B 29 May 2022.webp" class="d-block w-100" alt="slide2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Slide Part2 End -->
    <!-- 2nd Last Product Part Start -->
    <div class="container-fluid mt-2" id="Voucher_offers">
    <div class="row">
        <h3 class="text-center bg-info">Voucher Offers</h3>
        <div class="col-3">
            <a href="./Order_form.php">
                <div class="card bg-dark text-white">
                    <img src="../public/assets/images/Frontend/image/Noah 6 Oct 2022.webp" class="card-img" alt="Picture1">
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="./Order_form.php">
                <div class="card bg-dark text-white">
                    <img src="../public/assets/images/Frontend/image/Colgate VED Slider 12 Sep 22.webp" class="card-img" alt="Picture2">
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="./Order_form.php">
                <div class="card bg-dark text-white">
                    <img src="../public/assets/images/Frontend/image/Ispahani Slider 12 Sep 22.webp" class="card-img" alt="Picture3">
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="./Order_form.php">
                <div class="card bg-dark text-white">
                    <img src="../public/assets/images/Frontend/image/Harpic 6 Oct 2022.webp" class="card-img" alt="Picture4">
                </div>
            </a>
        </div>
    </div>
</div>
    <!-- 2nd Last Product Part End -->
    <!-- Register Part Start -->
    <!-- <div class="container mt-5 p-3 border border-5 border-dark border-top-0 border-bottom-0 rounded" id="Register">
        <h4 class="text-center bg-danger text-light">Register Your Account</h4>
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
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-outline-danger">Sign Up</button>
            </div>
        </form>
    </div> -->
    <!-- Register Part End -->
    <!-- Login Part Start -->
    <!-- <div class="container mt-5 p-3 border border-5 border-danger border-top-0 border-bottom-0 rounded" id="Login">
        <h4 class="text-center bg-dark text-light border border-5 border-danger border-top-0 border-bottom-0 rounded">Already have an account?</h4>
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
    </div> -->
    <!-- Login Part End -->
    <?php include ('./partials/inc/footer.php') ?>
 
     <!--Modal=Buy now erpor jekhane nia jabe -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buy this Item?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Fill the form for get it
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        Get It
                    </button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal End -->
    <!-- Modal2= For order form -->
    <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please fill all Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                        <div class="col-6">
                        <div class="card p-2">
                            <h5>Personal Information</h5>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Chittagong</option>
                                        <option>Dhaka</option>
                                        <option>Rajshahi</option>
                                        <option>Sylhet</option>
                                        <option>Mymensingh</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Payment Method</h3>
                                    <hr>
                                    <p class="card-text">Select a payment method</p>
                                        <input type="radio" id="Cash" name="fav_language" value="Cash on Delivery">
                                         <label for="html">Cash on Delivery</label><br>
                                         <input type="radio" id="Bkash" name="fav_language" value="Bkash">
                                        <label for="css">Bkash</label><br>
                                         <input type="radio" id="Online" name="fav_language" value="Online Payment">
                                         <label for="javascript">Online Payment</label>
                                </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Confirm order</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal2 End -->
        <!-- Js -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
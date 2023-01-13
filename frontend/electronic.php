<?php
include_once('../vendor/autoload.php');
//use File;
// session_start();
// $db = new File\Category;
// $result = $db->index();

$cat = new File\Category;
$category = $cat->index();

$db = new File\Product;
$result = $db->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno Electronic Products</title>
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php include ('./partials/inc/header.php');?>
    <?php include ('./partials/inc/sidebar.php') ?>
    <!-- Products Start -->
    <div class="container mt-2" id="Electronic_Products">
                    <h3 class="text-center bg-info">Electronic</h3>
        <div class="row">
            <?php
                foreach ($result as $data){?>
        <div class="col-3">
                <a href="./Order_form.php">
                    <div class="card bg-dark text-white">
                        <img src="<?php echo '../public/assets/uploads/'. $data['image'] ?>" class="card-img" alt="Picture1">
                    </div>
                </a>
            </div>
            <?php } ?>
            <!-- <div class="col-2">
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
            </div> -->
        </div>
    </div>
    <!-- Product End -->
    <?php include ('./partials/inc/footer.php') ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
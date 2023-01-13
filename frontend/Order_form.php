<?php
include_once('../vendor/autoload.php');
// use File\;
session_start();
$db = new File\Product;
if (isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = $_SESSION['product_id'];
}
$result = $db->show($id);
$userid = $_SESSION['authUser']['id'];

$form = new File\Form;
$guard = $form->guard();

$order = new File\Order;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order->create($_POST);
}
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
    <div class="container"  id="main">
        <div class="card p-1 mt-2 shadow-lg">
            <h3 class="bg-info text-center text-dark border border-5 border-dark border-top-0 border-bottom-0 rounded rounded-pill">Product Details</h3>
                <div class="card mt-2">
                    <div class="row d-flex g-1">
                        <div class="col-1 bg-warning border border-5 border-dark border-end-0 border-start-0"></div>
                        <div class="col-5 d-flex flex-row">
                            <img src="<?php echo '../public/assets/uploads/'. $result['image'] ?>" height="350px" width="530px"  class="card-img-left bg-dark" alt="image">
                        </div>
                        <div class="col-5 text-center">
                            <div class="mt-5 border border-warning border-5 border-start-0 border-end-0">
                                    <h5 class="card-title mt-3"><?php echo $result['name']?></h5>
                                    <p class="card-text"><b>Category :</b><?php echo $result['category_name']?></p>
                                    <p class="card-text"><?php echo $result['description']?></p>
                                    <p class="card-text"><b>Price : $</b><?php echo $result['price']?></p>

                                    <form action="" method="POST">
                                        <input type="hidden" id="p_id" name="p_id" value="<?php echo $id ?>">
                                        <input type="hidden" id="" name="user_id" value="<?php echo $userid ?>">
                                        <input type="hidden" id="image" name="image" value="<?php echo $result['image'] ?>">
                                        <input type="hidden" name="product_name" id="product_name" value="<?php echo $result['name'] ?>">
                                        <input type="hidden" name="category_name" id="category_name" value="<?php echo $result['category_name']?>">
                                        <input type="hidden" name="price" id="price" value="<?php echo $result['price']?>">

                                        <label for="quantity"><b>Qty</b></label>
                                        <input type="number" name="quantity" id="quantity" value="" style="width: 40px">
                                        <input type="hidden" name="description" id="description" value="<?php echo $result['description']?>">

                                        <!-- <a href="./buy.php?id=<?php echo $result['p_id']?>">
                                    <button class="btn btn-outline-primary mb-3 me-2" type="submit"><span class="me-2"><i class="fa-sharp fa-solid fa-bag-shopping"></i></span>Buy now</button></a> -->
                                    <!-- <a href="./check_out.php"> -->
                                    <button class="btn btn-outline-success mb-2 ms-2" type="submit"><span class="me-2"><i class="fa-sharp fa-solid fa-cart-shopping"></i></span>Add to Cart</button>
                                    <!-- </a> -->
                                    </form>

                                    
                            </div>
                        </div>
                        <div class="col-1 bg-warning border border-5 border-dark border-start-0 border-end-0"></div>
                    </div>
                </div>
        </div>
    </div>
<?php include ('./partials/inc/footer.php') ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
 include_once('../vendor/autoload.php');
//  use File;
 $db = new File\Form;
 session_start();
//   $id = $_GET['id'];
//  $result2 = $db->edit('c_id');
 $guard = $db->guard();

$order = new File\Order;
$result = $order->index();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order->destroy($_POST);
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
<div class="container-fluid">
<section class="container-fluid mt-5">
    <div class="row d-flex">
        <div class="col-8 border  border-5 border-dark border-top-0 border-bottom-0 rounded">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product Id</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 0;
                        $total = 0;
                        foreach ($result as $data){
                        $total += $data['subtotal'];
                    ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><img src="<?php echo '../public/assets/uploads/'.$data['image'] ?>" width="100" height="80" alt='image'></td>
                            <td><?php echo $data['p_id'] ?></td>
                            <td><?php echo $data['product_name'] ?></td>
                            <td><?php echo $data['category_name'] ?></td>
                            <td><?php echo $data['price'] ?></td>
                            <td><?php echo $data['quantity'] ?></td>
                            <td><?php echo $data['subtotal'] ?></td>
                            <td>
                            <form action="" method="post" class="inset-block">
                                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                <button onclick="return confirm('Are you Sure');" class="btn btn-danger mt-3">Remove</button>
                            </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
        <div class="col-4 d-flex flex-row-reverse">
            <div class="w-75 border border-5 border-dark border-start-0 border-end-0 rounded">
                <div class=" ">
                    <h4 class="text-center pt-3">Checkout Summary</h4>
                    <hr>
                    <select id="inputState" class="form-select text-center">
                        <option selected>Dhaka City</option>
                        <option>Chittagong City</option>
                        <option>Rangpur City</option>
                        <option>Barisal City</option>
                        <option>Sylect City</option>
                        <option>Rajshahi City</option>
                    </select>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Subtotal</span>
                        <span class="d-block"><b class="text-success">
                                <?php echo $total?>TK
                            </b></span>
                    </div>
                    <hr>
                    <?php
                        $charge = 100;
                    ?>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Shipping</span>
                        <span class="d-block"><b class="text-success"><?php echo $charge ?>TK</b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Total</span>
                        <span class="d-block"><b class="text-success">
                                <?php echo $total + $charge?>TK
                            </b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block"><b>Payable Total</b></span>
                        <span class="d-block"><b class="text-success"><?php echo $result = $total + 100?>/-</b></span>
                    </div>
                    <hr>
                    <div class="form-check d-flex justify-content-around bg-white mt-3">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" name="gift" id="flexCheckDefault"
                            <?php
                                    if(['gift'] == "checked"){
                                        echo $result + 20;
                                    }
                                    ?>>
                            <label class="form-check-label" for="flexCheckDefault">
                                Gift Wrap for Tk. 20
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center mb-3">
                        <div>
                            <a href="./index.php">
                                <button class="btn btn-outline-primary me-2">Oder as a Gift</button>
                            </a>
                        </div>
                        <div>
                            <a href="./check_out.php">
                                <button class="btn btn-primary">Place Order</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
    <?php include ('./partials/inc/footer.php') ?>
        <script src="../public/assets/css/Frontend/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<!-- <div class="d-flex justify-content-between ps-3 pe-3 bg-light mb-5 mt-5">
                <p class="pt-3"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Select All (1 Items)</p>
                <p class="pt-3">Your Total: <b><?php echo $result['price']?></b></p>
                <p>
                <?php echo $result['name']?>
                </p>
            </div>
            <div class="">
                <div class="bg-white d-flex justify-content-around align-items-center">
                    <div>
                        <img class="img-fluid" src="<?php echo '../public/assets/uploads/'.$result['image'] ?>"
                            width="70" height="60" alt="">
                    </div>
                    <div>
                        <span>
                            <?php echo $result['name']?>
                        </span><br>
                        <span><i class="fa-solid fa-trash"></i></span><br>
                        <small class="text-danger">Only 4 copies available</small>
                    </div>
                    <div>
                        <?php
                            $num = 1;
                        ?>
                        <div class="btn-toolbar justify-content-between" role="toolbar"
                            aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" onClick="<?php $num-- ?>" class="btn btn-outline-dark">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div style="width: 30px;" class="text-center">
                                    <p><b><?php echo "$num"?></b></p>
                                </div>
                                <button type="button" onClick="<?php $num++ ?>" class="btn btn-outline-dark">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p><b>Tk.
                                <?php echo $result['price']?>
                            </b></p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="./index.php">
                            <button class="btn btn-outline-primary me-2">Oder as a Gift</button>
                        </a>
                    </div>
                    <div>
                        <a href="./check_out.php">
                            <button class="btn btn-primary">Place Order</button>
                        </a>
                    </div>
                </div>
            </div> -->
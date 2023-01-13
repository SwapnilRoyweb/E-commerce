<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno Deals of the Day</title>
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php include ('./partials/inc/header.php');?>
    <?php include ('./partials/inc/sidebar.php') ?>
<!-- Product Start -->
<div class="container-fluid mt-2" id="Deal_of_the_Day">
    <div class="row">
        <h3 class="text-center bg-info">Deals Of the Day</h3>
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
    <?php include ('./partials/inc/footer.php') ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
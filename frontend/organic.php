<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shawpno Organic Products</title>
    <link rel="stylesheet" href="../public/assets/css/Frontend/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php include ('./partials/inc/header.php');?>
    <?php include ('./partials/inc/sidebar.php') ?>
        <!-- Product End -->
    <div class="container mt-2" id="Organic_Products">
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
    <!-- Product End -->
    <?php include ('./partials/inc/footer.php') ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
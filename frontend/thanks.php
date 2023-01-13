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
    <div class="container mt-3">
        <div class="row">
    <div class="col-6">
        <a href="./invoice.php">
            <button type="button" class="btn btn-success">Invoice</button>
        </a>
    </div>
    <div class="col-6 text-end">
        <a href="./home.php">
            <button type="button" class="btn btn-outline-primary">Back to store</button>
        </a>
    </div>
    </div>
        <div class="col-12 mt-2">
            <div class="card border-success mb-3 text-center">
                <div class="card-header">Order Received</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Successfully confirm your order</h5>
                    <p class="card-text">Your Product will reach you in time</p>
                </div>
            </div>
        </div>
    </div>
    
    <?php include ('./partials/inc/footer.php') ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
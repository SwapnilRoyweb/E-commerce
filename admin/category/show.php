<?php
include_once('../../vendor/autoload.php');
//use File;
$db = new File\Category;

$id = $_GET['id'];
$result = $db->show($id);
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
    <div class="card p-3 mt-2 shadow-lg">
        <h3 class="bg-primary text-center text-light border border-3 border-dark border-start-0 border-end-0">Full Details</h3>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="./create.php" class="btn btn-success">Create</a>
                    </div>
                    <div class="col-6 text-end">
                    <a href="./index.php" class="btn btn-warning">List</a>
                    </div>
                </div>
                <div class="mt-2 text-center">
                <p><b>Catagory Name :</b><?php echo $result['category_name']?></p>
                <p><b>Description :</b><?php echo $result['c_description']?></p>
                </div>
    </div>
</div>
<?php include_once('../partials/inc/footer.php'); ?>
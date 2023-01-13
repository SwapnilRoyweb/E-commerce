<?php
include_once('../../vendor/autoload.php');
//use File;
$db = new File\Form;

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
                        <p><b>Email :</b><?php echo $result['email']?></p>
                        <p><b>Password :</b><?php echo $result['password']?></p>
                        <p><b>First name :</b><?php echo $result['first_name']?></p>
                        <p><b>Last name :</b><?php echo $result['last_name']?></p>
                        <p><b>Present Address :</b><?php echo $result['present_address']?></p>
                        <p><b>Permanent Address :</b><?php echo $result['permanent_address']?></p>
                        <p><b>Contact Number :</b><?php echo $result['contact_number']?></p>
                        <p><b>Gender :</b><?php echo $result['gender']?></p>
                        <p><b>City :</b><?php echo $result['city']?></p>
                        <p><b>Zip :</b><?php echo $result['zip']?></p>
                        <p><b>Image :</b></p>
                        <img src="<?php echo '../../public/assets/Users/uploads/'. $result['image'] ?>" width="200" height="200" alt='image'>
                </div>
    </div>
</div>
<?php include_once('../partials/inc/footer.php'); ?>
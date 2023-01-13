<?php
include_once('../../vendor/autoload.php');
//use File;
$db = new File\Form;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->create($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
 <!-- Register Form -->
<div class="card bg-light border-5 border-dark border-top-0 border-bottom-0 p-3 mt-2 shadow-lg">
    <form class="row" action="" method="post" enctype="multipart/form-data">
        <h4 class="bg-dark text-white text-center">Create Admin Acoount</h4>
        <div class="col-12 text-end">
          <a href="./index.php" class="btn btn-warning">List</a>
          </div>
      <div class="col-md-6 mt-2">
            <label for="inputEmail" class="form-label"><b>Email</b></label>
            <input type="email" class="form-control" id="inputEmail" name="email">
        </div>
        <div class="col-md-6 mt-2">
            <label for="inputPassword4" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-md-6 mt-2">
    <label for="firstname" class="form-label"><b>First Name</b></label>
    <input type="text" class="form-control" name="first_name" id="fname" >
</div>
<div class="col-md-6 mt-2">
    <label for="Lastname" class="form-label"><b>Last Name</b></label>
    <input type="text" class="form-control" id="lname" name="last_name">
</div>
<div class="col-12 mt-2">
    <label for="inputAddress" class="form-label"><b>Present Address</b></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="present_address">
</div>
<div class="col-12 mt-2">
    <label for="inputAddress2" class="form-label"><b>Permanent Address</b></label>
    <input type="text" class="form-control" id="inputAddress2" name="permanent_address"
    placeholder="Apartment, studio, or floor">
</div>
<div class="col-md-4 mt-3">
        <label for="Gender" class="form-label"><b>Gender?</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" Value="Male">
                        <label class="form-check-label" for="gender">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender" Value="Female">
                        <label class="form-check-label" for="gender">
                        Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault3" name="gender" Value="Trans">
                        <label class="form-check-label" for="gender">
                        Transgender
                        </label>
                    </div>
</div>
<div class="col-md-4 mt-4">
            <label for="inputCity" class="form-label"><b>City</b></label>
            <select id="inputCity" class="form-select" name="city">
                <option selected>Chittagong</option>
                <option>Dhaka</option>
                <option>Rajshahi</option>
                <option>Sylhet</option>
                <option>Mymensingh</option>
            </select>
        </div>
        <div class="col-md-4 mt-4">
            <label for="inputZip" class="form-label"><b>Zip</b></label>
            <input type="text" class="form-control" id="inputZip" name="zip">
        </div>
        <div class="col-md-6 mt-3">
            <label for="Phone_number" class="form-label"><b>Contact Number</b></label>
            <input type="number" class="form-control" id="number" name="contact_number">
        </div> 
        <div class="col-md-5 mt-5">
                <label for="file"><b>Image :</b></label>
                <input type="file" name="image" id="file">
        </div> 
        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-outline-dark">Sign Up</button>
        </div>
    </form>
</div>  
<!-- Register Form -->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
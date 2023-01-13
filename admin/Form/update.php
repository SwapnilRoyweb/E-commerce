<?php
include_once('../../vendor/autoload.php');
//use File;
$db = new File\Form;

$id = $_GET['id'];
$result = $db->edit($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->update($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
 <!-- Register Form -->
<div class="card bg-light border-5 border-dark border-top-0 border-bottom-0 p-3 mt-2 shadow-lg">
    <form class="row" action="" method="post" enctype="multipart/form-data">
        <h4 class="bg-dark text-white text-center">Update Admin Acoount</h4>
        <div class="col-12 text-end">
          <a href="./index.php" class="btn btn-warning">List</a>
          </div>
          <input type="hidden" name="id" value="<?php echo $id?>">
      <div class="col-md-6 mt-2">
            <label for="inputEmail" class="form-label"><b>Email</b></label>
            <input type="email"  value="<?php echo $result['email']?>"class="form-control" id="inputEmail" name="email">
        </div>
        <div class="col-md-6 mt-2">
            <label for="inputPassword4" class="form-label"><b>Password</b></label>
            <input type="password" value="<?php echo $result['password']?>" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-md-6 mt-2">
    <label for="firstname" class="form-label"><b>First Name</b></label>
    <input type="text" value="<?php echo $result['first_name']?>" class="form-control" name="first_name" id="fname" >
</div>
<div class="col-md-6 mt-2">
    <label for="Lastname" class="form-label"><b>Last Name</b></label>
    <input type="text" value="<?php echo $result['last_name']?>" class="form-control" id="lname" name="last_name">
</div>
<div class="col-12 mt-2">
    <label for="inputAddress" class="form-label"><b>Present Address</b></label>
    <input type="text" value="<?php echo $result['present_address']?>" class="form-control" id="inputAddress" placeholder="1234 Main St" name="present_address">
</div>
<div class="col-12 mt-2">
    <label for="inputAddress2" class="form-label"><b>Permanent Address</b></label>
    <input type="text" value="<?php echo $result['permanent_address']?>" class="form-control" id="inputAddress2" name="permanent_address"
    placeholder="Apartment, studio, or floor">
</div>
<div class="col-md-4 mt-3">
        <label for="Gender" class="form-label"><b>Gender?</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" Value="Male" <?php
                                    if($result['gender'] == "Male"){
                                        echo "checked";
                                    }
                                    ?>>
                        <label class="form-check-label" for="gender">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender" Value="Female" <?php
                                    if($result['gender'] == "Female"){
                                        echo "checked";
                                    }
                                    ?> >
                        <label class="form-check-label" for="gender">
                        Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault3" name="gender" Value="Trans" <?php
                                    if($result['gender'] == "Trans"){
                                        echo "checked";
                                    }
                                    ?>>
                        <label class="form-check-label" for="gender">
                        Transgender
                        </label>
                    </div>
</div>
<div class="col-md-4 mt-4">
            <label for="inputCity" class="form-label"><b>City</b></label>
            <select id="inputCity" class="form-select" name="city">
                <option value="Chittagong"
                        <?php
                        if($result['city'] == "Chittagong"){
                            echo "selected";
                        }
                        ?>>Chittagong</option>
                <option value="Dhaka"
                        <?php
                        if($result['city'] == "Dhaka"){
                            echo "selected";
                        }
                        ?>>Dhaka</option>
                <option value="Rajshahi"
                        <?php
                        if($result['city'] == "Rajshahi"){
                            echo "selected";
                        }
                        ?>>Rajshahi</option>
                <option value="Sylhet"
                        <?php
                        if($result['city'] == "Sylhet"){
                            echo "selected";
                        }
                        ?>>Sylhet</option>
                <option value="Mymensingh"
                        <?php
                        if($result['city'] == "Mymensingh"){
                            echo "selected";
                        }
                        ?>>Mymensingh</option>
            </select>
        </div>
        <div class="col-md-4 mt-4">
            <label for="inputZip" class="form-label"><b>Zip</b></label>
            <input type="text" value="<?php echo $result['zip']?>"class="form-control" id="inputZip" name="zip">
        </div>
<div class="col-md-6 mt-3">
    <label for="Phone_number" class="form-label"><b>Contact Number</b></label>
    <input type="number"  value="<?php echo $result['contact_number']?>"class="form-control" id="number" name="contact_number">
</div>
<div class="mb-3">
        <label for="file">Image :</label>
        <img src="<?php echo '../../public/assets/Users/uploads/'. $result['image'] ?>" width="100" height="100" alt='image'>
        <input type="file" name="image" id="file">
  </div>  
        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-outline-dark">Update</button>
        </div>
    </form>
</div>  
<!-- Register Form -->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
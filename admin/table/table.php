<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<!-- Register List -->
<?php
include_once('../../vendor/autoload.php');
//use File;
// session_start();

$db = new File\Form;
$result = $db->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<div class="container"  id="main">
 <!-- Register List -->
<div class="card p-3 mt-2">
    <h3 class="text-center bg-dark rounded rounded-pill  border border-5 border-warning border-bottom-0 border-top-0  text-light p-1">Admin Register List</h3>
    <?php if (isset($_SESSION['msg'])) {
      $msg = $_SESSION['msg'];
      echo "<p id = 'alert-msg'>$msg</p>";
      session_destroy();
    } ?>
          <table class="table table-danger table-striped table-hover table-bordered border-dark table-sm text-center mt-3">
              <thead class="table-success border-dark">
                  <tr>
                      <th>id</th>
                      <th>Email</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Present Address</th>
                      <th>Permanent Address</th>
                      <th>Contact Number</th>
                      <th>Gender</th>
                      <th>City</th>
                      <th>Zip</th>
                      <th>created_at</th>
                      <th>updated_at</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <?php
                    $i = 0;
                    foreach ($result as $data){
                    ?>
              <tr>
                  <td><?php echo ++$i ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['first_name'] ?></td>
                  <td><?php echo $data['last_name'] ?></td>
                  <td><?php echo $data['present_address'] ?></td>
                  <td><?php echo $data['permanent_address'] ?></td>
                  <td><?php echo $data['contact_number'] ?></td>
                  <td><?php echo $data['gender'] ?></td>
                  <td><?php echo $data['city'] ?></td>
                  <td><?php echo $data['zip'] ?></td>
                  <td><?php echo $data['created_at'] ?></td>
                  <td><?php echo $data['updated_at'] ?></td>
                  <td class="d-flex justify-content-center my-3">
                  <a href="../Form/show.php?id=<?php echo $data['id']?>" class="btn btn-success me-1">Show</a>
                      <a href="../Form/update.php?id=<?php echo $data['id']?>" class="btn btn-warning me-1">Edit</a>
                    </td>
              </tr>
                   <?php }?>
          </table>
          <div class="">
          <a href="../Form/create.php" class="btn btn-outline-dark">Create</a>
          </div>
</div>
<!-- Register List -->
</div>
<!-- Register List -->

<!-- Category List -->
<?php
include_once('../../vendor/autoload.php');
//use File;
// session_start();
$db = new File\Category;
$result = $db->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<div class="container"  id="main">
<!-- Category Table-->
<div class="card p-3 mt-2">

  <h3 class="text-center bg-success rounded rounded-pill border border-5 border-dark border-bottom-0 border-top-0 text-light p-1">Category List</h3>
<?php 
      // if (isset($_SESSION['msg'])) {
      // $msg = $_SESSION['msg'];
      // echo "<p id = 'alert-msg'>$msg</p>";
      // session_destroy(); ?>
 
  <div class="col-2">
  <a href="../category/create.php" class="btn btn-outline-success">Create</a>
  </div>
  <table class="table mt-2 bg-success text-white border border-2 border-dark table-striped table-hover mt-3">
    <thead class="">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="bg-light text-dark">
      <?php
      $i = 0;
      foreach ($result as $data){
      ?>
      <tr>
        <td><?php echo ++$i ?></td>
        <td><?php echo $data['category_name'] ?></td>
        <td><?php echo $data['c_description'] ?></td>
        <td class="d-flex justifly-content-evenly">
          <a href="../category/show.php?id=<?php echo $data['id']?>" class="btn btn-info me-2">Show</a>
          <a href="../category/update.php?id=<?php echo $data['id']?>" class="btn btn-warning me-2">Edit</a>
        </td>
      </tr>
   <?php } ?>
    </tbody>
  </table>
</div>
<!-- Category Table-->
</div>
<!-- Category List -->

<!-- Product List -->
<?php
include_once('../../vendor/autoload.php');
//use File;
// session_start();

$cat = new File\Category;
$category = $cat->index();

$db = new File\Product;
$result = $db->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<div class="container"  id="main">
<!-- Product Table-->
<div class="card p-3 mt-2">
  <h3 class="text-center bg-secondary rounded rounded-pill border border-5 border-dark border-bottom-0 border-top-0 text-light p-1">Product List</h3>
  <?php 
      // if (isset($_SESSION['msg'])) {
      // $msg = $_SESSION['msg'];
      // echo "<p id = 'alert-msg'>$msg</p>";
      // session_destroy();
?>
  <div class="col-2">
    <a href="./create.php" class="btn btn-outline-secondary">Create</a>
  </div>
  <table class="table mt-2 table-striped table-hover mt-3">
    <thead class="bg-secondary text-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Product Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="text-dark">
    <?php
      $i = 0;
      foreach ($result as $data){
      ?>
      <tr>
        <td><?php echo ++$i ?></td>
        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['category_id']?></td>
        <td><?php echo $data['price'] ?></td>
        <td><img src="<?php echo '../../public/assets/uploads/'. $data['image'] ?>" width="100" height="100" alt=''></td>
        <td><?php echo $data['description'] ?></td>
        <td class="d-flex justifly-content-evenly mt-4">
          <a href="../product/show.php?id=<?php echo $data['id']?>" class="btn btn-info me-2">Show</a>
          <a href="../product/update.php?id=<?php echo $data['id']?>" class="btn btn-warning me-2">Edit</a>
          <!-- <form action="" method="post" class="inset-block">
              <input type="hidden" name="id" value="<?php echo $data['id']?>">
              <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
          </form> -->
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
<!-- Product Table-->
</div>
<!-- Product List -->

<!-- </div> -->
<?php include_once('../partials/inc/footer.php'); ?>
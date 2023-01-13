<?php
include_once('../../vendor/autoload.php');
//use File;
$db = new File\Category;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->create($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
 <!-- Category Form-->
 <div class="card p-3 mt-2 shadow-lg">
  <h3 class="text-center border border-5 border-dark border-top-0 border-bottom-0 bg-info text-dark p-1">Create Category</h3>
  <div class="col-2">
   <a href="./index.php" class="btn btn-warning">List</a>
   </div>
  <form class="mt-2" method="POST">
   <div class="mb-3">
     <label for="exampleInputCategoryName" class="form-label">Category Name</label>
     <input type="text" class="form-control" name="category_name" id="exampleInputCategoryName" aria-describedby="categoryname">
   </div>
   <div class="mb-3">
     <label for="exampleInputDescription" class="form-label">Description</label>
     <textarea class="form-control" name="c_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
   </div>
   <div class="text-end me-3">
     <button type="submit" class="btn btn-primary">Submit</button>
   </div>
   </form>
 </div>
 <!-- Category Form-->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
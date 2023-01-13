<?php
include_once('../../vendor/autoload.php');
//use File;
$cat = new File\Category;
$category = $cat->index();

$db = new File\Product;

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
 <!-- Product Form -->
 <div class="card p-3 mt-2 shadow-lg">
  <h3 class="text-center border border-5 border-dark border-top-0 border-bottom-0 bg-warning text-dark p-1">Create Product</h3>
  <div class="col-2">
    <a href="./index.php" class="btn btn-warning">List</a>
    </div>
  <form class="mt-2" action="" method="POST">
   <div class="mb-3">
     <label for="productName" class="form-label">Product Name</label>
     <input type="text" name="name" value="<?php echo $result['name']?>" class="form-control" id="productName" aria-describedby="Productname">
   </div>
    <div class="mb-3">
      <label for="exampleInputPrice" class="form-label">Category Name</label>
      <select name="category_id" id="category" class="form-select">
            <?php 
            foreach($category as $category) { 
              ?>
          <option <?php if ($result['category_id'] == $category['id'] ) {?>
            selected = "selected"
         <?php } ?>
          value="<?php echo $category['id']; ?>"><?php echo $category['category_name'] ?></option>
      <?php } ?>
      </select>
    </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="number" name="price" value="<?php echo $result['price']?>" class="form-control" id="exampleInputPrice" aria-describedby="price">
  </div>
  <div class="mb-3">
        <label for="file">Image :</label>
        <img src="<?php echo '../../public/assets/uploads/'. $result['image'] ?>" width="100" height="100" alt='image'>
        <input type="file" name="image" id="file">
  </div>
   <div class="mb-3">
     <label for="exampleInputDescription" class="form-label">Description</label>
     <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"><?php echo $result['description']?></textarea>
   </div>
   <div class="text-end me-3">
     <button type="submit" class="btn btn-primary">Update</button>
   </div>
   </form>
</div>
<!-- Product Form -->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
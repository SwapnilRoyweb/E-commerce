<?php
include_once('../../vendor/autoload.php');
//use File;
session_start();

// $cat = new File\Category;
// $category = $cat->index();

$db = new File\Product;
$result = $db->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
<!-- Product Table-->
<div class="card p-3 mt-2">
  <h3 class="text-center bg-secondary rounded rounded-pill border border-5 border-dark border-bottom-0 border-top-0 text-light p-1">Product List</h3>
  <?php if (isset($_SESSION['msg'])) {
      $msg = $_SESSION['msg'];
      echo "<p id = 'alert-msg'>$msg</p>";
      session_destroy();
    } ?>
  <div class="col-2">
    <a href="./create.php" class="btn btn-outline-secondary">Create</a>
  </div>
  <table class="table mt-2 table-striped table-hover mt-3">
    <thead class="bg-secondary text-light">
      <tr>
        <th scope="col">id</th>
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
        <td><?php echo $data['category_name']?></td>
        <td><?php echo $data['price'] ?></td>
        <td><img src="<?php echo '../../public/assets/uploads/'. $data['image'] ?>" width="100" height="100" alt='image'></td>
        <td><?php echo $data['description'] ?></td>
        <td class="d-flex justify-content-evenly mt-4">
          <a href="./show.php?id=<?php echo $data['p_id']?>" class="btn btn-info">Show</a>
          <a href="./update.php?id=<?php echo $data['p_id']?>" class="btn btn-warning">Edit</a>
          <form action="" method="post" class="inset-block">
              <input type="hidden" name="p_id" value="<?php echo $data['p_id']?>">
              <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
<!-- Product Table-->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
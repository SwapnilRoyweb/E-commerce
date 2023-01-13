<?php
include_once('../../vendor/autoload.php');
//use File;
session_start();
$db = new File\Category;
$result = $db->index();
// print_r($result);
// die();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>

<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
<div class="container"  id="main">
<!-- Category Table-->
<div class="card p-3 mt-2">

  <h3 class="text-center bg-success rounded rounded-pill border border-5 border-dark border-bottom-0 border-top-0 text-light p-1">Category List</h3>
<?php if (isset($_SESSION['msg'])) {
      $msg = $_SESSION['msg'];
      echo "<p id = 'alert-msg'>$msg</p>";
      session_destroy();
    } ?>
  <div class="col-2">
  <a href="./create.php" class="btn btn-outline-success">Create</a>
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
        <td class="d-flex justify-content-evenly">
          <a href="./show.php?id=<?php echo $data['id']?>" class="btn btn-info me-2">Show</a>
          <a href="./update.php?id=<?php echo $data['id']?>" class="btn btn-warning me-2">Edit</a>
            <form action="" method="post" class="inset-block">
              <input type="hidden" name="id" value="<?php echo $data['id']?>">
              <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
   <?php } ?>
    </tbody>
  </table>
</div>
<!-- Category Table-->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
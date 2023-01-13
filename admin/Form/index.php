<?php
include_once('../../vendor/autoload.php');
//use File;
session_start();

$db = new File\Form;
$result = $db->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->delete($_POST);
}
?>
<?php include_once('../partials/inc/header.php'); ?>
<?php include_once('../partials/inc/sidebar.php'); ?>
<?php include_once('../partials/inc/navbar.php'); ?>
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
                      <th>Image</th>
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
                  <td><img src="<?php echo '../../public/assets/Users/uploads/'. $data['image'] ?>" alt="" width="100" height="100">  </td>
                  <td><?php echo $data['created_at'] ?></td>
                  <td><?php echo $data['updated_at'] ?></td>
                  <td class="d-flex justify-content-center my-3">
                  <a href="./show.php?id=<?php echo $data['id']?>" class="btn btn-success me-1">Show</a>
                      <a href="./update.php?id=<?php echo $data['id']?>" class="btn btn-warning me-1">Edit</a>
                      <form action="" method="post" class="inset-block">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
              </tr>
                   <?php }?>
          </table>
          <div class="">
          <a href="./create.php" class="btn btn-outline-dark">Create</a>
          </div>
</div>
<!-- Register List -->
</div>
<?php include_once('../partials/inc/footer.php'); ?>
<?php
//$docroot = '';
// include('../../../vendor/autoload.php');
// use File\Form;

// $db = new File\Form;
// $result = $db->index();
?>
<!-- Navbar -->
<?php 
 //foreach ($result as $data){
?>
<div id="main">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <div class="container-fluid">
        <a class="navbar-brand bg-warning p-1 text-dark pe-2 ps-2 rounded" href="#">
          <img src="<?php echo '../../../public/assets/Users/uploads/'. $data['image'] ?>" alt="" width="30" height="30" class="d-inline-block align-text-top me-1 rounded-circle"><span class="fw-bold">Admin</span></a>
          <?php  ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php"><span class="me-1"><i class="fa-sharp fa-solid fa-house-chimney"></i></span>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../table/table.php">Table</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../form/index.php">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../event/list.html">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../category/index.php">Category of Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../product/index.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../order form/order_form.php">Order Form</a>
              </li>
          </ul>
        </div>
          <form class="d-flex ms-5">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <div class="ms-5">
              <button type="button" class="btn btn-outline-danger">Logout<span class="ms-1"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span></button>
          </div>
      </div>
    </nav>
  </div>
   <!-- Navbar End -->
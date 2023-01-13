<?php
//$docroot = '';
include('../vendor/autoload.php');
use File\Form;

$db = new File\Form;
$result = $db->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        #sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(105, 124, 128);
            overflow-x: hidden;
            padding-top: 20px;
            }
            #main {
                margin-left: 200px; /* Same as the width of the sidenav */
                }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../css/admin/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
  <!-- Sidebar -->
    <div class="row">
    <div class="col-2 bg-dark" id="sidenav">
      <ul class="nav flex-column my-2">
        <li class="nav-item bg-info rounded rounded-pill">
        <?php 
           foreach ($result as $data)
          ?>
          <a href="./index.php" class="nav-link text-dark">
            <span><img src="<?php echo '../public/assets/Users/uploads/'. $data['image'] ?>" alt="AdminLTELogo" height="50" width="50" class="rounded-circle"></span>
            <span class="fw-bold fs-4">Admin</span>
          </a>
        </li>
        <hr style="color: rgb(51, 214, 239); border: 3px solid aqua;">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="./index.php"><span><i class="fa-sharp fa-solid fa-house me-1"></i></span>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./dashboard/dashboard.php"><span><i class="fa-sharp fa-solid fa-chess-board me-1"></i></span>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./table/table.php"><span><i class="fa-sharp fa-solid fa-table me-1"></i></span>Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./form/index.php"><span><i class="fa-sharp fa-solid fa-file me-1"></i></span>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./event/"><span><i class="fa-sharp fa-solid fa-calendar-week me-1"></i></span>Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./category/index.php"><span><i class="fa-sharp fa-solid fa-clipboard me-1"></i></span>Category of Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./product/index.php"><span><i class="fa-sharp fa-solid fa-cart-shopping me-1"></i></i></span>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./order form/order_form.php"><span><i class="fa-sharp fa-solid fa-bag-shopping me-1"></i></span>Order Form</a>
        </li>
      </ul>
    </div>
    </div>
    <!-- Sidebar End -->
    <!-- Navbar -->
    <div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <a class="navbar-brand bg-warning pe-2 ps-2 rounded text-dark" href="./index.php">
            <img src="<?php echo '../public/assets/Users/uploads/'. $data['image'] ?>" alt="" width="30" height="30" class="d-inline-block align-text-top rounded-circle me-1"><span class="fw-bold">Admin</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php"><span class="me-1"><i class="fa-sharp fa-solid fa-house-chimney"></i></span>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./table/table.php">Table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Form/index.php">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./event/list.html">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./category/index.php">Category of Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./product/index.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./order form/order_form.php">Order Form</a>
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
<div class="container"  id="main">
  <!-- Dashboard -->
  <div class="row g-3 mt-1">
        <div class="col-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header bg-light text-dark p-1 text-center">Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title bg-dark p-2"><span class="me-2"><i class="fa-sharp fa-solid fa-eye-low-vision"></i></span>Visited Site</h5>
                    <p class="card-text text-center"><span class="me-2"><i class="fa-sharp fa-solid fa-person"></i></span>12000 people visited</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header bg-light text-dark p-1 text-center">Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title bg-dark p-2"><span class="me-2"><i class="fa-sharp fa-solid fa-address-card"></i></span>New Registration</h5>
                    <p class="card-text text-dark text-center"><span class="me-2"><i class="fa-sharp fa-solid fa-person"></i></span>50 People Pending</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header bg-light text-dark p-1 text-center">Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title bg-dark p-2"><span class="me-2"><i class="fa-sharp fa-solid fa-users-viewfinder"></i></span>Users</h5>
                    <p class="card-text text-center"><span class="me-2"><i class="fa-sharp fa-solid fa-person"></i></span>100 People</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-dark">
        <img src="../public/assets/images/Admin/Dashboard/1_pok-aGqc7N9f5_LGYr7Ktg.png" class="card-img" alt="...">
    </div>
<!-- Dashboard -->

<!-- Register List -->
<!-- <div class="card p-3 mt-2">
  <h3 class="text-center bg-success text-light p-1">Admin Register List</h3>
        <table class="table table-danger table-striped table-hover table-bordered border-dark table-sm text-center">
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="">
                <a href="" class="btn btn-success">Show</a>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
        <div class="">
        <a href="./Form/create.php" class="btn btn-primary">Create</a>
        </div>
</div> -->
<!-- Register List -->

  <!-- Product Table-->
  <!-- <div class="card p-3 mt-2">
    <h3 class="text-center border border-5 border-dark border-bottom-0 border-top-0 text-secondary p-1">Product List</h3>
    <div class="col-2">
      <a href="./product/create.php" class="btn btn-success">Create</a>
    </div>
    <table class="table mt-2 border border-2 border-dark">
      <thead class="bg-">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Product Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="bg-secondary text-light">
        <tr>
          <th scope="row">1</th>
          <td>Phone</td>
          <td>Electronics</td>
          <td>100</td>
          <td>Otto</td>
          <td>
            <a href="" class="btn btn-info">Show</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->
  <!-- Product Table-->

  <!-- Category Table-->
  <!-- <div class="card p-3 mt-2">
    <h3 class="text-center border border-5 border-dark border-bottom-0 border-top-0 text-success p-1">Category List</h3>
    <div class="col-2">
    <a href="./category/create.php" class="btn btn-success">Create</a>
    </div>
    <table class="table mt-2 border border-2 border-dark">
      <thead class="">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Category Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="bg-success text-light">
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>
            <a href="" class="btn btn-info">Show</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->
  <!-- Category Table-->

  <!-- Register Form -->
<div class="card bg-light border-5 border-dark border-top-0 border-bottom-0 p-3 mt-2 shadow-lg">
  <form class="row" action="insert_process.php" method="post">
      <h4 class="bg-dark text-white text-center">Create Admin Acoount</h4>
      <div class="col-12 text-end">
        <a href="./Form/index.php" class="btn btn-warning">List</a>
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
      <div class="col-12 mt-4 text-center">
          <button type="submit" class="btn btn-outline-dark">Sign Up</button>
      </div>
  </form>
</div>  
<!-- Register Form -->

      <!-- Category Form-->
      <div class="card p-3 mt-2 shadow-lg">
       <h3 class="text-center border border-5 border-dark border-top-0 border-bottom-0 bg-info text-dark p-1">Create Category</h3>
       <div class="col-2">
        <a href="./category/list.php" class="btn btn-warning">List</a>
        </div>
       <form class="mt-2">
        <div class="mb-3">
          <label for="exampleInputCategoryName" class="form-label">Category Name</label>
          <input type="text" class="form-control" id="exampleInputCategoryName" aria-describedby="categoryname">
        </div>
        <div class="mb-3">
          <label for="exampleInputDescription" class="form-label">Description</label>
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        </div>
        <div class="text-end me-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      <!-- Category Form-->
      
      <!-- Product Form -->
    <div class="card p-3 mt-2 shadow-lg">
        <h3 class="text-center border border-5 border-dark border-top-0 border-bottom-0 bg-warning text-dark p-1">Create Product</h3>
        <div class="col-2">
          <a href="./product/list.php" class="btn btn-warning">List</a>
          </div>
        <form class="mt-2">
         <div class="mb-3">
           <label for="exampleInputProductName" class="form-label">Product Name</label>
           <input type="text" class="form-control" id="exampleInputProductName" aria-describedby="Productname">
         </div>
          <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Category</label>
            <select name="category" id="category" class="form-select">
              <option value=""></option>
            </select>
          </div>
        <div class="mb-3">
          <label for="exampleInputPrice" class="form-label">Price</label>
          <input type="number" class="form-control" id="exampleInputPrice" aria-describedby="price">
        </div>
         <div class="mb-3">
           <label for="exampleInputDescription" class="form-label">Description</label>
           <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
         </div>
         <div class="text-end me-3">
           <button type="submit" class="btn btn-primary">Submit</button>
         </div>
         </form>
    </div>
      <!-- Product Form -->

  <!-- Event -->
  <!-- <div class="card p-3 mt-2">
      <section class="bg-light mh-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
          <div class="container">
            <h4><i class="bi bi-speedometer"></i> Dashboard</h4><hr>
          </div>

          <div class="d-flex bg-white border-0 justify-content-between mx-3 px-4 pt-3 pb-5 bg-warning border rounded-3 shadow-lg my-5">
            <div>
                <h4>Payment</h4>
            </div>
            <div>
                <a href="./event/create.html">
                    <button class="btn btn-success">CREATE</button>
                </a>   
            </div>
          </div>

          <div class="mx-3 shadow-lg p-5 bg-white rounded-3">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <select style="width: 50px; height: 30px;" class="py-0">
                        <option selected>10</option>
                        <option value="1">11</option>
                        <option value="2">12</option>
                        <option value="3">13</option>
                        <option value="4">14</option>
                        <option value="5">15</option>
                    </select>
                    <div>
                      <span class="lead">entities per page</span>
                    </div>
                </div>
                <div class="">
                    <input type="search" class="border-0 border-white rounded-3 shadow-lg p-2" value="Search.."> 
                </div>
            </div><br>
            <div class="d-flex justify-content-between mx-3">
                <span>SER NO.</span>
                <span>USERS</span>
                <span>REGISTRATION TYPE</span>
                <span>DEPOSITE AMOUNT</span>
                <span>GRAND AMOUNT</span>
                <span>STATUS</span>
                <span>REQUESTIONING DATE</span>
                <span>APPROVAL DATE</span>
                <span>ACTION</span>
            </div><hr>
            <div>
                <p class="fs-5 text-center pb-5">No Entries found</p>
            </div>
          </div>
    </section>
</div> -->
<!-- Event -->

</div>
     <!-- Footer -->
    <div class="bg-dark text-light text-center fixed-bottom" id="main">
      <footer>Created by @swapnil_roy/2022</footer>
    </div>
    <!-- footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
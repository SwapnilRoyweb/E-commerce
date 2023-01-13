<?php
include_once('../vendor/autoload.php');

// $db = new File\Form;

// $id = $_GET['id'];
// $result2 = $db->show($id);
session_start();
$order = new File\Order;
$result = $order->index();

$bill = new File\Billing;
$result2 = $bill->index();
?>
<!doctype html>
<html lang="en">
<?php include_once('./partials/inc/pdf_head.php');?>
<body>
<div class="container bootstrap snippets bootdeys">
   <div class="row">
       <div class="col-sm-12">
	  	   <div class="panel panel-default invoice" id="invoice">
		       <div class="panel-body">
			        <div class="invoice-ribbon"><div class="ribbon-inner bg-dark">PAID</div></div>
		            <div class="row">

				<div class="col-sm-4 top-left">
					<!-- <i class="fa fa-rocket"></i> -->
					<img src="../public/assets/images/Frontend/image/shwapno-logo.jpg" width="100px" height="60px">
				</div>
                <div class="col-md-4 top-middle">
                <h1>Shawpno</h1>
                </div>
                <?php
                    foreach ($result2 as $data)
                ?>
				<div class="col-sm-4 top-right">
						<h3 class="marginright">INVOICE-#<?php echo $data['id'];?></h3>
                        
						<span class="marginright"><?php echo $data['created_at'];?></span>
			    </div>

			</div>
			<hr>
			<div class="row">
				<div class="col-sm-4 from">
					<p class="lead marginbottom">From : Shawpno</p>
					<p>Address:</p>
					<p>House-35,Road-10,Sector-10,Uttara,Dhaka.</p>
					<p>Phone: 01608637314</p>
					<p>Email: arifaritu7@gmail.com</p>
				</div>
               <?php foreach ($result2 as $data) ?>
				<div class="col-sm-4 to">
					<p class="lead marginbottom">To :<strong> <?php echo $data['first_name'],$data['last_name'];?></strong></p>
					<p>Address: <?php echo $data['present_address'];?></p>
					<p>Phone: <?php echo $data['contact_number'];?></p>
					<p>Email: <?php echo $data['email'];?></p>

			    </div>
                <?php
                        $total = 0;
                        foreach ($result as $data)
                        $total += $data['subtotal'];
                    ?>
			    <div class="col-sm-4 text-right payment-details">
					<p class="lead marginbottom payment-info">Payment details</p>
					<p>Date: <?php echo $data['created_at'];?></p>
					<p>Total Amount: <?php echo $total + 100?> BDT</p>
			    </div>
			</div>

			<div class="row table-row">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 0;
                        $total = 0;
                        foreach ($result as $data){
                        $total += $data['subtotal'];
                    ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><?php echo $data['product_name'] ?></td>
                            <td><?php echo $data['category_name'] ?></td>
                            <td><?php echo $data['price'] ?></td>
                            <td><?php echo $data['quantity'] ?></td>
                            <td><?php echo $data['subtotal'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

			</div>
            <?php         
            $subtotal = $data['subtotal'];
            $charge = 100;
            ?>
			<div class="row">
			<div class="col-md-6 margintop">
				<p class="lead marginbottom">THANK YOU!</p>
					  
				<!-- <a href="./pdfgenerator.php" class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</a> -->
			</div>
			<div class="col-md-6 text-right pull-right invoice-total" style="padding-left: 400px;">
					  <p>Subtotal : <?php echo $total;?> BDT</p>
			          <p>Shipping Charge : <?php echo $charge;?> BDT</p>
			          <p>Total : <?php echo $total + $charge;?> BDT</p>
			</div>
			</div>
		<!-- <form action="pdf_processor.php" method="post">
            <div class="site-section">
                <div class="container">
                      <div class="form-group row">
                      <div class="col-mb-6">
                      <input type="hidden" name="invoice_id" value="<?php echo $invoiceData[0]['invoice_id'];?>" />
                      </div>
                      <div class="col-mb-6">
                      <input type="hidden" name="fname" value="<?php echo $invoiceData[0]['fname'];?>" />
					  <input type="hidden" name="lname" value="<?php echo $invoiceData[0]['lname'];?>" />
                      </div>
                      <div class="col-mb-6">
                      <input type="hidden" name="address" value="<?php echo $invoiceData[0]['address'];?>" />
                      </div>

                      <div class="col-mb-6">
                      <input type="hidden" name="email" value="<?php echo $invoiceData[0]['email'];?>" />
                      <input type="hidden" name="phone_number" value="<?php echo$invoiceData[0]['phonenumber'];?>" />
                    </div>
					<div class="col-mb-6">
                      <input type="hidden" name="item_name" value="<?php echo $invoiceData[0]['m_name'];?>" />
                      <input type="hidden" name="quantity" value="<?php echo $invoiceData[0]['m_quantity'];?>" />
                      <input type="hidden" name="item_price" value="<?php echo $invoiceData[0]['m_price'];?>" />
                      <input type="hidden" name="item_sub_total_price" value="<?php echo$invoiceData[0]['item_sub_total_price'];?>" />
                      <input type="hidden" name="total_price" value="<?php echo $total;?>" />
                      <input type="hidden" name="vat" value="<?php echo $vat;?>" />
                      <input type="hidden" name="disCount" value="<?php echo $disCount;?>" />
                    </div>
                  </div>
                </div>
            </div>
            <p><button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Payment Done</button></p>
        </form> -->
		  </div>
		</div>
	</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

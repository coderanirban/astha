<?php
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Puja Orders

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

 View Puja Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Customer</th>
<th>Temple</th>
<th>Puja Order Date</th>
<th>Puja Quantity</th>	
<th>Total Amount</th>
<th>Payment Status</th>
<th>Order Status</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from puja_orders";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['order_id'];

$c_id = $row_orders['customer_id'];
$order_date = $row_orders['order_date'];
$order_qty = $row_orders['order_qty'];
$total_amount = $row_orders['total_amount'];

$temple_id = $row_orders['temple_id'];


$order_status = $row_orders['order_status'];
$payment_status = $row_orders['payment_status'];

$get_products = "select * from temples where temple_id='$temple_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$temple_title = $row_products['temple_title'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_customer = "select * from customers where customer_id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

echo $customer_email;

 ?>
 </td>


<td><?php echo $temple_title; ?></td>

<td>
<?php


echo $order_date;

?>
</td><td>
<?php


echo $order_qty;

?>
</td>

<td>INR. <?php echo $total_amount; ?></td>

<td>
<?php
echo $payment_status;




?>
</td>
<td>
<?php
echo $order_status;




?>
</td>


<td>

<a href="index.php?order_complete=<?php echo $order_id; ?>" >

<i class="fa fa-check" ></i> Complete

</a>


<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page" class="btn btn-primary">« Go back</a>
</p>

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>
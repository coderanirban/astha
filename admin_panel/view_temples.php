<?php
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Temples

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

  Temples List

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>#</th>
<th>Title</th>
<th>Image</th>
<th>Puja Price</th>
<th>Puja Sale Price</th>
<th>Delete</th>
<th>Edit</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from temples where status='product'";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['temple_id'];

$pro_title = $row_pro['temple_title'];

$pro_image = $row_pro['temple_img1'];

$pro_price = $row_pro['temple_price'];

$temple_psp_price = $row_pro['temple_psp_price'];

$pro_date = $row_pro['date'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="temple_images/<?php echo $pro_image; ?>" width="60" height="60"></td>

<td>₹ <?php echo $pro_price; ?></td>


<td> <?php echo $temple_psp_price; ?> </td>

<td><?php echo $pro_date; ?></td>

<td>

<a href="index.php?delete_temple=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete Record

</a>

</td>

<td>

<a href="index.php?edit_temple=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit Infomation

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page" class="btn btn-primary">« Go back</a>
</p>

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>
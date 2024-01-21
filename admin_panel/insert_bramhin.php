<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Insert Bramhin

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Insert Bramhin

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Bramhin Name </label>

<div class="col-md-6">

<input type="text" name="bramhin_title" class="form-control" >

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Bramhin Image </label>

<div class="col-md-6">

<input type="file" name="bramhin_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value=" Insert Bramhin" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page" class="btn btn-primary">« Go back</a>
</p>

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$bramhin_title = $_POST['bramhin_title'];

$bramhin_image = $_FILES['bramhin_image']['name'];

$tmp_name = $_FILES['bramhin_image']['tmp_name'];

move_uploaded_file($tmp_name,"other_images/$bramhin_image");

$insert_bramhin = "insert into bramhins (bramhin_title,bramhin_image) values ('$bramhin_title','$bramhin_image')";

$run_bramhin = mysqli_query($con,$insert_bramhin);

if($run_bramhin){

echo "<script>alert('New Bramhin Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_bramhins','_self')</script>";

}

}

?>

<?php } ?>
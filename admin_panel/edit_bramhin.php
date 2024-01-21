<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_bramhin'])){

$edit_bramhin = $_GET['edit_bramhin'];

$get_bramhin = "select * from bramhins where bramhin_id='$edit_bramhin'";

$run_bramhin = mysqli_query($con,$get_bramhin);

$row_bramhin = mysqli_fetch_array($run_bramhin);

$m_id = $row_bramhin['bramhin_id'];

$m_title = $row_bramhin['bramhin_title'];

$m_image = $row_bramhin['bramhin_image'];

$new_m_image = $row_bramhin['bramhin_image'];


}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Edit Bramhin

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

 Edit Bramhin

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Bramhin Name </label>

<div class="col-md-6">

<input type="text" name="bramhin_name" class="form-control" value="<?php echo $m_title; ?>">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Bramhin Image </label>

<div class="col-md-6">

<input type="file" name="bramhin_image" class="form-control" >

<br>

<img src="other_images/<?php echo $m_image; ?>" width="70" height="70">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" class="form-control btn btn-primary" value=" Update Bramhin " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$bramhin_name = $_POST['bramhin_name'];

$bramhin_image = $_FILES['bramhin_image']['name'];

$tmp_name = $_FILES['bramhin_image']['tmp_name'];

move_uploaded_file($tmp_name,"other_images/$bramhin_image");

if(empty($bramhin_image)){

$bramhin_image = $new_m_image;

}

$update_bramhin = "update bramhins set bramhin_title='$bramhin_name', bramhin_image='$bramhin_image' where bramhin_id='$m_id'";

$run_bramhin = mysqli_query($con,$update_bramhin);

if($run_bramhin){

echo "<script>alert('Bramhin Has Been Updated')</script>";

echo "<script>window.open('index.php?view_bramhins','_self')</script>";

}

}

?>

<?php } ?>
<?php
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Insert Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#temple_desc,#temple_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Insert Temples

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Temples

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Title </label>

<div class="col-md-6" >

<input type="text" name="temple_title" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select A Bramhin </label>

<div class="col-md-6" >

<select class="form-control" name="bramhin"><!-- select manufacturer Starts -->

<option> Select A Bramhin </option>

<?php

$get_bramhin = "select * from bramhins";
$run_bramhin = mysqli_query($con,$get_bramhin);
while($row_bramhin= mysqli_fetch_array($run_bramhin)){
$bramhin_id = $row_bramhin['bramhin_id'];
$bramhin_title = $row_bramhin['bramhin_title'];

echo "<option value='$bramhin_id'>
$bramhin_title
</option>";

}

?>

</select>

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 1 </label>

<div class="col-md-6" >

<input type="file" name="temple_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 2 </label>

<div class="col-md-6" >

<input type="file" name="temple_img2" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 3 </label>

<div class="col-md-6" >

<input type="file" name="temple_img3" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Puja Price </label>

<div class="col-md-6" >

<input type="text" name="temple_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Puja Sale Price </label>

<div class="col-md-6" >

<input type="text" name="psp_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Keywords </label>

<div class="col-md-6" >

<input type="text" name="temple_keywords" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Product Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Product Features </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Sounds And Videos </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="temple_desc" class="form-control" rows="15" id="temple_desc">


</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="temple_features" class="form-control" rows="15" id="temple_features">


</textarea>

</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="temple_video" class="form-control" rows="15">


</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Label </label>

<div class="col-md-6" >

<input type="text" name="temple_label" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

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




</body>

</html>

<?php

if(isset($_POST['submit'])){

$temple_title = $_POST['temple_title'];
$temple_cat = $_POST['temple_cat'];
$cat = $_POST['cat'];
$manufacturer_id = $_POST['manufacturer'];
$temple_price = $_POST['temple_price'];
$temple_desc = $_POST['temple_desc'];
$temple_keywords = $_POST['temple_keywords'];

$psp_price = $_POST['psp_price'];

$temple_label = $_POST['temple_label'];

$temple_url = $_POST['temple_url'];

$temple_features = $_POST['temple_features'];

$temple_video = $_POST['temple_video'];

$status = "product";

$temple_img1 = $_FILES['temple_img1']['name'];
$temple_img2 = $_FILES['temple_img2']['name'];
$temple_img3 = $_FILES['temple_img3']['name'];

$temp_name1 = $_FILES['temple_img1']['tmp_name'];
$temp_name2 = $_FILES['temple_img2']['tmp_name'];
$temp_name3 = $_FILES['temple_img3']['tmp_name'];

move_uploaded_file($temp_name1,"temple_images/$temple_img1");
move_uploaded_file($temp_name2,"temple_images/$temple_img2");
move_uploaded_file($temp_name3,"temple_images/$temple_img3");

$insert_temple = "insert into temples (p_cat_id,cat_id,manufacturer_id,date,temple_title,temple_url,temple_img1,temple_img2,temple_img3,temple_price,temple_psp_price,temple_desc,temple_features,temple_video,temple_keywords,temple_label,status) values ('$temple_cat','$cat','$manufacturer_id',NOW(),'$temple_title','$temple_url','$temple_img1','$temple_img2','$temple_img3','$temple_price','$psp_price','$temple_desc','$temple_features','$temple_video','$temple_keywords','$temple_label','$status')";

$run_temple = mysqli_query($con,$insert_temple);

if($run_temple){

echo "<script>alert('Product has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_temples','_self')</script>";

}

}

?>

<?php } ?>

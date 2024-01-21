<?php
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_temple'])){

$edit_id = $_GET['edit_temple'];

$get_p = "select * from temples where temple_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['temple_id'];

$p_title = $row_edit['temple_title'];


$m_id = $row_edit['bramhin_id'];

$p_image1 = $row_edit['temple_img1'];

$p_image2 = $row_edit['temple_img2'];

$p_image3 = $row_edit['temple_img3'];

$new_p_image1 = $row_edit['temple_img1'];

$new_p_image2 = $row_edit['temple_img2'];

$new_p_image3 = $row_edit['temple_img3'];

$p_price = $row_edit['temple_price'];

$p_desc = $row_edit['temple_desc'];



$psp_price = $row_edit['temple_psp_price'];

$p_label = $row_edit['temple_label'];


$p_features = $row_edit['temple_features'];

$p_video = $row_edit['temple_video'];

}

$get_bramhin = "select * from bramhins where bramhin_id='$m_id'";

$run_bramhin = mysqli_query($con,$get_bramhin);

$row_bramhin = mysqli_fetch_array($run_bramhin);

$bramhin_id = $row_bramhin['bramhin_id'];

$bramhin_title = $row_bramhin['bramhin_title'];


/*$get_p_cat = "select * from temple_categories where p_cat_id='$p_cat'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

$get_cat = "select * from categories where cat_id='$cat'";

$run_cat = mysqli_query($con,$get_cat);

$row_cat = mysqli_fetch_array($run_cat);

$cat_title = $row_cat['cat_title'];*/

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#temple_desc,#temple_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-10"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Temple

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-10"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

 Edit Temple

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Title </label>

<div class="col-md-6" >

<input type="text" name="temple_title" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->


<!--<div class="form-group" >

<label class="col-md-3 control-label" > Temple Url </label>

<div class="col-md-6" >

<input type="text" name="temple_url" class="form-control" required value="<?php // echo $p_url; ?>" >

<br>

<p style="font-size:15px; font-weight:bold;">

Temple Url Example : navy-blue-t-shirt

</p>

</div>

</div>--><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select A Bramhin </label>

<div class="col-md-6" >

<select name="bramhin" class="form-control">

<option value="<?php echo $bramhin_id; ?>">
<?php echo $bramhin_title; ?>
</option>

<?php

$get_bramhin = "select * from bramhins";

$run_bramhin = mysqli_query($con,$get_bramhin);

while($row_bramhin = mysqli_fetch_array($run_bramhin)){

$bramhin_id = $row_bramhin['bramhin_id'];

$bramhin_title = $row_bramhin['bramhin_title'];

echo "
<option value='$bramhin_id'>
$bramhin_title
</option>
";

}

?>

</select>

</div>

</div>

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 1 </label>

<div class="col-md-6" >

<input type="file" name="temple_img1" class="form-control" >
<br><img src="temple_images/<?php echo $p_image1; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 2 </label>

<div class="col-md-6" >

<input type="file" name="temple_img2" class="form-control" >
<br><img src="temple_images/<?php echo $p_image2; ?>" width="70" height="70" >

</div> 
</div> 


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Image 3 </label>

<div class="col-md-6" >

<input type="file" name="temple_img3" class="form-control" >
<br><img src="temple_images/<?php echo $p_image3; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Puja Price </label>

<div class="col-md-6" >

<input type="text" name="temple_price" class="form-control" required value="<?php echo $p_price; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Sale Price </label>

<div class="col-md-6" >

<input type="text" name="psp_price" class="form-control" required value="<?php echo $psp_price; ?>">

</div>

</div>

<!--<div class="form-group" >

<label class="col-md-3 control-label" > Temple Keywords </label>

<div class="col-md-6" >

<input type="text" name="temple_keywords" class="form-control" required value="<?php // echo $p_keywords; ?>" >

</div>

</div>-->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Temple Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Temple Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Temple Features </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Sounds And Videos </a>


</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="temple_desc" class="form-control" rows="15" id="temple_desc">

<?php echo $p_desc; ?>

</textarea>

</div><!-- description tab-pane fade in active Ends -->


	
<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="temple_features" class="form-control" rows="15" id="temple_features">

<?php echo $p_features; ?>

</textarea>

</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="temple_video" class="form-control" rows="15">

<?php echo $p_video; ?>

</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<!--<div class="form-group" >

<label class="col-md-3 control-label" > Temple Label </label>

<div class="col-md-6" >

<input type="text" name="temple_label" class="form-control" required value="<?php echo $p_label; ?>">

</div>

</div>-->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Temple" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$temple_title = $_POST['temple_title'];
$temple_cat = $_POST['temple_cat'];
$cat = $_POST['cat'];
$bramhin_id = $_POST['bramhin'];
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

if(empty($temple_img1)){

$temple_img1 = $new_p_image1;

}


if(empty($temple_img2)){

$temple_img2 = $new_p_image2;

}

if(empty($temple_img3)){

$temple_img3 = $new_p_image3;

}


move_uploaded_file($temp_name1,"temple_images/$temple_img1");
move_uploaded_file($temp_name2,"temple_images/$temple_img2");
move_uploaded_file($temp_name3,"temple_images/$temple_img3");

$update_temple = "update temples set p_cat_id='$temple_cat',cat_id='$cat',bramhin_id='$bramhin_id',date=NOW(),temple_title='$temple_title',temple_url='$temple_url',temple_img1='$temple_img1',temple_img2='$temple_img2',temple_img3='$temple_img3',temple_price='$temple_price',temple_psp_price='$psp_price',temple_desc='$temple_desc',temple_features='$temple_features',temple_video='$temple_video',temple_keywords='$temple_keywords',temple_label='$temple_label',status='$status' where temple_id='$p_id'";

$run_temple = mysqli_query($con,$update_temple);

if($run_temple){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_temples','_self')</script>";

}

}

?>

<?php } ?>

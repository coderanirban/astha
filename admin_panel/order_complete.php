<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['order_complete'])){

$order_id = $_GET['order_complete'];

$order_complete = "update  puja_orders set order_status='Complete' where order_id='$order_id'";

$run_complete = mysqli_query($con,$order_complete);

if($run_complete){

echo "<script>alert('Order Has Been Completed')</script>";

echo "<script>window.open('index.php?view_orders','_self')</script>";


}


}



?>



<?php }  ?>
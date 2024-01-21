<?php
include "header.php";
include "sidebar.php";

if(!isset($_SESSION['customer_id']) && $_SESSION['login_status'] != TRUE){
	
	echo "<script>location.href= 'login.php'</script>";

}



?>

<div class="main">
  <div class="container">
	  <h4> <a href="mandir-list.php"> << Back to list </a> </h4>
 <div class="row mb-5 pt-3 justify-content-center" style="background: #fff;">
		
		<div class="col-md-8">
			<div class="login-form">
			  
				<table class="table" border="1" width="100%"> 
				<tr> 
					<td>Sl No.</td>
					<td>Temple Name</td>
					<td>Bramhin Name</td>
					<td>Puja Date</td>
					<td>Payment Status</td>
					<td>Transaction No</td>
				</tr>
					<?php
					
					$get_orders = "select * from puja_orders where customer_id=".$_SESSION['customer_id'];

					$run_orders = mysqli_query($con,$get_orders);
					$row = mysqli_num_rows($run_orders);
					if ($row > 0){
					$i = 0;

					

					while ($row_orders = mysqli_fetch_array($run_orders)) {

					$order_id = $row_orders['order_id'];

					$c_id = $row_orders['customer_id'];
					$order_date = $row_orders['order_date'];
					$order_qty = $row_orders['order_qty'];
					$total_amount = $row_orders['total_amount'];

					$temple_id = $row_orders['temple_id'];


					$payment_status = $row_orders['payment_status'];
					$transaction_no = $row_orders['transaction_no'];

					$get_products = "select temples.*, bramhins.bramhin_title 
									 from temples 
									 INNER JOIN bramhins ON bramhins.bramhin_id=temples.bramhin_id
									 where temple_id='$temple_id'";

					$run_products = mysqli_query($con,$get_products);

					$row_products = mysqli_fetch_array($run_products);

					$temple_title = $row_products['temple_title'];
					$bramhin_title = $row_products['bramhin_title'];

					$i++;
						
					?>
					
					<tr> 
					<td><?php echo $i;?></td>
					<td><?php echo $temple_title;?></td>
					<td><?php echo $bramhin_title;?></td>
					<td><?php echo $order_date;?></td>
					<td><?php echo $payment_status;?></td>
					<td><?php echo $transaction_no;?></td>
				</tr>
					
					<?php } } else{ ?>
					
					<tr> <td colspan="6">  No Record found. <a href="mandir-list.php">Go to madir list</a>   </td> </tr>
					
						
				<?php	} ?>
				</table>
				
				
				
			</div>
			
		</div>
		
	
    </div>

  </div>
  <!-- container close here -->
</div>
<!-- main close here -->

 
</body>

<?php include "footer.php"; ?>

</html>
<?php
include "header.php";
include "sidebar.php";

if(isset($_GET['temple_id'])){
$_SESSION['temple_id'] = $_GET['temple_id'];

}


if(isset($_SESSION['customer_id']) && $_SESSION['login_status'] == TRUE){
	
	if(isset($_GET['temple_id'])){
		$temple_id = $_GET['temple_id'];
	}else{
		$temple_id = $_SESSION['temple_id'];
	}
	
	$get_temples = "select * from temples where temple_id=".$temple_id;
	$run_temples = mysqli_query($con,$get_temples);
	$row_temples = mysqli_fetch_array($run_temples);
	
	
	
	$price = $row_temples['temple_psp_price'];
	$randomNumber = random_int(100000, 999999);
	$customer_id = $_SESSION['customer_id'];
	$invoice_no = date('Ymd').$randomNumber;
	
	
	if (isset($_POST['submit']) && $_POST['submit'] == "Submit" ) { 
	
	$paymentstatus = $_POST['payment_status'];
	$transaction_no = $_POST['transaction_no']?'':"N/A";

	 $cartInsertQuery=  "INSERT INTO `puja_orders`  (`order_id`, `customer_id`, `total_amount`, `invoice_no`, `order_date`, `order_status`, `temple_id`, `payment_status`,`transaction_no`, `order_qty`)  VALUES (NULL, '$customer_id', '$price' , '$invoice_no', current_timestamp(), 'Incomplete', '$temple_id', '$paymentstatus', '$transaction_no', '1')"; 

	$cartInsertRes = mysqli_query( $con, $cartInsertQuery );
	$insertId = mysqli_insert_id($con);

	if($insertId  > 0){

		echo "<script> alert('Order Submited Successfully!'); location.href= 'my-bookings.php'; </script>";

	}

	}

	
}else{
			
	
	echo "<script> location.href= 'login.php?src=booking.php&temple_id=".$_GET['temple_id']."'; </script>";

}


?>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
    }

    body {
      background: #d4723d;
      font-family: 'Rubik', sans-serif;
    }

    .login-form {
      background: #fff;
      width: 500px;
      margin: 65px auto;
      border-radius: 4px;
      box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
    }

    .login-form h1 {
      padding: 35px 35px 0 35px;
      font-weight: 300;
    }

    .login-form .content {
      padding: 35px;
      text-align: center;
    }

    .login-form .input-field {
      padding: 12px 5px;
    }

    .login-form .input-field input {
      font-size: 16px;
      display: block;
      font-family: 'Rubik', sans-serif;
      width: 100%;
      padding: 10px 1px;
      border: 0;
      border-bottom: 1px solid #747474;
      outline: none;
      -webkit-transition: all .2s;
      transition: all .2s;
    }

    .login-form .input-field input::placeholder {
      text-transform: none;
    }

    .login-form .input-field input:focus {
      border-color: #222;
    }

    .login-form a.link {
      text-decoration: none;
      color: #747474;
      letter-spacing: 0.2px;
      text-transform: uppercase;
      display: inline-block;
    }

    .login-form .action {
      display: flex;
      flex-direction: row;
    }

    .login-form .action button {
      width: 100%;
      border: none;
      padding: 18px;
      font-family: 'Rubik', sans-serif;
      cursor: pointer;
      text-transform: uppercase;
      background: #e8e9ec;
      color: #777;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 0;
      letter-spacing: 0.2px;
      outline: 0;
      transition: all .3s;
    }

    .login-form .action button:hover {
      background: #d8d8d8;
    }

    .login-form .action button:nth-child(1) {
      background: #2d3b55;
      color: #fff;
    }

    .login-form .action button:nth-child(1):hover {
      background: #3c4d6d;
    }
  </style>
<div class="main">
  <div class="container">
	  <h4> <a href="mandir-list.php"> << Back to list </a> </h4>
 <div class="row mb-5 pt-3 justify-content-center" style="background: #fff;">
		
		<div class="col-md-8">
			<div class="login-form">
			  <form method="post" action="#">
				<h4 class="text-center pt-3">Make Payment</h4>
				<div class="content">
					<img src="assest/img/qr.png" width="200px">
					<p> You can phone-pay and google page to us and submit your tarnsction no below.</p>
				  <div class="input-field">
					 Please choose your payment status
					<select name="payment_status" required>
					  <option value="Unpaid"> Unpaid</option>
					  <option value="Paid"> Paid</option>
					</select>
				  </div>
				  <div class="input-field">
					<input name="transaction_no" type="text" placeholder="Enter Transaction no if you paid" autocomplete="off" >
				  </div>
				</div>
				<div class="action justify-content-center">
				  <input type="submit" name="submit" value="Submit" style="padding: 10px; margin-bottom: 20px; border-radius: 5px; width: 100px;">
				</div>
			  </form>
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
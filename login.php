<?php
include "header.php";
include "sidebar.php";
//print_r($_SESSION);
if(isset($_SESSION['customer_id']) && $_SESSION['login_status'] == TRUE){
	
	echo "<script>location.href= 'my-bookings.php'</script>";

}

if (isset($_POST['login'])) {

	$customer_email = $_POST[ 'c_email' ];
	$customer_pass = $_POST[ 'c_pass' ];
		
	$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer = mysqli_query( $con, $select_customer );
	$check_customer = mysqli_num_rows( $run_customer );
	$fetch_customer = mysqli_fetch_array( $run_customer );

	if ( $check_customer == 0 ) {

		echo "<script>alert('password or email is wrong')</script>";
		

	} else {
		
		    if(isset($_REQUEST['temple_id']) || isset($_REQUEST['src'])){
	
	   $_SESSION[ 'customer_id' ] = $fetch_customer['customer_id'];
		$_SESSION[ 'login_status' ] = TRUE;

		
	
			echo "<script>alert('You are Logged In')</script>";
			echo "<script>location.href= 'booking.php'</script>";

	
	
         }else {

			   $_SESSION[ 'customer_id' ] = $fetch_customer['customer_id'];
		$_SESSION[ 'login_status' ] = TRUE;


					echo "<script>alert('You are Logged In')</script>";
			echo "<script>location.href= 'my-bookings.php'</script>";


	}
		
		
	}
	
	
	




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
				<h1>Profile Login</h1>
				<div class="content">
				  <div class="input-field">
					<input name="c_email" type="email" placeholder="Enter Registerd Email" autocomplete="off" required>
				  </div>
				  <div class="input-field">
					<input name="c_pass" type="password" placeholder="Enter Password" autocomplete="off" required>
				  </div>
				</div>
				<div class="action">
				  <button type="submit" name="login" value="login">Sign in</button>
				</div>
			  </form><br>
				<h4 align="center">New User? <a href="register.php">Click here to Register </a></h4>
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
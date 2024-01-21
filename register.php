<?php
include "header.php";
include "sidebar.php";
//print_r($_SESSION);
if(isset($_SESSION['customer_id']) && $_SESSION['login_status'] == TRUE){
	
	echo "<script>location.href= 'my-bookings.php'</script>";

}

if (isset($_POST['Register'])) {

	$customer_name = $_POST[ 'customer_name' ];
	$customer_email = $_POST[ 'customer_email' ];
	$customer_pass = $_POST[ 'customer_pass' ];
	$customer_contact = $_POST[ 'customer_contact' ];
	$customer_address = $_POST[ 'customer_address' ];
	
	
	  $CutomerInsertQuery=  "INSERT INTO `customers`  (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_address`)  VALUES (NULL,  '$customer_name' , '$customer_email', '$customer_pass', '$customer_contact', '$customer_address')";  
	$CutomerInsertRes = mysqli_query( $con, $CutomerInsertQuery );
	$insertId = mysqli_insert_id($con);

	if($insertId  > 0){

		echo "<script> alert('Customer Registration Successfully Done!'); location.href= 'login.php'; </script>";

	}else{
		echo "<script> alert('Network Error! Please try again after some time!'); location.href= 'register.php'; </script>";
	}


}



?>
 <style>
     

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            margin-top: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
			height: 30px;
        }

        .submit-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #0ba6ff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<div class="main">
  <div class="container">
	  <h4> <a href="mandir-list.php"> << Back to list </a> </h4>
    <div class="row mb-5 pt-3 justify-content-center" style="background: #fff;">
		
		<div class="col-md-8">
			    <h2 align="center">User Registration</h2>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="customer_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="customer_email" required>
		
        <label for="email">password:</label>
        <input type="password" id="password" name="customer_pass" required>
		

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="customer_contact" required>

        <label for="address">Address:</label>
        <textarea id="address" name="customer_address" rows="4" required></textarea>

        <div class="submit-button">
            <input type="submit" value="Register" name="Register"> 
        </div>
    </form>
			
		</div>
		
	
    </div>

  </div>
  <!-- container close here -->
</div>
<!-- main close here -->

 
</body>

<?php include "footer.php"; ?>

</html>
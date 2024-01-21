<?php 
session_start();
include("includes/db.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aswtha</title>
	<!-- <link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<link rel="shortcut icon" href="pradip.png" type="image/x-icon"> -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="pradip.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="assest/css/responsive.css">

</head>

<body>

	<!-- <audio src="om song.mp3" controls></audio> -->

	<nav>
		<span class="con" onclick="opensidebar()">&Congruent;</span>
		<a href="Index.php">
			<p class="title">			
			<img src="assest/img/pradip.png" alt="pradip_img" class="title_img">			
			Aastha			
			<img src="assest/img/pradip.png" alt="pradip_img" class="title_img">		
			</p>
		</a>
		<?php
		if(isset($_SESSION['customer_id']) && $_SESSION['login_status'] == TRUE){ ?>
	
			<div class="buttons">
			<a href="logout.php"><button class="login">Logout</button></a>
			
		</div>

	<?php	}else{?>
		
		<div class="buttons">
			<a href="login.php"><button class="login">Login</button></a>
			
			<a href="register.php"><button class="reg">Register</button></a>
		</div>
			
		<?php }
		?>

		
	</nav>

	<div class="body1">
		<div class="Homam">
			<a href="index.php">HOME</a>
		</div>

		<div class="Temples">
			<a href="mandir-list.php">TEMPLES</a>
		</div>

		<div class="Contact">
			<a href="contact.php">CONTACT</a>
		</div>
	</div>

<?php
include "header.php";
include "sidebar.php";
?>

<div class="main">
  <div class="container">
	  <h4> <a href="mandir-list.php"> << Back to list </a> </h4>
    <div class="row mb-5 pt-3" style="background: #fff;">
		<?php 
		$get_temples = "select * from temples where temple_id=".$_GET['temple_id'];

		$run_temples = mysqli_query($con,$get_temples);

		$row_temples = mysqli_fetch_array($run_temples); ?>
		
      <div class="col-md-4 col-xs-12 mb-4">
        <div class="card">
          <img src="admin_panel/temple_images/<?php echo $row_temples['temple_img1']; ?>" />
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_temples['temple_title']; ?></h4>
          </div>
         </div>
      </div>
		<div class="col-md-4 col-xs-12 mb-4">
			<p>Bargabhima Temple is a Hindu temple in Tamluk near Kolkata in Purba Medinipur district of West Bengal. It is around 87.2 km from Kolkata, 85 km from Kharagpur, and well connected by NH-6 and south eastern railway tracks. It is an Kali temple.</p>
      <p>Address: Tamluk, West Bengal 721636 
District: Purba Medinipur</p>
      <p>Puja Cost: INR.<?php echo $row_temples['temple_psp_price'];?></p>
			 <div >
				 


            <a href="booking.php?temple_id=<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">Book Puja</a>
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
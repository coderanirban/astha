<?php
include "header.php";
include "sidebar.php";
?>

<div class="main">
  <div class="container-fluid mt-auto">
    <div class="row mt-4 mb-5 mandirlist">
		<?php 
		
		if(isset($_POST['search'])) {
			
			$qry=" where temple_title like '%".$_POST['search']."%'";
		}else{
			$qry="";
		}
		
		
		$get_temples = "select * from temples".$qry;

		$run_temples = mysqli_query($con,$get_temples);

		while ($row_temples = mysqli_fetch_array($run_temples)) {  ?>
		
      <div class="col-md-3 col-xs-12 mb-4">
        <div class="card">
          <img src="admin_panel\temple_images\bargabhima 1.jpg"<?php echo $row_temples['temple_img1']; ?>" />
          <div class="card-body">
          <h4><B>Bargabhima Temple</B></h4>
          </div>
          <div class="card-footer">
            <a href="mandir-details.php?temple_id=<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">View</a>
            <a href="booking.php?temple_id=<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 mb-4">
        <div class="card">
          <img src="admin_panel\temple_images\dakhineswar2.jpg"<?php echo $row_temples['temple_img1']; ?>" />
          <div class="card-body">
            <h4><B>Dakhineswar Temple</B></h4>
          </div>
          <div class="card-footer">
            <a href="mandir-details.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">View</a>
            <a href="booking.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 mb-4">
        <div class="card">
          <img src="admin_panel\temple_images\nachinda2.jpeg"<?php echo $row_temples['temple_img1']; ?>" />
          <div class="card-body">
            <h4 ><B>Nachinda Temple</B></h4>
          </div>
          <div class="card-footer">
            <a href="mandir-details.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">View</a>
            <a href="booking.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 mb-4">
        <div class="card">
          <img src="admin_panel\temple_images\tarkeshwar1.jpg"<?php echo $row_temples['temple_img1']; ?>" />
          <div class="card-body">
            <h4><B>Tarkeshwar Temple</B></h4>
          </div>
          <div class="card-footer">
            <a href="mandir-details.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">View</a>
            <a href="booking.php<?php echo $row_temples['temple_id']; ?>" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>
		
	<?php } ?>	
    </div>

  </div>
  <!-- container close here -->
</div>
<!-- main close here -->

 
</body>

<?php include "footer.php"; ?>

</html>
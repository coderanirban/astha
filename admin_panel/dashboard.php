<?php
if ( !isset( $_SESSION[ 'admin_email' ] ) ) {

	echo "<script>window.open('login.php','_self')</script>";

} else {




	?>



	<div class="row">
		<!-- 2 row Starts -->

		<div class="col-lg-4 col-md-6">
			<!-- col-lg-3 col-md-6 Starts -->

			<div class="panel ">
				<!-- panel panel-primary Starts -->

				<div class="panel-heading">
					<!-- panel-heading Starts -->

					<div class="row">
						<!-- panel-heading row Starts -->


						<div class="col-xs-12 text-center">
							<!-- col-xs-9 text-right Starts -->

							<div class="huge">
								<?php echo $count_temples; ?> </div>

							<div>Temples</div>

						</div>
						<!-- col-xs-9 text-right Ends -->

					</div>
					<!-- panel-heading row Ends -->

				</div>
				<!-- panel-heading Ends -->

				<a href="index.php?view_products">

					<div class="panel-footer">
						<!-- panel-footer Starts -->

						<span class="pull-left"> View Details </span>

					

						<div class="clearfix"></div>

					</div>
					<!-- panel-footer Ends -->

				</a>

			</div>
			<!-- panel panel-primary Ends -->

		</div>
		<!-- col-lg-3 col-md-6 Ends -->


		<div class="col-lg-4 col-md-6">
			<!-- col-lg-3 col-md-6 Starts -->

			<div class="panel ">
				<!-- panel panel-green Starts -->

				<div class="panel-heading">
					<!-- panel-heading Starts -->

					<div class="row">
						<!-- panel-heading row Starts -->

						

						<div class="col-xs-12 text-center">
							<!-- col-xs-9 text-right Starts -->

							<div class="huge">
								<?php echo $count_customers; ?> </div>

							<div>Customers</div>

						</div>
						<!-- col-xs-9 text-right Ends -->

					</div>
					<!-- panel-heading row Ends -->

				</div>
				<!-- panel-heading Ends -->

				<a href="index.php?view_customers">

					<div class="panel-footer">
						<!-- panel-footer Starts -->

						<span class="pull-left"> View Details </span>

					

						<div class="clearfix"></div>

					</div>
					<!-- panel-footer Ends -->

				</a>

			</div>
			<!-- panel panel-green Ends -->

		</div>
		<!-- col-lg-3 col-md-6 Ends -->


		<div class="col-lg-4 col-md-6">
			<!-- col-lg-3 col-md-6 Starts -->

			<div class="panel ">
				<!-- panel panel-red Starts -->

				<div class="panel-heading">
					<!-- panel-heading Starts -->

					<div class="row">
						<!-- panel-heading row Starts -->


						<div class="col-xs-12 text-center">
							<!-- col-xs-9 text-right Starts -->

							<div class="huge">
								<?php echo $count_total_orders; ?> </div>

							<div>Puja Orders</div>

						</div>
						<!-- col-xs-9 text-right Ends -->

					</div>
					<!-- panel-heading row Ends -->

				</div>
				<!-- panel-heading Ends -->

				<a href="index.php?view_orders">

					<div class="panel-footer">
						<!-- panel-footer Starts -->

						<span class="pull-left"> View Details </span>

						

						<div class="clearfix"></div>

					</div>
					<!-- panel-footer Ends -->

				</a>

			</div>
			<!-- panel panel-red Ends -->

		</div>
		<!-- col-lg-3 col-md-6 Ends -->


	</div> <!-- 2 row Ends -->

	

	<div class="row">
		<!-- 3 row Starts -->

		<div class="col-lg-12">
			<!-- col-lg-8 Starts -->

			<div class="panel" >
				<!-- panel panel-primary Starts -->

				<div class="panel-heading" style="background: #ff6200">
					<!-- panel-heading Starts -->

					<h3 class="panel-title">
						<!-- panel-title Starts -->

						 New Puja Orders

					</h3>
					<!-- panel-title Ends -->

				</div>
				<!-- panel-heading Ends -->

				<div class="panel-body">
					<!-- panel-body Starts -->

					<div class="table-responsive">
						<!-- table-responsive Starts -->

						<table class="table table-bordered table-hover table-striped">
							<!-- table table-bordered table-hover table-striped Starts -->

							<thead>
								<!-- thead Starts -->

								<tr>
									<th>Order #</th>
									<th>Customer</th>
									<th>Invoice No</th>
									<th>Temple</th>
									<th>Status</th>


								</tr>

							</thead>
							<!-- thead Ends -->

							<tbody>
								<!-- tbody Starts -->

								<?php

								$i = 0;

								$get_order = "select * from puja_orders where order_status='Incomplete' order by 1 DESC LIMIT 0,5";
								$run_order = mysqli_query( $con, $get_order );

								while ( $row_order = mysqli_fetch_array( $run_order ) ) {


									$order_id = $row_order[ 'order_id' ];

									$c_id = $row_order[ 'customer_id' ];

									$invoice_no = $row_order[ 'invoice_no' ];

									$product_id = $row_order[ 'temple_id' ];


									$order_status = $row_order[ 'order_status' ];


									$i++;

									?>

								<tr>

									<td>
										<?php echo $i; ?>
									</td>

									<td>
										<?php

										$get_customer = "select * from customers where customer_id='$c_id'";
										$run_customer = mysqli_query( $con, $get_customer );
										$row_customer = mysqli_fetch_array( $run_customer );
										$customer_email = $row_customer[ 'customer_email' ];
										echo $customer_email;
										?>
									</td>

									<td>
										<?php echo $invoice_no; ?>
									</td>
									<td>
										<?php

										$get_temple = "select * from temples where temple_id='$product_id'";
										$run_temple = mysqli_query( $con, $get_temple );
										$row_temple = mysqli_fetch_array( $run_temple );
										$temple_title = $row_temple[ 'temple_title' ];
										echo $temple_title;
										?>
									</td>
									<td>
										<?php
										if ( $order_status == 'pending' ) {

											echo $order_status = 'pending';

										} else {

											echo $order_status = 'Complete';

										}

										?>
									</td>

								</tr>

								<?php } ?>

							</tbody>
							<!-- tbody Ends -->


						</table>
						<!-- table table-bordered table-hover table-striped Ends -->

					</div>
					<!-- table-responsive Ends -->

					<div class="text-left">
						<!-- text-right Starts -->

						<a href="index.php?view_orders"> View All Orders  </a>
						
					</div>
					<!-- text-right Ends -->


				</div>
				<!-- panel-body Ends -->

			</div>
			<!-- panel panel-primary Ends -->

		</div>
		<!-- col-lg-8 Ends -->

		<div class="col-md-4">
			<!-- col-md-4 Starts -->

			<div class="panel">
				<!-- panel Starts -->



			</div>
			<!-- panel Ends -->

		</div>
		<!-- col-md-4 Ends -->

	</div> <!-- 3 row Ends -->

	<?php } ?>
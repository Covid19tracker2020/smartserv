<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Company Metrics</title>
</head>
<body>
<?php  
include("../login/header.php");
include("../login/connection.php");
?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -20px">
			</div>
			<div class="col-md-10">
				 <h4 class="my-2">Company Metrics</h4>
				<div class="col-md-12 my-1">
					<div class="row">
						<div class="col-md-3 bg-success mx-2" style="height: 130px">
							<div class="col-md-12">
								<?php
									$ad=mysqli_query($conn,"SELECT * FROM admin");
									$num=mysqli_num_rows($ad);
								?>
								<div class="row">
									<div class="col-md-8">
										<h5 class=" my-2 text-white text-center"><?php echo $num;  ?></h5>
										<h5 class="text-white">Total</h5> <h5 class="text-white">Revenue</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-info mx-2" style="height: 130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">          
										<h5 class=" my-2 text-white text-center"><?php
										$ad1=mysqli_query($conn,"SELECT * FROM doctor");
									    $num1=mysqli_num_rows($ad1);
										 ?><?php echo $num1;  ?></h5>
										<h5 class="text-white">Total</h5> <h5 class="text-white">Jobs Avg</h5>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-md-3 bg-warning mx-2" style="height: 130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<?php
									$ad2=mysqli_query($conn,"SELECT * FROM patient");
									$num2=mysqli_num_rows($ad2);
								?>
										<h5 class=" my-2 text-white text-center"><?php echo $num2; ?></h5>
										<h5 class="text-white">Tickets</h5> <h5 class="text-white">Created</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<div class="col-md-8">
										<?php
									$ad2=mysqli_query($conn,"SELECT * FROM patient");
									$num2=mysqli_num_rows($ad2);
								?>
										<h5 class=" my-2 text-white text-center"><?php echo $num2; ?></h5>
										<h5 class="text-white">Tickets</h5> <h5 class="text-white">Scheduled</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<div class="col-md-8">
										<?php
									$ad2=mysqli_query($conn,"SELECT * FROM patient");
									$num2=mysqli_num_rows($ad2);
								?>
										<h5 class=" my-2 text-white text-center"><?php echo $num2; ?></h5>
										<h5 class="text-white">Membership</h5> <h5 class="text-white">sold</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-book-open fa-3x  my-4" style="color: white"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-success mx-2 my-2" style="height:130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<div class="col-md-8">
										<?php
									$ad2=mysqli_query($conn,"SELECT * FROM patient");
									$num2=mysqli_num_rows($ad2);
								?>
										<h5 class=" my-2 text-white text-center"><?php echo $num2; ?></h5>
										<h5 class="text-white">Jobs</h5> <h5 class="text-white">Completed</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-money-check-alt fa-3x  my-4" style="color: white"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-success mx-2 my-2" style="height:130px">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<div class="col-md-8">
										<?php
									$ad2=mysqli_query($conn,"SELECT * FROM patient");
									$num2=mysqli_num_rows($ad2);
								?>
										<h5 class=" my-2 text-white text-center"><?php echo $num2; ?></h5>
										<h5 class="text-white">Total</h5> <h5 class="text-white">Canceled</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-money-check-alt fa-3x  my-4" style="color: white"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
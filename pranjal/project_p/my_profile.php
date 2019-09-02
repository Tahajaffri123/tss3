<?php
include("db.php");
// print_r($_SESSION);
// die;
 if(! isset($_SESSION['is_user_logged_in']))
 {
 	header("location:login.php");
 }
include("header.php");
$a = $_SESSION['id'];
$que = "SELECT * FROM user WHERE id = $a";

$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
//print_r($data);
// die;
?>
	<div class="col-md-8 offset-md-2">
				<h3 class="my-bg p-3 text-center">My Profile</h3>
					<div class="row">
						<div class="col-md-8 offset-md-2" >
							
							<div class="card bg-dark text-light">
								<div class="card-header ">
									<h5 class="text-center">View Your Profile </h5>
									<div class="card-body">
										<table class="table text-light">
											<tr>
												<td>Full Name</td>
												<td><?php echo $data['full_name'];?></td>
											</tr>	
											<tr>
												<td>UserName</td>
												<td><?php echo $data['username'];?></td>
												</tr>	
											<tr>
												<td>Contact</td>
												<td><?php echo $data['contact'];?></td>
											</tr>	
											<tr>
												<td>Address</td>
												<td><?php echo $data['address'];?></td>
											</tr>	
											<tr>
												<td>Gender</td>
												<td><?php echo $data['gender'];?></td>
											</tr>	
											<tr>
												<td>City</td>
												<td><?php echo $data['city'];?></td>
											</tr>	
										</table>
									</div>
									<div class="card-footer text-center">
										<a href="edit_profile.php" class="btn btn-info">Edit</a>
										<a href="change_password.php" class="btn btn-info">Change Password</a>
									</div>
								</div>
							</div>
						</div>
					</div>
 					</div>
 				</div>

	</div>
	<br />
 <?php 
	 include("footer.php");
?>
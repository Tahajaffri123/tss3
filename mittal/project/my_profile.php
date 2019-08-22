<?php
include("dbinfo.php");
if (! isset ($_SESSION["is_user_logged_in"]))
{
	header("location:login.php");
}
include("header.php");
$a=$_SESSION['id'];
$que="SELECT * FROM register WHERE id = $a ";
$result = mysqli_query($con,$que);
$data = mysqli_fetch_assoc($result);
 // print_r($data);
 // die;
?>
<div class="col-md-8 offset-md-2">
			<h5 class="my-bg p-2 text-center">My Profile</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card mb-4">
						<div class="card-header text-center">View Your Profile</div>
						<div class="card-body">
							<table class=
							"table">
							<tr>
								<td>Full Name</td>

								<td><?php echo $data['full_name'] ?></td>
							</tr>
							<tr>
								<td>Username</td>

								<td><?php echo $data['username'] ?></td>
							</tr>
							<tr>
								<td>Contact</td>

								<td><?php echo $data['contact'] ?></td>
							</tr>
							<tr>
								<td>Address</td>

								<td><?php echo $data['address'] ?></td>
							</tr>
							<tr>
								<td>City</td>

								<td><?php echo $data['city'] ?></td>
							</tr>
						</table>
					</div>
					<div class="card-footer">
						<a href="edit_profile.php" class="btn btn-primary">Edit</a>
						<a href="change_password.php" class="btn btn-primary">Change Password</a>
					</div>
					</div>
					
				</div>
			</div>
		</div>
	
	<?php
	include("footer.php")
	?>

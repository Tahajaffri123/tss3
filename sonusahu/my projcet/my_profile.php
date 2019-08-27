<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$a = $_SESSION['id'];
$que="SELECT * FROM user WHERE id=$a";

$result = mysqli_query($conn, $que);
$data = mysqli_fetch_assoc($result);
?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">My Profile</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">View Your Profile</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<td>Full Name</td>
									<td><?php echo $data['fullname']; ?></td>
								</tr>
								<tr>
									<td>Username</td>
									<td><?php echo $data['username']; ?></td>
								</tr>
								<tr>
									<td>Contact</td>
									<td><?php echo $data['contact']; ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $data['address']; ?></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><?php echo $data['gender']; ?></td>
								</tr>
								<tr>
									<td>City</td>
									<td><?php echo $data['city']; ?></td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<a href="edit_profile.php" class="btn btn-sm btn-info">Edit</a>
							<a href="change_password.php" class="btn btn-sm btn-info">Change Password</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>
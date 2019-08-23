<?php
include("db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}


include("header.php");

$a = $_SESSION['id'];
$que="SELECT * FROM user WHERE id=$a";

$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>
<div class="container-fluid back-new">
<div class="container content login-content-1">
	<div class="row back-new" >
		<div class="col-md-12 new-content">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-10 offset-1 table-responsive text-center">
					<h5 class="my-bg p-2 text-center profile">My Profile</h5>
					<table class="table table-hover table-dark table-bordered">
							<tr class="my-details">
								<td>Full Name</td>
								<td><?php echo $data['fullname'];?></td>
							</tr>
							<tr class="my-details">
								<td>Title</td>
								<td><?php echo $data['email'];?></td>
							</tr>
							<tr class="my-details">
								<td>Contact</td>
								<td><?php echo $data['contact'];?></td>
							</tr>
							<tr class="my-details">
								<td>Gender</td>
								<td><?php echo $data['gender'];?></td>
							</tr>
							<tr class="my-details">
								<td>Address</td>
								<td><?php echo $data['address'];?></td>
							</tr class="my-details">
							<tr class="my-details">
								<td>City</td>
								<td><?php echo $data['city'];?></td>
						    </tr>
							<tr class="my-details">
							<td colspan="2"><a href="edit_profile.php" class="btn btn-sm btn-info">Edit Profile</a></td>
							</tr>
							<tr class="my-details">
							<td colspan="2"><a href="edit_profile.php" class="btn btn-sm btn-info">Change Password</a></td>
							</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
include("footer.php");
?>
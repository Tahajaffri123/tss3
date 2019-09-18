<?php
include("db.php");
// Backdoor Protaction Code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$a = $_SESSION['id'];
$que="SELECT * FROM user WHERE id=$a";

$result = mysqli_query($conn, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>
<div class="col-md-9">
	<h5 class="my-gb p-2">Edit Profile</h5>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="update_profile.php" method="post">

				<div class="card">
					<div class="card-header">Edit Your Profile</div>
					<div class="card-body">
						<div class="form-group">
							<label>Full name</label>
							<input value="<?php echo $data['fullname']; ?>"
							type="text" name="fullname" placeholder="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label>Username/Email</label>
								<input disabled="disabled" value="<?php echo $data['username']; ?>" type="text" name="username" placeholder="Username/Email" class="form-control">
							</div>
							
							<div class="form-group">
								<label>Contact</label>
								<input value="<?php echo $data['contact']; ?>" type="text" name="contact" placeholder="Contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<Br/>
								<input type="radio" <?php if($data['gender']=="male") echo "checked='checked'"; ?> name="gender" value="male"/>Male
								<input type="radio" <?php if($data['gender']=="female") echo "checked='checked'"; ?> name="gender" value="female" />Female
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea placeholder="Address" name="address" class="form-control"><?php echo $data['address']; ?></textarea>
							</div>

							<div class="form-group">
								<label>City</label>
								<select class="form-control" name="city">
									<option>Select</option>
									<option <?php if($data['city']=='Indore') echo "selected='selected'" ?>>Indore</option>
									<option <?php if($data['city']=='Bhopal') echo "selected='selected'" ?>>Bhopal</option>
									<option <?php if($data['city']=='Delhi') echo "selected='selected'" ?>>Delhi</option>
									<option <?php if($data['city']=='Pune') echo "selected='selected'" ?>>Pune</option>
								</select>
								
							</div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-dark">Edit</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>
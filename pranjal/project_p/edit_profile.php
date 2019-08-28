<?php
		include("db.php");
		//Backdoor protaction code
		// print_r($_SESSION);
		if(! isset($_SESSION['is_user_logged_in']))
		{
			header("location:login.php");
		}
			include("header.php");

			$a = $_SESSION['id'];
		    $que = "SELECT * FROM user WHERE id =$a";
			// die;

			$result = mysqli_query($con , $que);
			$data = mysqli_fetch_assoc($result);
			// print_r($data);
			// die;
?>

				<div class="col-md-8 offset-md-2">
					<h3 class="my-bg p-3 text-center"> Edit Profile </h3>
					<div class="row">
						<div class="col-md-8 offset-md-2" >
							<form action="update_profile.php" method="post">
							<div class="card bg-dark text-light">
								<div class="card-header">Edit Your Profile</div>
							<div class="card-body">

								<div class="form-group">
									<label><b>Full Name</b></label>
									<input value="<?php echo $data['full_name'];?>" type="text" name="f_name" class="form-control" placeholder="Enter Your Full Name">
								</div>
								<div class="form-group">
									<label><b>UserName/Email</b></label>
									<input disabled="disabled" value="<?php echo $data['username'];?>"  type="text" name="user_name" class="form-control" placeholder="Enter Your Email-id">
								</div>
								<div class="form-group">
									<label ><b>Contact No.</b></label>
									<input value="<?php echo $data['contact'];?>"  type="text" name="contact" class="form-control" placeholder="Enter Your Contact No.">
								</div>
								<div class="form-group">
									<label class="text-light"><b>Gender</b></label>
									<input type="radio" <?php if($data['gender']=="male") echo "checked='checked'";?> name="gender" value="male">Male
									<input type="radio" <?php if($data['gender']=="female") echo "checked='checked'";?> name="gender" value="female" >Female
								</div>

								<div class="form-group">
									<label><b>Address</b></label>
									<textarea class="form-control" placeholder="Address" name="add"><?php echo $data['address'];?></textarea>
								</div>
								<div class="form-group"><label class="text-light"><b>City</b></label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option <?php if($data['city']=='Khargone') echo "selected=selected"?>>Khargone</option>
										<option <?php if($data['city']=='Indore') echo "selected=selected"?>>Indore</option>
										<option <?php if($data['city']=='Khandwa') echo "selected=selected"?>>Khandwa</option>
										<option <?php if($data['city']=='Pune') echo "selected=selected"?>>Pune</option>
									</select>
								</div>
							
							<div class="card-footer text-center">
								<button type="submit" class="btn btn-primary ">Edited</button>
							</div>

						</div>
					</div>
				</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<br />
<?php 
	include ("footer.php");
 ?>


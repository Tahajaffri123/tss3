<?php
 include("header.php")
?>		

				<div class="col-md-8 offset-md-2">
					<h3 class="my-bg p-3 text-center">User Signup </h3>
					<div class="row">
						<div class="col-md-8 offset-md-2" >
							<form action="save.php" method="post">
							<div class="card bg-dark text-light">
								<div class="card-header"><h5 class="text-light">Signup,Already Registered<a href="login.php"> Click here</a> </h5>
							</div>
							<div class="card-body">

								<div class="form-group">
									<label><b>Full Name</b></label>
									<input type="text" name="f_name" class="form-control" placeholder="Enter Your Full Name">
								</div>
								<div class="form-group">
									<label><b>UserName/Email</b></label>
									<input type="text" name="user_name" class="form-control" placeholder="Enter Your Email-id">
								</div>
								<div class="form-group">
									<label><b>Password</b></label>
									<input type="password" name="pass" class="form-control" placeholder="Enter Your Password">
								</div>
								<div class="form-group">
									<label><b>Re-Password</b></label>
									<input type="password" class="form-control" placeholder="Enter Your Re-Password">
								</div>
								<div class="form-group">
									<label ><b>Contact No.</b></label>
									<input type="text" name="contact" class="form-control" placeholder="Enter Your Contact No.">
								</div>
								<div class="form-group">
									<label class="text-light"><b>Gender</b></label>
									<input type="radio" name="gender" value="male">Male
									<input type="radio" name="gender" value="female" >Female
								</div>

								<div class="form-group">
									<label><b>Address</b></label>
									<textarea class="form-control" placeholder="Address" name="add"></textarea>
								</div>
								<div class="form-group"><label class="text-light"><b>City</b></label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option>Khargone</option>
										<option>Indore</option>
										<option>Khandwa</option>
										<option>Pune</option>
									</select>
								</div>
							
							<div class="card-footer text-center">
								<button type="submit" class="btn btn-primary ">Signup</button>
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


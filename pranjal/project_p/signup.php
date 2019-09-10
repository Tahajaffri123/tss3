<?php
 include("header.php")
?>		
<script type="text/javascript">
	function show1()
	{
		document.getElementById("submit-btn").
		setAttribute("class", "btn btn-sucess btn-lg");
	}
	function show2(){
		document.getElementById("submit-btn").setAttribute("class", "btn btn-dark");
	}
</script>
<script type="text/javascript" src="js/val.js"></script>

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
									<input type="text" name="f_name" id="f_name" class="form-control" placeholder="Enter Your Full Name">
									<p id="f_name_msg" class="text-danger error_msg"></p>
								</div>
								<div class="form-group">
									<label><b>UserName/Email</b></label>
									<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Email-id">
									<p id="user_name_msg" class="text-danger error_msg"></p>

								</div>
								<div class="form-group">
									<label><b>Password</b></label>
									<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Your Password">
									<p id="pass_msg" class="text-danger error_msg"></p>
								</div>
								<div class="form-group">
									<label><b>Re-Password</b></label>
									<input type="password" id="re_pass" class="form-control" placeholder="Enter Your Re-Password">
									<p id="re_pass_msg" class="text-danger error_msg"></p>

								</div>
								<div class="form-group">
									<label ><b>Contact No.</b></label>
									<input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Your Contact No.">
									<p id="contact_msg" class="text-danger error_msg"></p>

								</div>
								<div class="form-group">
									<label class="text-light"><b>Gender</b></label>
									<input type="radio" name="gender" id="male" value="male">Male
									<input type="radio" name="gender" id="female" value="female" >Female
									<p id="gender_msg" class="text-danger error_msg"></p>
								</div>

								<div class="form-group">
									<label><b>Address</b></label>
									<textarea class="form-control" id="add" placeholder="Address" name="add"></textarea>
									<p id="add_msg" class="text-danger error_msg"></p>

								</div>
								<div class="form-group" ><label class="text-light"><b>City</b></label>
									<select class="form-control" name="city" id="city">
										<option>Select</option>
										<option>Khargone</option>
										<option>Indore</option>
										<option>Khandwa</option>
										<option>Pune</option>
									</select>
									<p id="city_msg" class="text-danger error_msg"></p>

								</div>
							
							<div class="card-footer text-center">
								<button type="submit" id="submit-btn" class="btn btn-primary ">SignUp</button>
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


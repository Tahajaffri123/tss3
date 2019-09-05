<?php
include('header.php');
?>
<script type="text/javascript" src="js/val.js"></script>
<div class="container-fluid back-new">
<div class="container content">
	<div class="row">
		<div class="col-md-8 offset-md-2 new-content">
			<h3 class="user-back p-2 text-center">User Register</h3>
				<form action="save.php" method="post">
					<div class="card mb-4">
						<div class="card-header">
							<h5>Signup, Already Registered <a href="login.html">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" id="f_name" name="fullname" placeholder="Full Name" class="form-control">
								<p id="f_name_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" id="email" name="email" placeholder="Username/Email" class="form-control">
								<p id="email_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
								<p id="pass_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Re-Password</label>
								<input type="password" id="re_pass" placeholder="Re-Password" class="form-control">
								<p id="re_pass_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" id="contact" name="contact" placeholder="Contact" class="form-control">
								<p id="contact_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<Br/>
								<input type="radio" id="male" name="gender" value="male" />Male
								<input type="radio" id="female" name="gender" value="female" />Female
								<p id="gender_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea placeholder="Address" id="add" name="address" class="form-control"></textarea>
								<p id="add_msg" class="text-danger error_msg"></p>
							</div>

							<div class="form-group">
								<label>City</label>
								<select class="form-control" id="city" name="city">
									<option>Select</option>
									<option>Indore</option>
									<option>Bhopal</option>
									<option>Delhi</option>
									<option>Pune</option>
								</select>
								<p id="city_msg" class="text-danger error_msg"></p>
								
							</div>

						</div>
						<div class="card-footer text-center">
							<button type="submit" id="submit-btn" class="btn btn-primary">Sign Up</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>
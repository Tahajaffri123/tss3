 <?php
include('header.php');
?>
<script type="text/javascript">
	function show1()
	{
		document.getElementById("submit-btn").setAttribute("class", "btn btn-success btn-lg");
	}
	function show2()
	{
		document.getElementById("submit-btn").setAttribute("class", "btn btn-dark");
	}
</script>
<script type="text/javascript" src="js/val.js"></script>
		<div class="col-md-9">
			<h5 class="my-bg p-2">User Register</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<form action="save.php" method="post">
					<div class="card mb-4">
						<div class="card-header">
							<h5>Signup, Already Registered <a href="login.html">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" id="f_name" name="f_name" placeholder="Full Name" class="form-control">
								<p id="f_name_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" id="username" name="username" placeholder="Username/Email" class="form-control">
								<p id="username_msg" class="text-danger error_msg"></p>
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
								<input type="radio" id="male" name="gender" value="male"/>Male
								<input type="radio" id="female" name="gender" value="female" />Female
								<p id="gender_msg" class="text-danger error_msg"></p>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea id="add" placeholder="Address" name="add" class="form-control"></textarea>
								<p id="add_msg" class="text-danger error_msg"></p>
							</div>

							<div class="form-group">
								<label>City</label>
								<select id="city" class="form-control" name="city">
									<option>Select</option>
									<option>Indore</option>
									<option>Bhopal</option>
									<option>Delhi</option>
									<option>Pune</option>
								</select>
								<p id="city_msg" class="text-danger error_msg"></p>
								
							</div>

						</div>
						<div class="card-footer">
							<button id="submit-btn" type="submit" class="btn btn-dark">Sign Up</button>
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
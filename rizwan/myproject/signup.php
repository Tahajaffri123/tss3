<?php
include('header.php');
?>
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
								<input type="text" name="fullname" placeholder="Full Name" class="form-control">
							</div>
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" name="email" placeholder="Username/Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Re-Password</label>
								<input type="password" placeholder="Re-Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" name="contact" placeholder="Contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<Br/>
								<input type="radio" name="gender" value="male" />Male
								<input type="radio" name="gender" value="female" />Female
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea placeholder="Address" name="address" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label>City</label>
								<select class="form-control" name="city">
									<option>Select</option>
									<option>Indore</option>
									<option>Bhopal</option>
									<option>Delhi</option>
									<option>Pune</option>
								</select>
								
							</div>

						</div>
						<div class="card-footer text-center">
							<button type="submit" class="btn btn-primary">Sign Up</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
include('footer.php');
?>
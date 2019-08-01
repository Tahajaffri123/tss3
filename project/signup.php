<?php
include('header.php');
?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">User Register</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card mb-4">
						<div class="card-header">
							<h5>Signup, Already Registered <a href="login.html">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Full Name" class="form-control">
							</div>
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" placeholder="Username/Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Re-Password</label>
								<input type="password" placeholder="Re-Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" placeholder="Contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<Br/>
								<input type="radio" name="gender"/>Male
								<input type="radio" name="gender"/>Female
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea placeholder="Address" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label>City</label>
								<select class="form-control">
									<option>Select</option>
									<option>Indore</option>
									<option>Bhopal</option>
									<option>Delhi</option>
									<option>Pune</option>
								</select>
								
							</div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-dark">Sign Up</button>
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
<?php
include("header.php");
?>	
	<div class="body ">
	<div class="col-md-8 offset-md-2 ">
					<h1 class="my-bg p-3 text-center mt-2">User Login </h1>
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
</div>

<br />

<?php
include("footer.php");
?>
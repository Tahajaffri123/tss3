<?php
include("db.php");
include("header.php");
?>


				<div class="col-md-8 offset-md-2">
					<h3 class="my-bg p-3 text-center">User Login</h3>
					<div class="row">
							
						<div class="col-md-8 offset-md-2" >
						<form action="auth.php" method="post">
							<div class="card bg-dark text-light">
								<div class="card-header"><h5>User Login, for New User<a href="signup.php"> Click here</a> </h5>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label><b>UserName/Email</b></label>
									<input type="text" name="username" class="form-control" placeholder="Enter Your Name">
								</div>
								<div class="form-group">
									<label><b>Password</b></label>
									<input type="password" name="pass" class="form-control" placeholder="Enter Your Password">
								</div>
							
							<div class="card-footer  text-center">
								<button type="submit" class="btn btn-primary ">Login</button>
							</div>
							<p class="text-danger text-center">
							<?php 
							if(isset($_SESSION['msg']))
							{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
								
							}
							?>
						</p>
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
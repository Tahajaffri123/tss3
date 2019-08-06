<?php
include("db.php");
include("header.php");

?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">User Login</h5>
			<div class="row">

				<div class="col-md-8 offset-md-2">
					<form action="auth.php" method="post">
						
					<div class="card">
						<div class="card-header">
							<h5>User Login, for New User <a href="signup.html">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" placeholder="Username/Email" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-dark">Login</button>

						</div>
							<p class="text-danger text-center">
								<?php
								// flash messages
								if(isset($_SESSION['msg']))
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}

								?>
							</p>

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
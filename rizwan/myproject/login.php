<?php
include("db.php");
include("header.php");
?>
<div class="container-fluid back-new">
<div class="container content login-content">
	<div class="row back-new" >
		<div class="col-md-8 offset-md-2 new-content">
			<h3 class="user-back p-2 text-center">User Login</h3>
				<form action="authen.php" method="post">
					<div class="card">
						<div class="card-header">
							<h5>User Login, for New User <a href="signup.php">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" name="email" placeholder="Username/Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="card-footer text-center ">
							<button type="submit" class="btn btn-primary">Login</button>
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
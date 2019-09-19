<?php
include("db.php");
include("header.php");

?>
<script type="text/javascript" src="js/auth.js"></script>
		<div class="col-md-9">
			<h5 class="my-bg p-2">User Login</h5>
			<div class="row">
				
				<div class="col-md-8 offset-md-2">
					<form action="auth.php" method="post">
					
					<div class="card">
						<div class="card-header">
							<h5>User Login, for New User <a href="signup.php">Click Here</a> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username/Email</label>
								<input id="username" type="text" name="username" placeholder="Username/Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input id="password" type="password" name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<button type="button" id="submit" class="btn btn-dark">Login<span class="spinner-border text-light spinner-border-sm" id="preloader" style="display: none;"></span></button>

						</div>
						<p class="text-danger text-center" id="error_msg"></p>
								
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php
include("footer.php");
?>
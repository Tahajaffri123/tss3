<?php
	include("db.php");
	// print_r($_SESSION);
	include("header.php");

?>

		<div class="col-md-8 offset-md-2">
					<h3 class="my-bg p-3 text-center">Update Password</h3>
					<div class="row">
							
						<div class="col-md-8 offset-md-2" >
						<form action="update_password.php" method="post">
							<div class="card bg-dark text-light">
								<div class="card-header">
									<h3>Change Your Password</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label><b>Current Password</b></label>
									<input type="password" name="c_pass" class="form-control" placeholder="password">
								</div>
								<div class="form-group">
									<label><b>New Password</b></label>
									<input type="password" name="n_pass" class="form-control" placeholder="password">
								</div>
								<div class="form-group">
									<label><b>Conform Password</b></label>
									<input type="password" name="cn_pass" class="form-control" placeholder="Password">
								</div>
							
							<div class="card-footer  text-center">
								<button type="submit" class="btn btn-primary ">Change Password</button>
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
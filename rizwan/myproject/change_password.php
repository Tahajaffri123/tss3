<?php
include("db.php");
include('header.php');
?>

<div class="container-fluid back-new">
<div class="container content">
	<div class="row">
		<div class="col-md-8 offset-md-2 new-content">
			<h3 class="user-back p-2 text-center">Change Password</h3>
				<form action="update_password.php" method="post">
					<div class="card mb-4">
						<div class="card-header">
							<h5> </h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label> Current Password</label>
								<input type="password" name="c_pass" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label> New Password</label>
								<input type="password" name="n_pass" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label> Confirm New Password</label>
								<input type="password" name="cn_pass" placeholder=" Confirm Password" class="form-control">
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
						<div class="card-footer text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
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
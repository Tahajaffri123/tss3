<?php
 include("dbinfo.php");
include('header.php');
?>
		<div class="col-md-8 offset-md-2">
			<h4 class="my-bg p-2 text-center">Change Password</h4>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="card bg-dark text-light">
						<form action="update.php" method="post">
						<div class="card-header text-center"><h5>Change Your Password</h5></div>
						<div class="card-body">
				            <div class="form-group">
								<label>Current Password</label>
								<input type="password" name="c_pass" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label>New Password</label>
								<input type="password" name="n_pass" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Confirm New Password</label>
								<input type="password" name="cn_pass" placeholder="Password" class="form-control">
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

							<button type="submit" class="btn btn-info">Update</button>
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
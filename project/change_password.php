 <?php
 include("db.php");
include('header.php');
?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">Update Password</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<form action="update.php" method="post">
					<div class="card mb-4">
						<div class="card-header">
							<h3>Change Your Password</h3>
						</div>
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
						<div class="card-footer">

							<button type="submit" class="btn btn-dark">Update</button>
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
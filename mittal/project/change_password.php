<?php
 include("dbinfo.php");
include('header.php');
?>
		<div class="col-md-8 offset-md-2">
			<h5 class="my-bg p-2 text-center">Change Password</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card bg-dark text-light">
						<div class="card-header">
						<div class="card-header text-center"><h4>Change Your Password</h4></div>
		
					
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
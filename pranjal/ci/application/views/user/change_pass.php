<div class="container" style="min-height: 600px;">
	<h2>Update Password	</h2>
	<div class="row">
		<div class="col-md-5 offset-md-3">
			<form action="<?php site_url("user/update_pass")?>" method="post">
			<div class="form-group">
				<label><b>Current Password</b></label>
				<input type="password" name="c_pass" class="form-control">
			</div>
			<div class="form-group">
				<label><b>New Password</b></label>
				<input type="password" name="n_pass" class="form-control">
			</div>
			<div class="form-group">
				<label><b>Conform New Password</b></label>
				<input type="password" name="c_pass" class="form-control">
			</div>
			<div class="form-group text-center">
				<input type="submit" name="cn_pass" class="btn btn-primary" value="Update Password">
			</div>
		</form>
		</div>
	</div>
</div>

<div class="container" style="min-height: 600px;">
	<h2>Update Password</h2>
	<div class="row">
		
		<div class="col-md-6 offset-md-3">
		<form action="<?php echo site_url('user/update_pass') ?>" method="post">
			<div class="form-group">
				<label>Current Password</label>
				<input type="password" name="c_pass" class="form-control" />
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg1"); ?>
				</p>
			</div>
			<div class="form-group">
				<label>New Password</label>
				<input type="password" name="n_pass" class="form-control" />
			</div>
			<div class="form-group">
				<label>Confirm New Password</label>
				<input type="password" name="cn_pass" class="form-control" />
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg2"); ?>
				</p>
			</div>
			<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary">
			</div>

		</form>
		</div>
	</div>
</div>


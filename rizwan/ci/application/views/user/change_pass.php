<div class="container" style="min-height: 600px; margin-top:100px;">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="<?php echo site_url('user/update_pass') ?>" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input class="form-control" type="text" name="c_pass">
				</div>
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg1"); ?>
				</p>
				<div class="form-group">
					<label>New PAssword</label>
					<input class="form-control" type="text" name="n_pass">
				</div>
				<div class="form-group">
					<label>Confirm New PAssword</label>
					<input class="form-control" type="text" name="cn_pass">
				</div>
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg2"); ?>
				</p>
				<div>
					<input type="submit" name="update" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
	<br />
	<br />
	<Br />
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo site_url("admin/auth"); ?>" method="post">
					
				<div class="card">
					<div class="card-header">
						<h5 class="text-center">Admin Login</h5>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username/Email</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<p class="text-center text-danger">
							<?php echo $this->session->flashdata("msg"); ?>
						</p>
					</div>
					<div class="card-footer">
							
							<input type="submit" class="btn btn-primary" value="Login">
						
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
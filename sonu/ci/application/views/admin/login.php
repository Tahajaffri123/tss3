<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bandle.js') ?>"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 p-1 " style="color: #123;">
				<form action="<?php echo site_url("admin/auth"); ?>" method="post"> 
					<div class="card">
						<div class="card-header">
							<h3>Administartor</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" name="user" class="form-control"></div>

								<div class="form-group">
									<label>Password</label>
									<input type="Password" name="password" class="form-control">
								</div>

								<p class="text-center text-danger">
									<?php echo $this->session->flashdata("msg");?>
								</p>
							</div>
							<div class="card-footer">
								<input type="submit" class="btn btn-dark" value="login">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>



<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery-3.4.1.min.js")?>"></script>	
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js")?>"></script>
</head>
<body class="bg-success">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-3">
				<form action="<?php echo site_url("admin/auth");?>" method="post">
					<div class="card mt-5">
						<div class="card-header ">
							<h3>Administrator Login</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label><b>AdminName</b></label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label><b>Password</b></label>
								<input type="password" name="pass" class="form-control">
							</div>
							<p class="text-center text-danger">
								<?php echo $this->session->flashdata("msg");?>
							</p>
							<div class="card-footer text-center">
							<input type="submit" value="Login" class="btn btn-info">
								
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
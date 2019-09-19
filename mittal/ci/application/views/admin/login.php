<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body style="background-color: #4FD5F2 " >
	<br />
	<br />

<div class="container" style="min-height: 600px ;">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="<?php echo site_url("admin/auth")?>" method="post">	
			<div class="card">
				<div class="card-header">
					<h3>Admin Login</h3>
				</div>
				<div class="card-body">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="pass" class="form-control">
		    	</div>
		    	 <p class="text-center text-danger">
		     	<?php
		     	echo $this->session->flashdata("msg");
		     	?>
		     </p>
		     </div>
		     <div class=" text-center card-footer">
		     	<input type="submit" value="submit" class="btn btn-primary">
		     </div>

	      </div>
			</form>
       </div>
	</div>
</div>
</body>
</html>

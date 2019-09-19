<!DOCTYPE html>
<html>
<head>
	<title>dash</title>
	<link rel="stylesheet" type="text/css" href="<?php echo bese_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a  class="navbar-brand" href="#">Codengiter</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("admin/dash") ?>">dash</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("admin/user") ?>">User</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("admin/login") ?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>Wellcome Admin Penel</h2>
			</div>
		</div>
	</div>
	

</body>
</html>
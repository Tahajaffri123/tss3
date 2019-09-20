<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css")?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery-3.4.1.min.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js")?>"></script>
</head>
<body>
		<nav class="navbar navbar-expand-sm bg-info navbar-dark">
			<a href="#" class="navbar-brand">Codeginetier</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navcollapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="<?php echo site_url("admin/dash")?>" class="nav-link text-light">Dash</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url("admin/user")?>" class="nav-link text-light">Users</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url("admin/logout")?>" class="nav-link text-light">Logout</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Welcom : Admin Panel</h2>
				</div>
			</div>
		</div>
</body>
</html>
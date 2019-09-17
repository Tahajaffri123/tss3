<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">Codeingiter</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/dash") ?>">Dash</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/users") ?>">Users</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/logout") ?>">Logout</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>Welcome Admin Panel</h2>
			</div>
		</div>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  	<a href="#" class="navbar-brand">Codeingiter</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapse">
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
  		<div class="col-md-6 offset-md-3">
  			<h2>Welcome Admin....</h2>
  		</div>
  	</div>
  </div>  
</body>
</html>
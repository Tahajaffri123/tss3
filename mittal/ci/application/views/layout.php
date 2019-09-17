<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a href="#" class="navbar-brand">Codeingiter</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse"><span class="navbar-toggler-icon"></span></button>	
<div class="collapse navbar-collapse" id="collapse">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="<?php echo site_url("home") ?>" class="nav-link text-light">Home</a>
		</li>
			<li class="nav-item">
			<a href="<?php echo site_url('home/about') ?>" class="nav-link text-light">About</a>
		</li>
			<li class="nav-item">
			<a href="<?php echo site_url('home/contact') ?>" class="nav-link text-light">contact</a>
		</li>
		</li>
			<li class="nav-item">
			<a href="<?php echo site_url('home/help') ?>" class="nav-link text-light">Help</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo site_url('home/login')?>" class="nav-link text-light">Login</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo site_url('home/signup')?>" class="nav-link text-light">sign-up</a>
		</li>
	</ul>
</div>

</nav>
<?php  $this->load->view($pagename); ?>

<div class="container-fluid bg-dark">
  <div class="container">
    <p class="m-0 p-2 text-light text-center bg-dark">Sample Footer</p>
  </div>
</div>
</body>
</html>
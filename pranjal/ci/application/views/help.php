<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js')?>"></script>
	<style type="text/css">
		body{
			background-color: #48F259;
		}
	</style>
</head>
<body>
	<h1 class="text-center">This Is Help Page</h1>
	<a  href="<?php echo site_url('home/index')?>">Home</a>
	<a href="<?php echo site_url('home/about')?>">About</a>
	<a href="<?php echo site_url('home/contact')?>">Contact</a>
	<a href="<?php echo site_url('home/help')?>">Help</a>
	<br />
	<br />

	<h2 class="text-center"><?php echo $name; ?></h2>
	<h2 class="text-center"><?php echo $city; ?></h2>
	<h2 class="text-center"><?php echo $age; ?></h2>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js')?>"></script>
	<style type="text/css">
		body{
			background-color: #81678C;
		}
	</style>
</head>
<body>
	<a href="<?php echo site_url('Home/index') ?>">Home</a>
	<a href="<?php echo site_url('Home/about')?>">About</a>
	<a href="<?php echo site_url('Home/contact')?>">Contact</a>
	<a href="<?php echo site_url('Home/help')?>">Help</a>
<h1>This is Help Page</h1>
<h3><?php echo $name; ?></h3>
<h3><?php echo $city; ?></h3>


</body>
</html>
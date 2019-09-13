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
<body >
	<h1 class="text-center">This is Home Page</h1>
	<a  href="<?php echo site_url('home/index')?>">Home</a>
	<a href="<?php echo site_url('home/about')?>">About</a>
	<a href="<?php echo site_url('home/contact')?>">Contact</a>
	<a href="<?php echo site_url('home/help')?>">Help</a>
	<h3 class="text-center"><?php echo $demo; ?></h3>
</body>
</html>
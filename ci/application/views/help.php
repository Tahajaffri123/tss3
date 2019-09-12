<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
	<a href="<?php echo site_url('home/index') ?>">Home</a>
<a href="<?php echo site_url('home/about') ?>">About</a>
<a href="<?php echo site_url('home/contact') ?>">Contact</a>
<a href="<?php echo site_url('home/help') ?>">Help</a>
<h1>This is Help Page</h1>

<h2><?php echo $name; ?></h2>
<h2><?php echo $city; ?></h2>
<h2><?php echo $age; ?></h2>
</body>
</html>
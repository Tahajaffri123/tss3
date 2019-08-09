<html>
<head>
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<div class="container-fluid my-bg font-weight-bold">
	<div class="container">
		<p class="m-0 p-2">Best Place for Buy and Rent Property in Indore</p>
	</div>
</div>
<nav class="sticky-top navbar bg-primary navbar-dark navbar-expand-sm">
	<a href="index.php" class="navbar-brand">Makaan.com</a>

	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="myMenu" class="collapse navbar-collapse">
	<ul class="navbar-nav ml-4">
		<li class="nav-item">
			<a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>
About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Contact</a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<?php
		if(isset($_SESSION['is_user_logged_in']))
		{ ?>
			<li class="nav-item">
				<a class="nav-link" href="post_property.php">Post Your Property</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="my_account.php">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</li>
		<?php
		}
		else
		{ ?>
		<li class="nav-item">
			<a class="nav-link" href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="signup.php">Register <i class="fa fa-user-plus"></i></a>
		</li>
		<?php
		}
		?>
	</ul>
	</div>
</nav>
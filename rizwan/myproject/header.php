<html>
<head>
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
	<a href="index.php" class="navbar-brand">MyHome.com</a>

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
			<ul class="navbar-nav ml-auto" style="margin-right: 110px;">
		<li class="dropdown nav-item">
			<a  data-toggle="dropdown" href="#" class="nav-link dropdown-toggle"><?php echo $_SESSION['name'] ?></a>
			<div class="dropdown-menu">
				
				
				<a class="dropdown-item" href="post_property.php">Post Property</a>
				<a class="dropdown-item" href="my_property.php">My Property</a>
				<a class="dropdown-item" href="my_profile.php">My Profile</a>
				<a class="dropdown-item" href="logout.php">Logout</a>
			
			
			</div>
		</li>
	</ul>
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
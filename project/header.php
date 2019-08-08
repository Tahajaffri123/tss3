<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, 
	initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<div class="container-fluid my-bg font-weight-bold">
	<div class="container">
		<p class="m-0 p-2">Best Place for Buy and Rent Property in Indore</p>
	</div>
</div>
<nav class="sticky-top navbar bg-danger navbar-dark navbar-expand-sm">
	<a href="#" class="navbar-brand">House.com</a>

	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="myMenu" class="collapse navbar-collapse">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Contact</a>
		</li>
		<?php
		if(! isset($_SESSION['is_user_logged_in']))
		{?>

		<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.php">Register</a>
			</li>

		<?php
		}
		?>
	</ul>
	<?php
	if(isset($_SESSION['is_user_logged_in']))
	{ ?>

	<ul class="navbar-nav ml-auto" style="margin-right: 80px;">
		<li class="dropdown nav-item">
			<a  data-toggle="dropdown" href="#" class="nav-link dropdown-toggle"><?php echo $_SESSION['name'] ?></a>
			<div class="dropdown-menu">
				
				
				<a class="dropdown-item" href="post_property.php">Post Property</a>
				<a class="dropdown-item" href="my_property.php">My Property</a>
			
			
				<a class="dropdown-item" href="logout.php">Logout</a>
			
			
			
			</div>
		</li>
	</ul>
	<?php
	}
	?>
	</div>
</nav>
<div class="jumbotron jumbotron-fluid slider">
	
		<div class="col-md-6 offset-md-3">
			<div class="form-group mt-4 pt-3">
				<div class="input-group">
					<input type="text" placeholder="Search Property" class="form-control">
					<div class="input-group-append">
							<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="container content">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="#" class="list-group-link"> Rent</a>
				</li>
				<li class="list-group-item">
					<a href="#" class="list-group-link"> Buy</a>
				</li>
              </ul>
		</div>
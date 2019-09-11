<?php
include("db1.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title><meta name="viewport" content="width=device-width, 
	initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<div class="container-fluid my-bg font-weight-bold">
<div class="container">
	<nav class="sticky-top navbar bg-dark navbar-dark navbar-expand-sm ">
	<a href="index.php" class="navbar-brand"><i class="fa fa-header" aria-hidden="true"></i>ouse.com</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="myMenu" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-4">
				<li class="nav-item">
					<a class="nav-link" href="dashbord.php">Dashbord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add_image.php">Add image</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
			</div>
		</div>
	</div>
</nav>
<br/>
<br/>
	<h2>Welcome Admin</h2>
</body>
</html>

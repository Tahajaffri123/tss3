<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="css/font-awesome.css"></script>
</head>
<body>
	<div class="container-fluid my-bg font-weight-bold"> 
			<div class="row">
					<div class="col-md-1 offset-1 p-0">
	                <img src="property_img/logo.png" class="img-thumbnail" height="100px" width="100px">
			       </div>
				<div class="col-md-5 offset-md-2">
					<p class="m-0 pt-4 font-weight-bold">Best Place for Buy and Rent Property in Indore</p>
				</div>
			</div> 
	</div>
<nav class= "navbar bg-danger navbar-expand-sm navbar-dark sticky-top">
	<a href="index.php" class="navbar-brand">Makaan.com</a>
	<butten data-toggle="collapse" data-target="#box" class="navbar-toggler"><span class="navbar-toggler-icon"></span></butten>
	<div class="collapse navbar-collapse" id="box">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php"><i class="fa fa-home"> Home </i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-about"> About </i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"> Contact </i></a>
			</li>
			<?php
			if(! isset($_SESSION["is_user_logged_in"]))
			{
				?>
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
        {
        ?>
        <ul class="navbar-nav ml-auto" style="margin-right: 80px;">
        	<li class="dropdown nav-item">
        		<a data-toggle="dropdown" href="#" class="nav-link dropdown-toggle"><?php echo $_SESSION['name']?></a>
        		<div class="dropdown-menu">
        			<a class="dropdown-item" href="post_property.php">Post Proprety</a>
        			<a class="dropdown-item" href="my_profile.php">My Profile</a>
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
	<div class=" jumbotron jumbotron-fluid slider">
		<div class="col-md-6 offset-md-3">
			<form action="index.php" method="get">
			<div class="form-group mt-4 pt-4">
				<div class="input-group">
					<input type="text" name= "q"  placeholder="Search Property" class="form-control">
					<div class="input-group-append">
						<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
					</div>
			    </div>
			</div>
		</form>
		</div>
	</div>
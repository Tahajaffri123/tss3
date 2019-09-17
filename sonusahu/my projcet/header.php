<?php
include("db.php");
$que1 = "SELECT * FROM slider_image";
$slider= mysqli_query($conn, $que1);

// print_r($data);

?>

<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, 
	initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script>
	  $(document).ready(function(){
	    $('.slider').bxSlider({
	    	
	     	auto : true,
	     	pause : 10000
	     });
	   });
	</script>

</head>
<body>
<div class="container-fluid my-bg font-weight-bold">
	<div class="container">
		<p class="m-0 p-2"><i class="fa fa-home"></i>Best Place for Buy and Rent Property in Indore</p>
	</div>
</div>
<nav class="sticky-top navbar bg-dark navbar-dark navbar-expand-sm ">
	<a href="index.php" class="navbar-brand"><i class="fa fa-header" aria-hidden="true"></i>ouse.com</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="myMenu" class="collapse navbar-collapse">
	<ul class="navbar-nav ml-4">
		<li class="nav-item">
			<a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-comments" aria-hidden="true"></i> About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-mobile" aria-hidden="true"></i> Contact</a>
		</li>
	
		
         <?php
		if(! isset($_SESSION['is_user_logged_in']))
		{ ?>

			<li class="nav-item">
			<a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="signup.php"><i class="fa fa-registered" aria-hidden="true"></i> Register</a>
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
				<a class="dropdown-item" href="my_profile.php">My profile</a>
		        <a class="dropdown-item" href="logout.php">Logout</a>
			
			
			
			</div>
		</li>
	</ul>
	<?php
	}
	?>
	</div>
</nav>
<!-- <div class="jumbotron jumbotron-fluid slider"> -->
<div class="col-md-7 offset-md-3"  style="position: absolute; z-index: 999">
	<form action="index.php" method="get">
		<div class="form-group mt-4 pt-3">
			<div class="input-group">
				<input type="text" name="q" placeholder="Search Property" class="form-control">
				<div class="input-group-append">
					<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
		
	</form>
</div>


	<div class="my-slider slider">
		<?php
		while($data1=mysqli_fetch_assoc($slider))
		{
		?>
		<img src="admin/slider_img/<?php echo $data1['name'] ?>" height="400" width="100%">
		<?php
		}
		?>
	 <!--  <div>
	  	<img src="image/house1.jpg" height="400" width="100%"/>
	  </div> -->
	 <!--  <div>
	  	<img src="image/house2.jpg" height="400" width="100%" />
	  </div> -->
	
	</div>


<div class="container content">
	<!-- <div class="bg-info"> -->
	<div class="row">
		<div class="col-md-3 offset-md-0">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="index.php?type=rent" class="list-group-link"><i class="fa fa-money" aria-hidden="true"></i> Rent</a>
				</li>
				<li class="list-group-item">
					<a href="index.php?type=sell" class="list-group-link"><i class="fa fa-credit-card" aria-hidden="true"></i> Buy</a>
				</li>
			</ul>
		</div>
	
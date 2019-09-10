<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<link type="text/javascript" src="css/font-awesome.css"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	    $('.slider').bxSlider({
	    	
	    	auto : true,
	    	pause : 2000
	    });
	  });
	</script>

</head>
<body>
	<div class="container-fluid my-bg font-weight-bold"> 
			<div class="row">
					
				<div class="col-md-6 offset-md-4">
					<p class="m-0 p-2 font-weight-bold">Best Place for Buy and Rent Property in Indore</p>
				</div>
			</div>
	</div>
<nav class= "navbar bg-danger navbar-expand-sm navbar-dark sticky-top">
	<a href="index.php" class="navbar-brand">Makaan.com</a>
	<button data-toggle="collapse" data-target="#box" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
	<ul class="navbar nav">
							<li class="nav-item">
								<a href="dashbord.php" class="nav-link">Dashbord</a>
							</li>
							<li class="nav-item">
								<a href="add-image.php" class="nav-link">Add-Image</a>
							</li>
                            <li class="nav-item">
								<a href="logout.php" class="nav-link">Logout</a>
							</li>

						</ul>
	</div>
</nav>
	<!-- <div class=" jumbotron jumbotron-fluid slider"> -->
		<div class="col-md-6 offset-md-3" style="position: absolute; z-index: 999999">
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
    <div class="my-slider slider">
    	<div>
    		<img src="image/2.jpg" height="250" width="100%" />
    	</div>
    	<div>
    		<img src="image/slider2.jpg" height="250" width="100%" />
    	</div>
    	<div>
    		<img src="image/3.jpg" height="250" width="100%" />
    	</div>
    	<div>
    		<img src="image/4.jpg" height="250" width="100%" />
    	</div>
    </div>
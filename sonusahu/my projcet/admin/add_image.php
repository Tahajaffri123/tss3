<?php
include("db1.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, 
	initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

</head>
<body>
	<div class="container-fluid my-bg font-weight-bold">
<div class="container-fuit">
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

			<div style="background-color: #123" class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			  <div class="row">
			  	<div class="col-md-8 offset-md-2">
			  		<form action="image_save.php" method="post" enctype="multipart/form-data">
			  		<div class="card">
			  	       <div class="card-header">
			  		    <h3 class="text-center">Add Slider Image</h3>
			  	      </div>
			  	      <div class="card-body">
			  	      	<div class="form-group">
			  	      		<label><h5>Title</h5></label>
			  	      		<input type="text" placeholder="Enter Title" class="form-control" name="title" />
			  	      	</div>
			  	      	<div class="form-group">		
						<label>Slider Image</label>
						<input name="image" type="file" class="form-control">
						<p class="text-danger">
							<?php
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
							?>
						</p>
					</div>	
			  	      </div>
			  	      <div class="card-footer text-center">
			  	      	<input type="submit" value="Save" class="btn btn-success">
			  	      </div>
			       </div>
			   </form> 
			  	</div>
			  </div>
			</div>
		</div>
	</div>

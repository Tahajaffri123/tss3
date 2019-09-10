<?php
include("db1.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
header("location:index.php");
}
include("header.php");

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-4" style="display:;">
			<ul>
				<li>
					<a  href="dashbord.php">Dashbord</a>
				</li>
				<li>
					<a href="add_image.php">Add image</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<div style="margin-top: 150px" class="container">
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

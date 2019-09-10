<?php
include("header.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>

</head>
<body style="background-color: #5DADE2 !important">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			  <div class="row">
			  	<div class="col-md-10 offset-md-1">
			  		<form action="image-save.php" method="post">
			  		<div class="card">
			  	       <div class="card-header">
			  		    <h3 class="text-center">Add Image For Slider</h3>
			  	      </div>
			  	      <div class="card-body">
			  	      	<div class="form-group">
			  	      		<label><h5>Title</h5></label>
			  	      		<input type="text" placeholder="Enter Title" class="form-control" name="title" />
			  	      	</div>
			  	      	<div class="form-group">
			  	      		<label><h5>Select File</h5></label>
			  	      		<input type="file" placeholder="Choose File" class="form-control" name="name"/>
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
<br />
<?php
include("footer.php");
?>
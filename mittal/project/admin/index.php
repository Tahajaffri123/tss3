<?php
	include("db.php");

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
<body class="bg-danger">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			  <div class="row">
			  	<div class="col-md-10 offset-md-1">
			  		
			  		<form action="admin-auth.php" method="post">
			  		<div class="card" style="margin-top: 100px;">
			  	       <div class="card-header">
			  		    <h3 class="text-center">Admin Login</h3>
			  	      </div>
			  	      <div class="card-body">
			  	      	<div class="form-group">
			  	      		<label><h5>Username</h5></label>
			  	      		<input type="text" placeholder="Enter Your Username" class="form-control" name="username" />
			  	      	</div>
			  	      	<div class="form-group">
			  	      		<label><h5>Password</h5></label>
			  	      		<input type="password" placeholder="Enter Your Password" class="form-control" name="password"/>
			  	      	</div>
			  	      </div>
			  	      <div class="card-footer text-center">
			  	      	<input type="submit" value="Login" class="btn btn-success">
			  	      </div>
			       </div>
			   </form>
			    <p class="text-center text-light">
			   <?php
			   // print_r($_SESSION);
			   if(isset($_SESSION['msg']))
			   {
			   	echo $_SESSION['msg'];
			   	unset($_SESSION['msg']);
			   }
			   ?>
			</p> 
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</body>
</html>
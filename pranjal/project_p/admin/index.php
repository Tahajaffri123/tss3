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
 <body class="bg-success">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8 offset-md-2">
 				<div class="row">
 					<div class="col-md-10 offset-md-1">
 						<form action="admin_auth.php" method="post">
 							<div class="card bg-dark text-light" style="margin-top: 150px;">
 								<div class="card-header text-center">
 									<h3>Admin Login</h3>
 								</div>
 								<div class="card-body">
 									<div class="form-group">
 										<label><h5>UserName</h5></label>
 										<input type="text" name="username" class="form-control" placeholder="Enter Your UserName" />
 									</div>
 									<div class="form-group">
 										<label><h5>Password</h5></label>
 										<input type="password" name="password" class="form-control" 
 										placeholder="Enter Your Password">
 									</div>
 								</div>
 								<div class="card-footer text-center ">
 									<input type="submit" value="Login" class="btn btn-primary">
 								</div>
 							</div>
 						</form>
 						<p class="text-center text-light">
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
 			</div>
 		</div>
 	</div>
 </body>
 </html>
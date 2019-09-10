<?php
include("db1.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/style1.css">
 -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<div style="margin-top: 200px"  class="container-fluid back-new">
<div class="container content login-content">
	<div class="row back-new" >
		<div class="col-md-8 offset-md-2 new-content">
			<h3 class="user-back p-2 text-center">Admin Login</h3>
				<form action="admin_auth.php" method="post">
					<div class="card">
						<div class="card-header">
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Admin Username</label>
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="card-footer text-center ">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
						<p class="text-danger text-center">
								<?php
								if(isset($_SESSION['msg']))
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
							</p>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>


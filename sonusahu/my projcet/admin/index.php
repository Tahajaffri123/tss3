<?php
	include("db1.php");

?>
<html>
<head>
	<title></title>
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
<div style="background-color:#123"  class="container-fluid back-new">
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


<?php
include("db1.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<h2>Welcome Admin</h2>
</body>
</html>

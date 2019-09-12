<?php
	include("db.php");
	if(! isset($_SESSION['is_admin_logged_in']))
	{
		header("location:index.php");
	}
	include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-4">
				<h2>Admin........</h2>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	include("footer.php");
?>
<?php
	include("header.php");
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
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<form action="image_save.php" method="post" enctype="multipart/form-data">
							<div class="card bg-dark text-light">
								<div class="card-header text-center">
									<h3>Add Image</h3>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label><h4>Title</h4></label>
										<input type="text" name="title" class="form-control" />
									</div>
									<div class="form-group">
										<label><h3>Select File</h3></label>
										<input type="file" placeholder="Choose File" name="image" class="form-control" />
									
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
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<br />
<br />
<?php
	include("footer.php");
?>
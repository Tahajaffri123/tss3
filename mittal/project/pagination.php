<?php
include("dbinfo.php");
$record_per_page = 100;
$all_city_query = "SELECT * FROM cities";
$all_city_query_result = mysqli_query($con,$all_city_query);

$all_city_count_query = "SELECT * FROM cities";
$all_city_count_result = mysql_query($con,$all_city_count_query);

$all_rows = mysqli_num_rows($all_city_count_result);
$total_pages = ceil($all_rows/$record_per_page);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<h2 class="text-center">Pagination Exampal</h2>
<div class="container">
<ul class="pagination justify-content-center">
	<li class="page-item">
		<a href="pagination.php" class="page-link">1</a>
	</li>
    <li class="page-item">
		<a href="pagination.php" class="page-link">1</a>
	</li>
    <li class="page-item">
		<a href="pagination.php" class="page-link">1</a>
	</li>
    <li class="page-item">
		<a href="pagination.php" class="page-link">1</a>
	</li>
</ul>
<table class="table table-hover table-dark table-border
ed">
<tr>
	<td>S.No.</td>
	<td>City_Name</td>
	<td>City_State</td>
</tr>	

</div>
</body>
</html>
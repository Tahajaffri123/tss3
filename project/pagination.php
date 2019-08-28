<?php
$con=mysqli_connect("localhost", "admin", "admin", "tss12_30");
$record_per_page = 250;

if(isset($_GET['pageno']))
{
	$a = $_GET['pageno'];
	$b = $a-1;
	$c = $b*$record_per_page;

	$n=$c+1;
	$all_city_query = "SELECT * FROM cities LIMIT $c,$record_per_page";
}
else
{
	$n=1;
	$a=1;
	$all_city_query = "SELECT * FROM cities LIMIT $record_per_page";
	
}
 
$all_city_result = mysqli_query($con, $all_city_query);
$all_city_count_query = "SELECT * FROM cities";
$all_city_count_result = mysqli_query($con, $all_city_count_query);
$all_rows = mysqli_num_rows($all_city_count_result);

$total_pages = ceil($all_rows/$record_per_page);



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<h2 class="text-center">Pagination Example</h2>
<div class="container">
	<ul class="pagination justify-content-center">
		<li class="page-item <?php if($a==1) echo "disabled" ?>">
			<a class="page-link" href="pagination.php?pageno=<?php echo $a-1; ?>">Pre</a>
		</li>
		<?php
		for($i=1; $i<=$total_pages; $i++)
		{


		?>
		<li class="page-item <?php if($i==$a) echo "active"; ?>">
			<a href="pagination.php?pageno=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
		</li>
		<?php 
		}
		?>
		<li class="page-item <?php if($a==$total_pages) echo "disabled" ?>">
			<a class="page-link" href="pagination.php?pageno=<?php echo $a+1; ?>">Next</a>
		</li>
		
	</ul>
	<table class="table table-hover table-bordered table-dark">
		<tr>
			<th>S.No.</th>
			<th>City Name</th>
			<th>State Name</th>
		</tr>
		<?php
		
		while($all_city_data=mysqli_fetch_assoc($all_city_result))
		{ 
		?>
			<tr>
				<td><?php echo $n ?></td>
				<td><?php echo $all_city_data['city_name'] ?></td>
				<td><?php echo $all_city_data['city_state'] ?></td>
			</tr>
		<?php
		$n++;
		}
		?>
	</table>
</div>
</body>
</html>




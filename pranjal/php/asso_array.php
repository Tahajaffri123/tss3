<?php
	$x=array("first"=>10, "second"=>20, "
		third"=>30, "fourth"=>40, "fifth"=>50, "sixth"=>60);
	// $x = array(10,20,30,40,50,60);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>No. Of List</h2>
	<ul>
	<?Php
		foreach($x as $v)
		{
	?>
	
		<li><?php echo $v;?></li>
	
	<?php
	}
	?>
	</ul>
</body>
</html>
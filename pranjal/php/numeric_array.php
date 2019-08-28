<?php
	$x = array(10,20,30,40,50,60);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> List Of Numbers</h2>
	<ul>
		<?php
		 for($i=1; $i<=5; $i++)
		 {
		?>
		<li><?php echo $x[$i];?></li>
		<?php
		 }
		?>
	</ul>
</body>
</html>
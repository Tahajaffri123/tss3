		<?php
		// for($j=0; $j<=9; $j++)
		// {
		// 	$a = ($j*10)+1;
		// 	echo "<td>".$a."</td>";
		// }
		?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellpadding="10" cellspacing="0">
	<?php
	$n=1;
	for($i=1; $i<=10; $i++)
	{
		echo "<tr>";
		for($j=0; $j<=9; $j++)
		{
			$a = ($j*10)+$n;
			echo "<td>".$a."</td>";
			
		}
		$n++;
		echo "</tr>";
	}

	?>
</table>
</body>
</html>
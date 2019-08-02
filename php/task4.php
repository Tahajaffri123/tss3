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
	<tr>
	<?php
	
	$a=0;
	for($i=0; $i<=99; $i++)
	{
		
		if($i%10==0){
			echo "</tr><tr>";
			$a++;
			$n=0;
		}
		echo "<td>".(($n*10)+$a)."</td>";
		$n++;

	}
	?>
	</tr>
</table>
</body>
</html>
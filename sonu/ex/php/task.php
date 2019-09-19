<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="15" align="center">
	<?php
	$n=1;
	for($i=1; $i<=10; $i++)
	{
			echo "<tr>";
			for($j=0; $j<=9; $j++)
			{
				$a = $n+($j*10);
				echo "<td>".$a."</td>";

			}
			$n++;
		
			echo "</tr>";
	}
	?>
</table>
</body>
</html>
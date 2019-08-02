<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" width="50" height="300" border="1" cellspacing="0" cellpadding="10">
	<?php
	for($i=1; $i<=10; $i++)
	{
		echo "<tr>";
		echo "<td>";
		echo $i*5;
		echo "</td>";
		echo "</tr>";
	}

	?>	
</table>
</body>
</html>
<?php
$stu1 = array("name"=>"rohit", "age"=>25, "city"=>"indore");
$stu2 = array("name"=>"gaurav", "age"=>27, "city"=>"ujjain");
$stu3 = array("name"=>"jaya", "age"=>22, "city"=>"Bhopal");

$data = array($stu1, $stu2, $stu3);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>City</th>
	</tr>
	<?php
	foreach($data as $x)
	{
		echo "<tr>";
		// echo "<td>".$x["name"]."</td>";
		// echo "<td>".$x["age"]."</td>";
		// echo "<td>".$x["city"]."</td>";
		foreach($x as $y)
		{
			echo "<td>".$y."</td>";
		}
		echo "</tr>";
	}



	?>


</table>
</body>
</html>
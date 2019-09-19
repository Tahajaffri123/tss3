<?php
$con = mysqli_connect("localhost", "root", "", "riz");

$que = "SELECT * FROM products WHERE name LIKE '%z%' ";

$result = mysqli_query($con,$que);
$n =1;
while($data = mysqli_fetch_assoc($result))

{

	echo "<tr>"."<td>".$n."</td>"."<td>".$data['name']."</td>"."<td>".$data['price']."</td>"."<td>".$data['details']."</td>"."</tr>";
	$n++;
}

?> 
<?php
$con = mysqli_connect("localhost", "root", "password", "mittal");

$que = "SELECT * FROM product WHERE name LIKE '%a%' ";

$result = mysqli_query($con,$que);
$n =1;
while($data = mysqli_fetch_assoc($result))

{

	echo "<tr>"."<td>".$n."</td>"."<td>".$data['name']."</td>"."<td>".$data['price']."</td>"."<td>".$data['detail']."</td>"."</tr>";
	$n++;
}

?> 
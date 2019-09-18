<?php
$con = mysqli_connect("localhost", "root", "", "myproject");

if(isset($_POST['name']))
{
	$a = $_POST['name'];
	$b = $_POST['price'];
	$c = $_POST['detail'];

	$query = "INSERT INTO prodect (name, price, detail) VALUES ('$a', '$b', '$c')";
	mysqli_query($conn, $query);
	
}


$query = "SELECT * FROM prodect ORDER BY id DESC";
$res = mysqli_query($con, $query);
$n=1;
while($data=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>".$n."</td>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['price']."</td>";
	echo "<td>".$data['detail']."</td>";
	echo "</tr>";
	$n++;
}

?>
<?php
$con = mysqli_connect("localhost", "root", "password", "tss3");

if(isset($_POST['name']))
{
	$a = $_POST['name'];
	$b = $_POST['age'];
	$c = $_POST['marks'];

	$query = "INSERT INTO student (name, age, marks) VALUES ('$a', '$b', '$c')";
	mysqli_query($con, $query);
	
}


$query = "SELECT * FROM student ORDER BY id DESC";
$res = mysqli_query($con, $query);
$n=1;
while($data=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>".$n."</td>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['age']."</td>";
	echo "<td>".$data['marks']."</td>";
	echo "</tr>";
	$n++;
}

?>
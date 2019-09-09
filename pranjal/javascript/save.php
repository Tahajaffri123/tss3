<?php
// print_r($_POST);
	$con = mysqli_connect("localhost", "root", "", "pranjal");
	// print_r($_POST);die;
	$name = $_POST['name'];
	$age = $_POST['age'];

	$n=0;
	foreach($name as $x)
	{
		$y = $age[$n];
		$que = "INSERT INTO student (name, age) VALUES ('$x', '$y')";
      
		mysqli_query($con, $que);
		$n++;

	}
	header("location:day4_c.php");
?>
<?php

$con = mysqli_connect("localhost","root","password","mittal");
// print_r($_POST);

$name = $_POST['name'];
$age = $_POST['age'];

$n = 0;
foreach ($name as $x ) {
    $y = $age[$n];
    $que = 	"INSERT INTO student(name,age) VALUES ('$x','$y')";
 mysqli_query($con,$que);
   $n++;

 } 
 header("location:day4_3.php");
 ?>
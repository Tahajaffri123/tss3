<?php
$con = mysqli_connect("localhost","root","password","mittal");
if(isset($_POST['name']))
{
$a = $_POST['name'];
$b = $_POST['age'];
$c = $_POST['marks'];

$que = "INSERT INTO student (name, age, marks) VALUES ('$a', '$b', '$c')";

mysqli_query($con,$que);
}

?>
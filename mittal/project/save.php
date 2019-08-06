<?php
//connection stable
//$variable=mysqli_connect(hostname,username,password,dbname)
//create veriable
//make query
//fire query
$con = mysqli_connect("localhost","root","password","mittal");
//connection stablre
$a=$_post['f-name'];
$b=$_post['username'];
$c=$_post['pass'];
$d=$_post['contact'];
$e=$_post['add'];
$f=$_post['city'];
$g=$_post['gender'];
//getting past data

$query = "INSERT INTO rgester(full_name,username,password,city,address,contact,gender) VALUES ('$a','$b','$c','$f','$e','$d','$g')";
//make query

mysqli_query($con,$query);
//fire query

header("location:login.php");
//redirect to the login.php page
?>
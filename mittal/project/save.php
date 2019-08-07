<?php
 // print_r($_post);
//connection stable
//$variable=mysqli_connect(hostname,username,password,dbname)
//create veriable
//make query
//fire query
include("dbinfo.php");
//connection stablre
$a=$_POST['f_name'];
$b=$_POST['username'];
$c=$_POST['pass'];
$d=$_POST['contact'];
$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['gender'];
//getting past data

$query = "INSERT INTO register(full_name,username,password,contact,address,city,gender) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
//make query

mysqli_query($con,$query);
//fire query

header("location:login.php");
//redirect to the login.php page
?>
<?php
// print_r($_POST);
// Connection Stable
// $valiable = mysqli_connect(hostname, username, password, dbname)
// $con = mysqli_connect("localhost", "root", "", "tss3");
include("db.php");
// create database connection


$a = $_POST['f_name'];
$b = $_POST['username'];
	$c = sha1($_POST['pass']);
$d = $_POST['contact'];
$e = $_POST['gender'];
$f = $_POST['add'];
$g = $_POST['city'];
// getting POST data

$query="INSERT INTO user (full_name, username, password, city, address, contact, gender) VALUES ('$a', '$b', '$c', '$g', '$f', '$d', '$e')";
// make query


				mysqli_query($con, $query);
// fire the query


header("location:login.php");
// redirect to the login.php page

?>

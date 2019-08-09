<?php
// print_r($_POST);
// die;
// $conn = mysqli_connect("localhost", "root", "", "myproject");
include("db.php");

$a = $_POST['fullname'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['contact'];
$e = $_POST['gender'];
$f = $_POST['address'];
$g = $_POST['city'];


echo $query="INSERT INTO user (fullname, username,password,contact, gender,address,city) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";


mysqli_query($conn, $query);
// die;


header("location:login.php");


?>



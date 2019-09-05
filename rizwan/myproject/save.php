<?php


$con = mysqli_connect("localhost", "root", "", "riz");


$a = $_POST['fullname'];
$b = $_POST['email'];
$c = sha1($_POST['pass']);
$d = $_POST['contact'];
$e = $_POST['gender'];
$f = $_POST['address'];
$g = $_POST['city'];

$query="INSERT INTO user (fullname, email, pass, contact, gender, address, city) VALUES ('$a', '$b', '$c','$d', '$e', '$f', '$g')";


mysqli_query($con,$query);

header("location:login.php");

?>

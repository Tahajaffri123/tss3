<?php
include("dbinfo.php");
// print_r($_SESSION);
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// print_r($_POST);
// die;/

$a=$_POST['title'];
$b=$_POST['type'];
$c=$_POST['area'];
$e=$_POST['price'];
$f=$_POST['location'];
$h=$_POST['perpose'];
$i=$_POST['address'];
$j=$_POST['detail'];

$id=$_SESSION['id'];

   $que = "INSERT INTO property(user_id, title, type, price, area, location, perpose, address, detail) VALUES( '$id', '$a', '$b', '$c', '$e', '$f', '$h', '$i', '$j')";
 mysqli_query($con,$que);
 
header("location:my_account.php");
 ?>



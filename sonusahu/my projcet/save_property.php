<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
print_r($_POST);
$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['area'];
$d = $_POST['price'];
$f = $_POST['location'];
$g = $_POST['perpose'];
$h = $_POST['address'];
$i = $_POST['detail'];


$id = $_SESSION['id'];

$que = "INSERT INTO property (user_id, title, type, price, area, location, perpose, address, detail) VALUES ('$id', '$a', '$b', '$d', '$c', '$f', '$g', '$h', '$i')";
mysqli_query($con, $que);
header("location:my_account.php");


?>
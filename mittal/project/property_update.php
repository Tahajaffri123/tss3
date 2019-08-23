<?php
include("dbinfo.php");
$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['area'];
$d = $_POST['price'];
$e = $_POST['location'];
$f = $_POST['perpose'];
$g = $_POST['address'];
$h = $_POST['detail']; 

$x = $_SESSION['id']; 

$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$e', perpose='$f', address='$g', detail='$h'";
mysqli_query($con,$que);
header("location:my_property.php");
?>
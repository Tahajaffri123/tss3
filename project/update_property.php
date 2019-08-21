<?php
include("db.php");

$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['area'];
$d = $_POST['price'];
$f = $_POST['location'];
$g = $_POST['perpose'];
$h = $_POST['address'];
$i = $_POST['detail'];

$x = $_POST['id'];
$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$f', perpose='$g', address='$h', detail='$i' WHERE id=$x";
mysqli_query($con, $que);
header("location:my_property.php");

?>
<?php
include("db.php");


$a = $_POST['fullname'];
$b = $_POST['contact'];
$c = $_POST['gender'];
$d = $_POST['address'];
$e = $_POST['city'];


$x = $_SESSION['id'];

$que = "UPDATE user SET fullname='$a', contact='$b', gender='$c', address='$d', city='$e' WHERE id=$x";
mysqli_query($con, $que);
header("location:my_profile.php");


?>
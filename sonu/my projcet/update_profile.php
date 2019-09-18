<?php
include("db.php");
print_r($_POST);
$a = $_POST['fullname'];
$b = $_POST['contact'];
$c = $_POST['gender'];
$d = $_POST['address'];
$e = $_POST['city'];


$x = $_SESSION['id'];

$que = "UPDATE user SET fullname='$a', contact='$b', gender='$c', address='$d', city='$e' WHERE id=$x";
mysqli_query($conn, $que);
header("location:my_profile.php");


?>
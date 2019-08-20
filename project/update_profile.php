<?php
include("db.php");


$a = $_POST['f_name'];
$b = $_POST['contact'];
$c = $_POST['gender'];
$d = $_POST['add'];
$e = $_POST['city'];


$x = $_SESSION['id'];

$que = "UPDATE user SET full_name='$a', contact='$b', gender='$c', address='$d', city='$e' WHERE id=$x";
mysqli_query($con, $que);
header("location:my_profile.php");


?>
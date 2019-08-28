<?php
include("db.php");

$a=$_GET['id'];

$que="DELETE FROM property WHERE id=$a";
mysqli_query($con, $que);
header("location:my_property.php");
?>
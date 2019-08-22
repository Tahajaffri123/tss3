<?php
include("dbinfo.php");
$a = $_GET['id'];
// print_r($_GET);
// die;
 $que = "DELETE  FROM property WHERE id=$a";
mysqli_query($con,$que);
header("location:my_property.php");
?>  
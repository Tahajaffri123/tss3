<?php
include("db.php");

$a = $_GET['id']; // 'id' is a key
// die;
$que = "DELETE FROM property WHERE id= $a";
mysqli_query($conn, $que);
header("location:my_property.php");

?>
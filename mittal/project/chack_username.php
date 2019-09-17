<?php
include("dbinfo.php");
$que = "SELECT * FROM user WHERE $username='$u'";
$result = mysqli_query($con,$que);
echo mysqli_num_rows($result);
?>
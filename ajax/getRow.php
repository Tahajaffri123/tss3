<?php
$con = mysqli_connect("localhost", "root", "password", "tss3");
$query = "SELECT * FROM student";
$res = mysqli_query($con, $query);

echo mysqli_num_rows($res);

?>
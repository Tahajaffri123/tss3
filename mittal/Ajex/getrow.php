<?php
$con = mysqli_connect("localhost", "root", "password", "mittal");
$query = "SELECT * FROM student";
$result = mysqli_query($con,$query);
echo mysqli_num_rows($result);
?>
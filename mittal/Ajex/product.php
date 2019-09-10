<?php
$con = mysqli_connect("localhost", "root", "password", "mittal");

$que = "SELECT * FROM product";]

$result = mysqli_query($con,$que);

echo mysqli_num_rows($result);
?> 
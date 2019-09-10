<?php
include("db.php");
// print_r($_POST);
$u = $_POST['u'];
$que = "SELECT * FROM user WHERE username='$u'";
$result = mysqli_query($con, $que);

echo mysqli_num_rows($result);

?>
<?php
include("dbinfo.php");
// print_r($_REQUEST );
// die;
$a = $_POST['f_name'];
// $b=$_POST['username'];
$b = $_POST['contact'];
$c = $_POST['add'];
$d = $_POST['city'];
$e = $_POST['gender'];

$x=$_SESSION['id'];
 
 $que = "UPDATE register SET full_name='$a', contact='$b', address='$c', city='$d', gender='$e' WHERE id=$x  ";

 mysqli_query($con,$que);

 header("location:my_profile.php");
 ?>

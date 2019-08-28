<?php
include("db.php");
// print_r($_POST);
$a = $_POST['c_pass'];
$b = $_POST['n_pass'];
$c = $_POST['cn_pass'];

$x = $_SESSION['id'];

$que = "SELECT * FROM user WHERE id=$x";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($_POST);
 if($data['password']==$a)
 {
 	if($b==$c)
 	{
 		$b = ($b);
 		$que = "UPDATE user SET password='$b' WHERE id=$x";
 		mysqli_query($con, $que);
 		header("location:my_profile.php");
 	}
 	else
 	{
 		$_SESSION['msg']="New Passwod and Conform New Password is Not Matched !";
 		header("location:change_password.php");
 	}
 }
 else
 {
 	$_SESSION['msg'] = "Current Password is Not Correct !";
 	header("location:change_password.php");
 }
?>
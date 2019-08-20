<?php
include("db.php");
// print_r($_POST);
$a = sha1($_POST['c_pass']);
$b = $_POST['n_pass'];
$c = $_POST['cn_pass'];

$x = $_SESSION['id'];

$que = "SELECT * FROM user WHERE id=$x";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);

if($data['password']==$a)
{
	if($b==$c)
	{
		$b = sha1($b);
		$que = "UPDATE user SET password='$b' WHERE id = $x";
		mysqli_query($con, $que);
		header("location:my_profile.php");
	}
	else
	{
		$_SESSION['msg']="New Password and Confirm New Password is Not Mached !";
		header("location:change_password.php");		
	}
}
else
{
	$_SESSION['msg']="Current Password is Not Correct !";
	header("location:change_password.php");
}



?>
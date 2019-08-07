<?php
include("dbinfo.php");
$u = $_POST['username'];
$p = $_POST['Pass'];

$que = "SELECT * FROM register WHERE username='$u'";

$result = mysqli_query($con,$que);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fecth_assoc($result);
	if($data['password']==$p)
	{
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']= "this password is incrrect";
		header("location:login.php");
	}
}
	else
	{
		$_SESSION['msg']="this username and password is incorrect";
		header("location:login.php");
	}


?>
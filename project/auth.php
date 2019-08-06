<?php
include("db.php");
$u = $_POST['username'];
$p = $_POST['pass'];

$que = "SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$p)
	{
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg'] = "This Password is Incorrect !";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg'] = "This Username And Password is Incorrect !";
	header("location:login.php");
}

?>
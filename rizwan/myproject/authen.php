<?php
include("db.php");
$u = $_POST['email'];
$p = $_POST['pass'];

$que = "SELECT * FROM user WHERE email='$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);

	if($data['pass']==$p)
	{
		$_SESSION['name']=$data['fullname'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;


		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg'] = "Password is Incorrect !";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg'] = "Username doesn't exists !";
	header("location:login.php");
}

?>
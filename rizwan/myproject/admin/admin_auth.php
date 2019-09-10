<?php
include("db1.php");
$u = $_POST['username'];
$p = $_POST['password'];

$que = "SELECT * FROM admin WHERE username='$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);

	if($data['password']==($p))
	{
		$_SESSION['name']=$data['admin'];
		$_SESSION['is_admin_logged_in']=true;


		header("location:dashbord.php");
	}
	else
	{
		$_SESSION['msg'] = "Password is Incorrect !";
		header("location:index.php");
	}
}
else
{
	$_SESSION['msg'] = "Username doesn't exists !";
	header("location:index.php");
}

?>
<?php
include("dbinfo.php");
// print_r($_POST);die;
$u = $_POST['username'];
$p = $_POST['pass'];

echo $que = "SELECT * FROM register WHERE username='$u'";
// die;

$result = mysqli_query($con,$que);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==sha1($p))
	{
		$_SESSION['name']= $data['full_name'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['is_user_logged_in'] = true;
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
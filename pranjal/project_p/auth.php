<?php
// print_r($_POST);
include("db.php");
$u = $_POST['username'];
$p = $_POST['pass'];

$que="SELECT * FROM user WHERE username='$u'";


$result=mysqli_query($con, $que);
if(mysqli_num_rows($result)==1)
{
	// print_r($result); // the result variable right now is not READBALED ...
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// echo $data['password'];
	if($data['password']==$p)
	{
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;


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
	$_SESSION['msg'] = "This Username and Password is Incorrect !";	
	header("location:login.php");
}
?>
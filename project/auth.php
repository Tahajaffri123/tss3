<?php
include("db.php");
$u = $_POST['username'];
$p = $_POST['pass'];

$que = "SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con, $que);
// $result is a object witch can store data base info
// but this is a non-reable values

if(mysqli_num_rows($result)==1)
{
	// convart $result to readble assoc array
	$data=mysqli_fetch_assoc($result);

	if($data['password']==$p)
	{
		$_SESSION['name']= $data['full_name'];
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
	$_SESSION['msg'] = "This Username And Password is Incorrect !";
	header("location:login.php");
}

?>
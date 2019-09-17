<?php
include("dbinfo.php");
// include("header.php");
// print_r($_POST);die;
$u = $_POST['username'];
$p = $_POST['pass'];

 $que = "SELECT * FROM register WHERE username='$u'";


$result = mysqli_query($con,$que);
// echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==sha1($p))
	{
		$_SESSION['name']= $data['full_name'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['is_user_logged_in'] = true;
 		echo 3 ;
	}
	else
	{
		echo 2;
	}
}
	else
	{
		echo 1;
 	}


?>
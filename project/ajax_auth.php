<?php
include("db.php");
$u = $_POST['username'];
$p = $_POST['pass'];

$que = "SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con, $que);
if(mysqli_num_rows($result)==1)
{
	
	$data=mysqli_fetch_assoc($result);


 if($data['password']==sha1($p))
	{
		$_SESSION['name']= $data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;
		echo 3;
		
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
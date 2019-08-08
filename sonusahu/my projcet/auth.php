<?php
include("db.php");
$a = $_POST['username'];
$b = $_POST['password'];
// print_r($_POST);die;

$que = "SELECT * FROM user WHERE username='$a'";
// die;
$result=mysqli_query ($conn,$que);
if (mysqli_num_rows ($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$b)
	{
		$_SESSION['name']==$data['fullname'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;
       header("location:my_account.php");

	}
	else
	{
      $_SESSION['msg'] = "this password is a incorrect";
      header("location:login.php");
	}

}
else
{
	$_SESSION['msg']="this username and password is incorrect";
	header("location:login.php");
}

?>
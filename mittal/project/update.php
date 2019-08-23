<?php
include("dbinfo.php");
// print_r($_POST);
$a = sha1($_POST['c_pass']);
$b = $_POST['n_pass'];
$c = $_POST['cn_pass'];

$x = $_SESSION['id'];

echo $que = "SELECT * FROM register WHERE id='$x' " ;
$result = mysqli_query($con,$que);
$data = mysqli_fetch_assoc($result);
// print_r($data);
// die;

if($data['password']==$a)
{
	// echo "hello";die;
	if($b==$c)
	{
		// echo =  "hello";
      $b = sha1($b);
      $que = "UPDATE register SET password = '$b' WHERE id = $x ";
      mysqli_query($con,$que);
      header("location:my_profile.php ");
	}
	else
	{
		$_SESSION['msg']="New Password And Confirm Password Not Mached !";
		header("location:change_password.php ");
	}

}
else
{
	$_SESSION['msg']="Your Current Password Is Incrrect !";
	header("location:change_password.php");
}


?>

<?php
	include("db.php");
	// print_r($_POST);
	$u = $_POST['username'];
	$p = $_POST['password'];

		$que = "SELECT * FROM admin WHERE username = '$u'";
	$result = mysqli_query($con, $que);
	echo mysqli_num_rows($result);

	if(mysqli_num_rows($result)==1)
	{
		$data = mysqli_fetch_assoc($result);
		// print_r($data);
		if($data['password']==$p)
		{
			$_SESSION['is_admin_logged_in'] = true;
			header("location:dashbord.php");
		}
		else
		{
			$_SESSION['msg'] = "This Password is Incorrect !";
			header("location:index.php");
		}
	}
	else
	{
		$_SESSION['msg'] = "This UserName and Password are Incorrect !";
		header("location:index.php");
	}
?>
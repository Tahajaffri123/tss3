<?php
include("db1.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
// // print_r($_POST);
// // die;
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().rand(10000, 100000).".".$ext;


if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="png" || $ext=="PNG")
{

	if($size <= (1024*1024*1))
	{
		$a = $_POST['title'];
		echo $que = "INSERT INTO `silder_image` (title, name) VALUES ('$a','$new_name')";
		move_uploaded_file($tmp_name, "slider_img/".$new_name);
		mysqli_query($con, $que);
		header("location:dashbord.php");
		
	}
	else
	{
		$_SESSION['msg']="This File size is Too Large";
		header("location:add_image.php");
	}

}
else
{
	$_SESSION['msg']="This File Type Not Allowed";
	header("location:add_image.php");
}








 ?>
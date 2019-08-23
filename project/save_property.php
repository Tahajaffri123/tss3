<?php
include("db.php");
// print_r($_POST);
//        die;
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// print_r($_POST);
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().rand(10000, 100000).".".$ext;


if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="png")
{

	if($size <= (1024*1024*1))
	{
		$a = $_POST['title'];
		$b = $_POST['type'];
		$c = $_POST['area'];
		$d = $_POST['price'];
		$f = $_POST['location'];
		$g = $_POST['perpose'];
		$h = $_POST['address'];
		$i = $_POST['detail'];


		$id = $_SESSION['id'];

		$que = "INSERT INTO property (user_id, title, type, price, area, location, perpose, address, detail, image) VALUES ('$id', '$a', '$b', '$d', '$c', '$f', '$g', '$h', '$i', '$new_name')";
		move_uploaded_file($tmp_name, "property_img/".$new_name);
		mysqli_query($con, $que);
		header("location:my_account.php");
		
	}
	else
	{
		$_SESSION['msg']="This File size is Too Large";
		header("location:post_property.php");
	}

}
else
{
	$_SESSION['msg']="This File Type Not Allowed";
	header("location:post_property.php");
}









?>
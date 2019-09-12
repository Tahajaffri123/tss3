<?php
include("db.php");
// print_r($_post);
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];

$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().rand(10000,100000).".".$ext;
	
	if($ext=="jpg" || $ext=="jpeg" || $ext=="png" ||$ext=="gif")
	{
		if($size <= (1024*1024*1))
		{
			$a = $_POST['title'];
			$que = "INSERT INTO slider_img(title, name) VALUES('$a', '$new_name')";

			move_uploaded_file($tmp_name, "image/".$new_name);
			mysqli_query($con, $que);
			header("location:dashbord.php");
		}
		else
		{
			$_SESSION['msg'] = "This File Size is Too Large";
			header("location:add_image.php");
		}
	} 
	else
	{
		$_SESSION['msg'] = "This File Type Not Allowed";
		header("location:add_image.php");
	}
?>
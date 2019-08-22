<?php
include("db.php");

$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['area'];
$d = $_POST['price'];
$f = $_POST['location'];
$g = $_POST['perpose'];
$h = $_POST['address'];
$i = $_POST['detail'];

$x = $_POST['id'];

if($_FILES['image']['name']=="")
{

	$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$f', perpose='$g', address='$h', detail='$i' WHERE id=$x";
}
else
{
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
			move_uploaded_file($tmp_name, "property_img/".$new_name);
			$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$f', perpose='$g', address='$h', detail='$i', image='$new_name' WHERE id=$x";
		}
		else
		{
			$_SESSION['msg']="This File size is Too Large";
			header("location:edit_property.php");
		}	
	}
	else
	{
		$_SESSION['msg']="This File Type Not Allowed";
		header("location:edit_property.php");
	}
}





mysqli_query($con, $que);
header("location:my_property.php");

?>
<?php
include("dbinfo.php");

$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['area'];
$d = $_POST['price'];
$e = $_POST['location'];
$f = $_POST['perpose'];
$g = $_POST['address'];
$h = $_POST['detail']; 

$x = $_POST['id']; 

if($_FILES['image']['name']="")
{

$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$e', perpose='$f', address='$g', detail='$h'";
}
else
{
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$size = $_FILES['image']['size'];
   

    $arr = explode(".",$name);
    $ext = end($arr);

    $new_name = time().rand(100000,10000).".".$ext;

    if($ext="jpg" || $ext="jpeg" || $ext="gif" || $ext="png" )
    {
    	if($size = 1024*1024*1)
    	{

    	move_uploaded_file($tmp_name,"property_img/".$name);
    	$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$e', perpose='$f', address='$g', detail='$h' image = '$new_name' ";
    	}
    	else
    	{
    		$_SESSION['msg']="This Size Is Too Large !";
    		header("location:edit_proprety.php");
    	}
    }
    	else
    	{
    		$_SESSION['msg']="This File Type Not Allowed !";
    		header("location:edit_proprety.php");
    	}

    
}

mysqli_query($con,$que);
header("location:my_property.php");
?>
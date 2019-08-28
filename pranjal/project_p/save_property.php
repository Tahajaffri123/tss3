<?php
	// print_r($_POST);
	 include("db.php");
	 // print_r($_SESSION);
	 // die;
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

	 $new_name = time().rand(10000, 100000).".".$text;

	 if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="png")
	 {
	 	if($size <= (1024*1024*1024*1))
	 		{
    $a = $_POST['title'];
	$b = $_POST['area'];
	$c = $_POST['price'];
	$d = $_POST['location'];
	$e = $_POST['perpose'];
	$f = $_POST['address'];
	$g = $_POST['detail'];
 	$h = $_POST['type'];

 	$id = $_SESSION['id'];

  $que = "INSERT INTO property (user_id, title, price, area, location, perpose, address, detail, type, image) VALUES ($id, '$a', '$c', '$b', '$d' , '$e', '$f', '$g', '$h', '$new_name')";
 		move_uploaded_file($tmp_name, "property_img/".$new_name);
 		mysqli_query($con, $que);
 		header("location:my_property.php");
 // die;
	 
	}
	else
	{
		$_SESSION['msg']="This File Size is Too Large";
	
	header("location:post_property.php");
		}
	}		
	else
	{
		$_SESSION['msg']="This File Type Not Allowed";
		header("location:post_property.php");
	}

?>
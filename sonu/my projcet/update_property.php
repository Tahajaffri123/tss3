<?php
include("db.php");

// print_r($_POST);
// die;
        $a = $_POST['title'];
		$b = $_POST['type'];
		$c = $_POST['area'];
		$d = $_POST['price'];
		$e = $_POST['location'];
		$f = $_POST['perpose'];
		$g = $_POST['address'];
		$h = $_POST['detail'];

		$x = $_POST['id'];
		$que = "UPDATE property SET title='$a', type='$b', area='$c', price='$d', location='$e', perpose='$f', address='$g', detail='$h' WHERE id=$x";
		mysqli_query($conn,$que);
		header("location:my_property.php");




?>

<?php

// print_r($_FILES);


$a = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];


$x = time().rand(100000, 10000000);
$arr = explode(".", $a);
$ext = end($arr);

$new_name = $x.".".$ext;



move_uploaded_file($b, "images/".$new_name);


?>
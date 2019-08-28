<?php
 include("db.php");
 // print_r($_GET);

 $a = $_GET['id']; //id is a key

 $que = "DELETE FROM property WHERE id =$a";
 mysqli_query($con, $que);
 header("location:my_property.php");

?>
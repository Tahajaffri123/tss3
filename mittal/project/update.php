<?php
include("dbinfo.php");
// print_r($_POST);
$a=sha1($_POST['c_pass']);
$b=$_post['n_pass'];
$c=$_post['cn_pass'];

$X=$_SESSION['id'];

$que = "SELECT * FROM register WHERE id='$X' " ;
$result = mysqli_query($con,$que);
$data = mysqli_fecth_assoc($result);
?>
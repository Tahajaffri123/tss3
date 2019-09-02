<?php
// print_r($_POST);
// die;
//connection_stable


include("db.php");

//create database connection

 $a = $_POST['f_name'];
 $b = $_POST['user_name'];
 $c = $_POST['pass'];
 $d = $_POST['add'];
 $e = $_POST['gender'];
 $f = $_POST['contact'];
 $g = $_POST['city'];

 // getting POST data

   echo $query="INSERT INTO user(full_name, username, password, address, gender, contact, city) VALUES ('$a', '$b','$c', '$d', '$e', '$f', '$g')";
   // die;
 //make query

 	mysqli_query($con, $query);
 //fire the query

 //redirect to the login.php page
 	header("location:login.php")	

  ?>
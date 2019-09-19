<?php
include("connection.php");
$query = "INSERT INTO STUDENT VALUES('1','ram','BBE')";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Data inserted into Database";
}

?>
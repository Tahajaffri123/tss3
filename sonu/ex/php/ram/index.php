<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="GET">
		Roll no<input type="text" name="rollno" value=""></br></br>
		Name<input type="text" name="studentname" value=""></br></br>
		class<input type="text" name="class" value=""></br></br>
		<input type="submit" name="submit" value="submit">
		



</form>

<?php
if($_GET['submit'])
{
$rn = $_GET['rollno'];
$sn = $_GET['studentname'];
$cl = $_GET['class'];

if($rn!="" && $sn="" && $cl!="")

{

  $query = "INSERT INTO STUDENT VALUES ('$rn','$sn','$cl')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "data insert into Database";
}

}
else{

	echo "All fields are required";
}
}






?>
</body>
</html>
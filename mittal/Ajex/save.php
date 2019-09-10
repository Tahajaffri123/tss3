<?php
$con = mysqli_connect("localhost", "root", "password","mittal");
if(isset ($_POST['name']))
{
$a = $_POST['name'];
$b = $_POST['age'];
$c = $_POST['marks'];

 $que = "INSERT INTO student (name, age, marks) VALUES('$a','$b','$c') ";
 mysqli_query($con,$que);
 
}

$query = "SELECT * FROM student";
$res = mysqli_query($con,$query);
$n=1;
while($data=mysqli_fetch_assoc($res))
{
  echo"<tr>";
  echo"<td>".$n."</td>";
  echo"<td>".$data['name']."</td>";
  echo"<td>".$data['age']."</td>";
  echo"<td>".$data['marks']."</td>";
  echo"</tr>";
  $n++;
}

?>
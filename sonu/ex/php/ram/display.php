<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn,$query);
$total = mysqli_num_row($data);


if($total !=0)
{
	?>

	<table>
		
		<tr>
			<th>Roll No</th>
			<th>Name</th>
			<th>Class</th>
		</tr>

		<?php

       while($result = mysqli_fach_assoc($data))
       {
       	echo "<tr>
       	          <td>".$result['rollno']."</td>
       	          <td>".$result['name']."</td>
       	          <td>".$result['class']."</td>
       	      </tr>";
       }
  }

  else{

  	echo "No record found";
  }
?>
	</table>

<html>
<head>
	<title></title>
</head>
<body> 
	<table border="2" align="center" cellpadding="10" cellspacing="0">
		<!-- <tr>
			<th>so.no</th>
			<td>name</td>
			<td>contact</td>
		</tr>
 -->
           <?php 
        for($a=1; $a<=100; $a++)
        {

        	echo "<tr>";
            echo "<td>x</td>";  
            echo "<td>y</td>";
            echo "<td>z</td>"; 
            echo "<td>=</td>";
            echo "<td>";
            echo $a*5;
            echo "</tr>";
}


 ?>
 </table>       

</body>
</html>
<?php
$data = array();
$data[]="red";
$data[]="green";
$data[]="blue";
$data[]=500;
$data[]=75.35;
$data[]=true;
?>
<tr>
	<td>name</td>
	<td>age</td>
	<td>city</td>
</tr>
<tr>
<td>rohit</td>
<td>25</td>
<td>indor</td>
</tr>
<?php
echo $data[3]+$data[4];

?>
<?php
$data1=array("name"=>"rohit","age"=>"25","city"=>"indor");
$data2=array("name"=>"mohit","age"=>"26","city"=>"bhopal");
$data3=array("name"=>"ram","age"=>"27","city"=>"vidisha");
$data4=array("name"=>"sonu","age"=>"28","city"=>"raisen");
$data5=array("name"=>"sohan","age"=>"30","city"=>"gairatganj");
$data=array($data1,$data2,$data3,$data4,$data5);
?>
<table border="1" width="500" align="center">
<tr>
    <td>name</td>
    <td>age</td>
    <td>city</td>
</tr>

<?php foreach ($data as $p) {
    $sn=1;
    ?>
<tr>
    <td><?php echo $data["name"];?></td>
    <td><?php echo $data2["age"];?></td>
    <td><?php echo $data3["city"];?></td>

</tr>
<?php
$sn=$sn+1;

 } ?>


</table>


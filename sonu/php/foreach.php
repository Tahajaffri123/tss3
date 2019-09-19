<?php
$data = array("red", "green", "blue", "yellow", "pink", "black");

foreach($data as $x)
{
	echo $x;
	echo "<br />";
}
echo "<Hr />";

$arr = array();
$arr["name"]="rohit";
$arr["age"]=25;
$arr["city"]="indore";
$arr["contact"]=258741;

foreach($arr as $a=>$y)
{
	echo $a." : ".$y;
	echo "<Br />";
}

?>
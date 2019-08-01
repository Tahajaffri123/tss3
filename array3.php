<?php
// hello
$arr1=array("red", "green", "blue");
$arr2=array("a"=>"rohit", "b"=>"gaurav", "c"=>$arr1);


$arr3=array("indore", "ujjain", "bhopal", $arr2);



// echo $arr3[3]["c"][2].$arr3[3]["c"][1];
print_r($arr3);

?>
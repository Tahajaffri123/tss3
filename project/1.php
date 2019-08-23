<?php
setcookie("name", "rohit", time()+3600);
$x = 3600*24*365;
setcookie("data", "this is my data", time()+$x);


?>
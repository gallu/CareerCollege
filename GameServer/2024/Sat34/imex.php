<?php  // imex.php

$str = "1,2,3";
$arr = explode(",", $str); // split
print_r($arr);
echo "<br>";

$join = implode("-", $arr); // join
echo "{$join} <br>";

$str = "2d6";
$arr = explode("d", $str); // split
print_r($arr);


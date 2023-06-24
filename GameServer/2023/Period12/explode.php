<?php  // explode.php

$str = "1,2,3";
$awk = explode(",", $str); // split
print_r($awk);

$str2 = implode("<>", $awk); // join
echo $str2;
echo "\n";

$str3 = "2d10";
$awk2 = explode("d", $str3);
print_r($awk2);
var_dump($awk2);

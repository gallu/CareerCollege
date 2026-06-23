<?php  // impexp.php

echo "<pre>";

// 他言語だと split とか
$arr = explode(":", "1:2:3:4");
print_r($arr);

// 他言語だと join とか
$s = implode(",", $arr);
echo "{$s} \n";

//
$arr = explode("d", "2d6");
print_r($arr);
var_dump($arr);

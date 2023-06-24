<?php  // hash_array.php

$arr = [
    "HP" => 100,
    "MP" => 150,
    "exp" => 0,
    "Level" => 1,
];
print_r($arr);

$arr["exp"] = $arr["exp"] + 210;
print_r($arr);

$arr["exp"] += 100;
print_r($arr);

$count = count($arr);
echo "count is {$count} <br>\n";

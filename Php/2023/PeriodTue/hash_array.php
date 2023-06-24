<?php  // hash_array.php

$arr = [
    'key1' => 1,
    'key2' => 22,
    'key3' => 333,
];
var_dump($arr);
echo "<br>\n";

foreach($arr as $key => $value) {
    echo "{$key}: {$value} <br> \n";
}

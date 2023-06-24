<?php  // hash_array.php

$hash_arr = [
    "key 1" => "value 1",
    "key 2" => 222,
    "key 3" => 3.14,
];
var_dump($hash_arr);
echo "<br>";

foreach($hash_arr as $key => $value) {
    echo "{$key}: {$value} <br>";
}

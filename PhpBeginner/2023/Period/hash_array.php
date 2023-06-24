<?php  // hash_array.php

$harr = [
    "name" => "自分の名前",
    "age" => 52,
    "address" => "高田馬場",
];
print_r($harr);
var_dump($harr);

var_dump( $harr["name"] );

$count = count($harr);
var_dump($count);

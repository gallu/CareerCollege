<?php  // serialize.php

$data = [
    "str" => "string data",
    "int" => 123,
    "float" => 3.1415,
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, 3],
];
var_dump($data);

$s_string = serialize($data);
var_dump($s_string);

$data2 = unserialize($s_string);
var_dump($data2);

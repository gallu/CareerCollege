<?php  // json.php

$data = [
    "string" => "str",
    "int" => 123,
    "float" => 3.141592,
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, 3],
];
var_dump($data);

$json_string = json_encode($data);
var_dump($json_string);

$data2 = json_decode($json_string, true);
var_dump($data2);

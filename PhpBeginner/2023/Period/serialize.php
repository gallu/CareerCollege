<?php  // serialize.php

$data = [
    "string" => "str",
    "int" => 123,
    "float" => 3.141592,
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, 3],
];
var_dump($data);

$serialize_string = serialize($data);
var_dump($serialize_string);

$data2 = unserialize($serialize_string);
var_dump($data2);

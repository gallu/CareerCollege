<?php  // serialize1.php
$data = [
    "int" => 123,
    "float" => 3.14,
    "bool" => true,
    "string" => "hello",
    "array" => [1, 2, 3],
    "hash" => [
        "1st" => 123,
        "2nd" => 456,
    ],
    "null" => null,
];
var_dump($data);

$ss = serialize($data);
var_dump($ss);

$data2 = unserialize($ss);
var_dump($data2);

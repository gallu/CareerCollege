<?php  // json1.php
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

$js = json_encode($data);
var_dump($js);

$data2 = json_decode($js, true);
var_dump($data2);

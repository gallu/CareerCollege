<?php  // serialize.php

$obj = new stdClass();
$obj->hoge = 123;
$data = [
    "id" => 1,
    "name" =>  "hoge",
    "rate" => 3.1415,
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, "3rd"],
    "class" => $obj,
];
$serialize_string = serialize($data);
var_dump($serialize_string);

$arr = unserialize($serialize_string);
var_dump($arr);
<?php  // serialize.php

$obj = new stdClass();
$obj->hoge = 999;
$data = [
    "id" => 10,
    "name" => "hoge",
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, 3],
    "class" => $obj,
];
$serialize_string = serialize($data);
var_dump($serialize_string);

$data = unserialize($serialize_string);
var_dump($data);

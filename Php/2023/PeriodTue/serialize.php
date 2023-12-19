<?php // serialize.php

$obj = new stdClass();
$obj->hoge = 999;
$data = [
    "id" => 1,
    "name" => "おいちゃん",
    "rate" => 3.14,
    "bool" => true,
    "arr" => [1, 2, 3],
    "null" => null,
    "class" => $obj,
];
var_dump($data);

$serialize_string = serialize($data);
var_dump($serialize_string);

$data2 = unserialize($serialize_string);
var_dump($data2);

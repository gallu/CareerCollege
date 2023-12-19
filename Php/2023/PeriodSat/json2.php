<?php  // json2.php

$obj = new stdClass();
$obj->hoge = 123;
$data = [
    "id" => 1,
    "name" =>  "hoge",
    "rate" => 3.1415,
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, "3rd"],
    "class" => $obj, // これはダメ
];
$json_string = json_encode($data);
var_dump($json_string);

$arr = json_decode($json_string, true);
var_dump($arr);

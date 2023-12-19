<?php  // json2.php

$obj = new stdClass();
$obj->hoge = 999;
$data = [
    "id" => 1,
    "name" => "おいちゃん",
    "rate" => 3.14,
    "bool" => true,
    "arr" => [1, 2, 3],
    "null" => null,
    "class" => $obj, // インスタンスはダメ
];
var_dump($data);

$json_string = json_encode($data);
var_dump($json_string);

$data2 = json_decode($json_string, true);
var_dump($data2);

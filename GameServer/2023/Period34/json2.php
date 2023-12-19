<?php  // json2.php

$obj = new stdClass();
$obj->hoge = 999;
$data = [
    "id" => 10,
    "name" => "hoge",
    "bool" => true,
    "null" => null,
    "arr" => [1, 2, 3],
    "class" => $obj, // ちゃんと保持できていない
];
$json = json_encode($data);
var_dump($json);

$data = json_decode($json, true);
var_dump($data);

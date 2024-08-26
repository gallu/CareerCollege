<?php  // json_serialize.php

$arr = new ArrayObject([
    "res" => 200,
    "message" => "ok",
]);

$j = json_encode($arr);
var_dump($j);

$s = serialize($arr);
var_dump($s);

// デコード
$d = json_decode($j, true);
var_dump($d);

//
$d = unserialize($s);
var_dump($d);

<?php // json.php

$j = json_encode(123);
var_dump($j);

$j = json_encode("abc");
var_dump($j);

$j = json_encode(true);
var_dump($j);

$j = json_encode(null);
var_dump($j);

$arr = [
    "res" => 200,
    "message" => "ok",
    "list" => [
        "aaa",
        "bbb",
        "あああ",
    ],
];
$j = json_encode($arr);
var_dump($j);

// デコード
$d = json_decode($j, true);
var_dump($d);
















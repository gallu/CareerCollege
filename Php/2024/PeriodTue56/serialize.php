<?php  // serialize.php

$arr = [
    "res" => 200,
    "message" => "ok",
    "list" => [
        "aaa",
        "bbb",
        "あああ",
    ],
];
$s = serialize($arr);
var_dump($s);

$d = unserialize($s);
var_dump($d);

<?php   // arr3.php

$arr = [0, 1, 2];
$harr = [
    "key 1" => 123,
];

// 存在しないkeyへのアクセス
$v = $arr[9999]; // Warning: Undefined array key
var_dump($v);
echo "<br>";
// null合体演算子
$v = $arr[9999] ?? "default value";
var_dump($v);
echo "<br>";
//
$v = $arr[0] ?? "default value";
var_dump($v);
echo "<br>";

//
$v = $harr["no key"]; // Warning: Undefined array key
var_dump($v);
echo "<br>";

$v = $harr["no key"] ?? "";
var_dump($v);
echo "<br>";

$v = $harr["key 1"] ?? "";
var_dump($v);
echo "<br>";










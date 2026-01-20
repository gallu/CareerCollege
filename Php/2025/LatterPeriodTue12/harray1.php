<?php  // harray1.php

echo "<pre>";

// hash配列、連想配列
$item = [
    "name" => "ウミガメのスープ",
    "price" => 1300,
    "publisher" => "株式会社エクスナレッジ",
];
print_r($item);

// 古い書き方
$item = array(
    "name" => "腕を送る男",
    "price" => 1300,
    "publisher" => "株式会社エクスナレッジ",
);
print_r($item);


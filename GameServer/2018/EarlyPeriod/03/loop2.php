<?php
// loop2.php

// 配列の用意
$array = ['a', 'b', 'c', 'd', 'e'];
// foreach
foreach($array as $key => $val) {
    echo "{$key} -> {$val}<br>\n";
}

// hash配列の用意
$array = [
    'a' => 'apple'  ,
    'b' => 'banana' ,
];
// foreach
foreach($array as $key => $val) {
    echo "{$key} -> {$val}<br>\n";
}

// 奇妙な配列
$array = [
    'aaa',
    'a' => 'apple'  ,
    'b' => 'banana' ,
     3  => '3rd',
     2  => '2nd',
];
foreach($array as $key => $val) {
    echo "{$key} -> {$val}<br>\n";
}



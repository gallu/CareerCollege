<?php  // php8_1.php

// 文字列をキーとして持つ配列のアンパック
$arr_1 = [
    'key1' => 111,
    'key2' => 222,
];
$arr = [...$arr_1, 'key3' => 3];
var_dump($arr);
echo "<br> \n";

// 読み取り専用プロパティ
class Hoge {
    public function __construct(
        public int $num,
    ){}
}
$obj = new Hoge(123);
var_dump($obj);
$obj->num = 987;
var_dump($obj);
echo "<br> \n";

class Hoge2 {
    public function __construct(
        public readonly int $num,
    ){}
}
$obj = new Hoge2(456);
var_dump($obj);
// $obj->num = 777; // Uncaught Error: Cannot modify readonly property
// var_dump($obj);
echo "<br> \n";


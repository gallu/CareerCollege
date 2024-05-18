<?php  // func10.php
declare(strict_types=1);

function hoge(int $num, string $str, bool $flg) {
    var_dump($num, $str, $flg);
}

// 普通にcall
hoge(123, "str", true);
echo "<br>";

// 名前付き引数
hoge(str:"hello", flg:false, num:456);
echo "<br>";

// 配列を展開
$param = [369, 'sss', true];
// $param = [true, 369, 'sss'];
hoge(...$param);
echo "<br>";

// hash配列を展開
$param = [
    "str" => "world.",
    "flg" => false,
    "num" => 258,
];
hoge(...$param);
echo "<br>";


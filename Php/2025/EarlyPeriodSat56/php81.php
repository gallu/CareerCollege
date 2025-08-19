<?php  // php81.php
declare(strict_types=1);

$num = 0xff;
var_dump($num);
echo "<br>";
// 8進数の整数リテラルのプレフィックス指定
$num = 0o777;
var_dump($num);
echo "<br>";

// 配列のアンパック(PHP7.4～
$arr_1 = [100, 200, 300];
$arr_2 = [1, 2, ...$arr_1, 3, 4];
print_r($arr_2);
echo "<br>";
// 文字列をキーとして持つ配列のアンパック
$arr_1 = ['a'=>100, 'b'=>200];
$arr_2 = [1, 2, ...$arr_1, 3, 4];
print_r($arr_2);
echo "<br>";

//
function f1(int $num, string $str, float $f) {
    var_dump($num, $str, $f);
    echo "<br>";
}
// 引数を展開した後の引数(以前のバージョン
$params = [123, 'str', 3.14];
f1(...$params);
// 引数を展開した後の名前付き引数
$params = [
    'str' => 'str2',
    'f' => 1.4142,
    'num' => 987,
];
f1(...$params);

// 第一級callableを生成する記法
$s = 'abcdefg';
$len = strlen($s);
echo "len is {$len} <br>";
//
$fn = 'strlen';
$len = $fn($s);
echo "len is {$len} <br>";
//
$fn = strlen(...); // 第一級callableを生成する記法
$len = $fn($s);
echo "len is {$len} <br>";

// 読み取り専用プロパティ 
class Hoge {
    public function __construct(
        public readonly int $num,
    ) {}
}
$obj = new Hoge(123);
var_dump($obj->num);
// $obj->num = 654; // Fatal error: Uncaught Error: Cannot modify readonly property

// Never 型
function f2(): Never {
    echo __FUNCTION__ , "<br>";
    exit;
}
f2();

<?php  // php81.php

// 8進数の整数リテラルのプレフィックス指定
$i = 10;
var_dump($i);
$hex = 0xff;
var_dump($hex);
$b = 0b1111;
var_dump($b);
$oct = 077; // もともとある8進数
var_dump($oct);
// 今回増えたの
$oct = 0o123;
var_dump($oct);

// 文字列をキーとして持つ配列のアンパック
// これはもともとできた
$arr_a = [1, 2];
$arr_b = [3, 4];
$arr = [...$arr_a, ...$arr_b, 5, 6];
var_dump($arr);
// 新しくこれもできるようになった
$harr_a = [
    "hoge" => 1,
];
$harr_b = [
    "foo" => 2,
];
$harr = [...$harr_a, ...$harr_b, "bar" => 123];
var_dump($harr);

// 引数を展開した後の名前付き引数
function hoge(int $num, string $name, float $rate, bool $flg): void {
    $flg_i = (int)$flg;
    echo "{$num}, {$name}, {$rate}, {$flg_i} <br>\n";
}
//
$params = [
    123,
    "na",
    1.23,
    true,
];
// もともとできてた
hoge(...$params);
// 今回追加
$params = [
    123,
    "na",
];
hoge(...$params, flg: false, rate: 3.14);

// 第一級callableを生成する記法
$fn = 'strlen'; // 可変関数
$r = $fn('abcdefg');
var_dump($r, $fn);
//
$fn = strlen(...);
$r = $fn('abc');
var_dump($r, $fn);

// 読み取り専用プロパティ
class Hoge {
    readonly public int $num;
    public function __construct(int $v) {
        $this->num = $v;
    }
}
$obj = new Hoge(12);
var_dump($obj);
// $obj->num = 987; // Cannot modify readonly property Hoge::$num in



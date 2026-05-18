<?php  // php83.php

// クラス定数に対する型宣言 
class HogeConst {
    public const int NUM = 123;
}
var_dump(HogeConst::NUM);

// クラス定数への動的なアクセス構文
$s = 'NUM';
var_dump(HogeConst::{$s});

// 加算子/減算子 に対する変更
$s = 'a';
$s ++;
var_dump($s);


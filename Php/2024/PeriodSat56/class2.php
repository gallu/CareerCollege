<?php  // class2.php
declare(strict_types=1);

// クラス定義
class Hoge {
    // 変数(プロパティ)が定義できる
    public int $num;
    public string $str;
}

//
$obj = new Hoge();
$obj->num = 123;
$obj->str = "string val";
var_dump($obj);

var_dump($obj->num, $obj->str);

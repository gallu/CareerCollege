<?php  // class4.php
declare(strict_types=1);

// クラス定義
class Hoge {
    // 定数が定義できる
    public const STR = "str val";
}

$v = Hoge::STR ;
var_dump($v);

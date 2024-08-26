<?php // class2.php
declare(strict_types=1);

class Hoge {
    // 変数(プロパティ)
    public int $num;
    public string $str;
}

//
$obj = new Hoge();
$obj->num = 123;
$obj->str = "hello";
var_dump($obj);

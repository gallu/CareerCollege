<?php  // class3.php
declare(strict_types=1);

class Hoge {
    // 変数(プロパティ)
    public int $num;
}

//
$obj = new Hoge();
$obj->num = 123;
var_dump($obj->num);

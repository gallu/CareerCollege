<?php  // class2.php

class Hoge {
    // 変数(プロパティ)
    public int $num;
    public string $name;
}
//
$obj = new Hoge();
var_dump($obj);

$obj->num = 123;
$obj->name = "おいちゃん";
var_dump($obj);

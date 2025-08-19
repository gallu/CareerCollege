<?php  // class2.php

class Hoge {
    // 変数(プロパティ)
    public int $num;
    public string $name;
}

//
$obj = new Hoge();
$obj->num = 123;
$obj->name = "hoge name";

var_dump($obj);


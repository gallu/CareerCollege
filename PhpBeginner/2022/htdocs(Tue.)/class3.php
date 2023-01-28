<?php  // class3.php

class myClass {
    public $クラス内変数;
    public $プロパティ;
}

$obj = new myClass();
var_dump($obj);

$obj->クラス内変数 = 999;
var_dump($obj);

$obj->プロパティ = "Hello";
var_dump($obj);

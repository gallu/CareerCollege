<?php  // static_class2.php

class Hoge {
    // 静的プロパティ
    public static $val;
}

//
var_dump(Hoge::$val);
Hoge::$val = 123;
var_dump(Hoge::$val);

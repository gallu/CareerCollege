<?php  // static1.php

class StaticHoge {
    // 静的メソッド(static method)
    public static function func() {
        echo __METHOD__ , "<br>\n";
    }
}

// 静的メソッド(static method)
StaticHoge::func();

$obj = new StaticHoge();
var_dump($obj);
$obj->func();


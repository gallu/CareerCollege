<?php  // static1.php

class Hoge {
    public static int $num;

    public static function func() {
        echo __METHOD__ , "<br>";
    }
}

Hoge::func();
Hoge::$num = 123;
var_dump(Hoge::$num);


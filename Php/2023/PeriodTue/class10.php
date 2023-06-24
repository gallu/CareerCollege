<?php  // class10.php

class Hoge {
    public static function t() {
        var_dump(__METHOD__);
    }

    public static int $num = 0;
}

//
Hoge::t();

Hoge::$num = 999;
var_dump(Hoge::$num);

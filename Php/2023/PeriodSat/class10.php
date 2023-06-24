<?php  // class10.php

class Hoge {
    public static function ttt() {
        var_dump(__METHOD__);
    }

    public static int $num = 0;
}

Hoge::ttt();

Hoge::$num = 999;
var_dump(Hoge::$num);

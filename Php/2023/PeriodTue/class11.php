<?php  // class11.php

class Hoge {
    public static function setNum(int $i) {
        self::$num = $i;
    }
    public static function getNum(): int {
        return self::$num;
    }

    private static int $num = 0;
}

Hoge::setNum(123);
var_dump( Hoge::getNum() );

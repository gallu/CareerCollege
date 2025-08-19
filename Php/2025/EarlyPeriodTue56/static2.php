<?php  // static2.php

class Hoge {
    private static int $num;

    public static function setNum(int $i): void {
        self::$num = $i;
    }
    public static function getNum(): int {
        return self::$num;
    }
}

Hoge::setNum(543);
var_dump(Hoge::getNum());

<?php  // static3.php

class Hoge {
    private static int $num;

    public static function setNum(int $num): void {
        // Hoge::$num = $num;
        self::$num = $num;
    }
    public static function getNum(): int {
        // return Hoge::$num;
        return self::$num;
    }
}

Hoge::setNum(123);
var_dump(Hoge::getNum());

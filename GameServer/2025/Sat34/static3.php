<?php  // static3.php
declare(strict_types=1); 

class Hoge {
    private static int $num;

    public static function setNum(int $v): void {
        // Hoge::$num = $v;
        self::$num = $v;
    }
    public static function getNum(): int {
        // return Hoge::$num;
        return self::$num;
    }
}
//
Hoge::setNum(321);
var_dump(Hoge::getNum());



<?php  // static3.php
declare(strict_types=1);

class Hoge {
    private static int $num;
    public static function setNum(int $num) {
        // Hoge::$num = $num;
       self::$num = $num;
    }
    public static function getNum(): int {
        // return Hoge::$num;
        return self::$num;
    }
}
//
Hoge::setNum(456);
var_dump( Hoge::getNum() );

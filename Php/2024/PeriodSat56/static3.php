<?php  // static3.php

class StaticHoge {
    //
    public static int $num;

    public static function getNum(): int {
        // return StaticHoge::$num;
        // return self::$num;
        return static::$num;
    }
}

StaticHoge::$num = 999;
var_dump( StaticHoge::getNum() );


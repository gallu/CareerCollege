<?php  // static2.php

class StaticHoge {
    // 静的プロパティ
    private static int $num;

    public static function setNum(int $i) {
        StaticHoge::$num = $i;
    }

    public static function getNum(): int {
        return StaticHoge::$num;
    }
}

StaticHoge::setNum(123);
var_dump( StaticHoge::getNum() );

<?php  // class9.php

class Hoge {
    //
    public static function setNum($v) {
        //Hoge::$num = $v;
        //self::$num = $v;
        static::$num = $v;
    }
    public static function getNum() {
        return static::$num;
    }
    
    //
    private static $num;
}

//
Hoge::setNum(123);
var_dump(Hoge::getNum());

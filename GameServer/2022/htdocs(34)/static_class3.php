<?php  // static_class3.php

class Hoge {
    public static function setVal($v) {
        //Hoge::$val = $v;
        //self::$val = $v;
        static::$val = $v;
    }
    public static function getVal() {
        return static::$val;
    }
    //
    private static $val;
}

//
Hoge::setVal(987);
var_dump( Hoge::getVal() );

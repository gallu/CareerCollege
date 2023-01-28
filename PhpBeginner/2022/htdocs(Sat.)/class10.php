<?php  // class10.php

class Hoge {
    //
    public static function setVal($v) {
        //Hoge::$val = $v;
        //self::$val = $v; // selfは割とやめておいた方がよい
        static::$val = $v;
    }
    public static function getVal() {
        return static::$val;
    }
    
    // 静的プロパティ
    private static $val;
}

//
Hoge::setVal(123);
var_dump(Hoge::getVal());

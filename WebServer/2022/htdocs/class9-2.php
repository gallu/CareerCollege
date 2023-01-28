<?php  // class9-2.php

class Hoge {
    public static function t1() {
        echo "Hoge::t1() <br>";
    }
    public static function test() {
        //Hoge::t1();
        //self::t1();
        static::t1();
    }
}
//
class Foo extends Hoge {
    public static function t1() {
        echo "Foo::t1() <br>";
    }
}
//
Hoge::test();
//
Foo::test();
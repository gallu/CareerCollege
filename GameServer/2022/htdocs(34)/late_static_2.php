<?php  // late_static_2.php

class Hoge {
    public static function t1() {
        echo __METHOD__ , "<br>";
    }
    public static function test() {
        //self::t1();
        static::t1();
    }
}
class Foo extends Hoge {
    public static function t1() {
        echo __METHOD__ , "<br>";
    }
}

//
Hoge::test();
//
Foo::test();

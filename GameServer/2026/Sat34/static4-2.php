<?php  // static4-2.php

class Hoge {
    protected static function func() {
        echo __METHOD__ , "<br>";
    }
    public static function t() {
        // self::func();
        static::func();
    }
}
class Foo extends Hoge {
    protected static function func() {
        echo __METHOD__ , "<br>";
    }
}
//
Hoge::t();

Foo::t();

<?php  // static4-2.php
declare(strict_types=1);

class Hoge {
    protected static function func() {
        echo __METHOD__ , "<br>";
    }
    public static function test() {
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
Hoge::test();
//
Foo::test();

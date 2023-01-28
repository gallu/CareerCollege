<?php  // lsb_3.php
// staticなクラスで実装(困らないケース)
class Hoge {
    protected static function test() {
        echo "hoge#test\n";
    }
    protected static function test_2() {
        echo "hoge#test2\n";
    }
    public static function t() {
        static::test(); // staticに書き換え
        static::test_2(); // staticに書き換え
    }
}
//
class Foo extends Hoge {
    protected static function test_2() {
        echo "foo#test2\n";
    }
}
//
Hoge::t();
//
Foo::t();


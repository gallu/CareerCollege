<?php  // lsb_2.php
// staticなクラスで実装(困るケース)
class Hoge {
    protected static function test() {
        echo "hoge#test\n";
    }
    protected static function test_2() {
        echo "hoge#test2\n";
    }
    public static function t() {
        self::test();
        self::test_2();
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


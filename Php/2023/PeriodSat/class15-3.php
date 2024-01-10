<?php  // class15-3.php

class Hoge {
    public static function func() {
        echo __METHOD__ , "<br>";
    }
    public static function t() {
        static::func(); // XXX ここだけ違う
    }
}
class Foo extends Hoge {
    public static function func() {
        echo __METHOD__ , "<br>";
    }
}


//
Hoge::func();
Foo::func();
//
Hoge::t();
Foo::t();

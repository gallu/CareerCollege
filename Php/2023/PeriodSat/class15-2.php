<?php  // class15-2.php

class Hoge {
    public static function func() {
        echo __METHOD__ , "<br>";
    }
    public static function t() {
        self::func();
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

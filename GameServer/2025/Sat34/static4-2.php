<?php  // static4-2.php

class Hoge {
    public static function func() {
        echo __METHOD__ , "<br>";
    }
    public static function t() {
        // self::func();
        static::func(); // 遅延静的束縛 (Late Static Bindings) 
    }
}
//
class Foo extends Hoge {
    public static function func() {
        echo __METHOD__ , "<br>";
    }
}
//
Hoge::t();
Foo::t();

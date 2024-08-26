<?php  // static6.php
// 遅延静的束縛 (Late Static Bindings)

class StaticHoge {
    public static function func1() {
        echo __METHOD__ , "<br> \n";
    }

    public static function callFunc() {
        static::func1(); // [memo]ここが、selfじゃなくてstatic
    }
}

class StaticFoo extends StaticHoge {
    public static function func1() {
        echo __METHOD__ , "<br> \n";
    }
}

StaticHoge::callFunc();

StaticFoo::callFunc();

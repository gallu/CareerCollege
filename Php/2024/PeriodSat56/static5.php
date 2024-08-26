<?php  // static5.php

class StaticHoge {
    public static function func1() {
        echo __METHOD__ , "<br> \n";
    }

    public static function callFunc() {
        self::func1();
    }
}

class StaticFoo extends StaticHoge {
    public static function func1() {
        echo __METHOD__ , "<br> \n";
    }
}

StaticHoge::callFunc();

StaticFoo::callFunc();

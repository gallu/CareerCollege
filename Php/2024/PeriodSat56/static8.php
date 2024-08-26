<?php  // static8.php

class Hoge {
    public static function staticFunc() {
        echo __METHOD__ , "<br> \n";
    }

    public function func() {
        echo __METHOD__ , "<br> \n";
    }
}

//
Hoge::staticFunc();
//
$obj = new  Hoge();
$obj->func();


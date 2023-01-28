<?php   // class8.php

class Hoge {
    // staticメソッド(静的メソッド)
    public static function foo() {
        echo __METHOD__ , "<br>";
    }
}

//
Hoge::foo();

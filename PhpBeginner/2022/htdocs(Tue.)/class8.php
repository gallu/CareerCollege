<?php  // class8.php

class Hoge {
    public static function foo() {
        echo __METHOD__ , "<br>";
    }
}

// 静的メソッド
Hoge::foo();

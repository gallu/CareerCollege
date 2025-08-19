<?php  // static2.php
declare(strict_types=1); 

class Hoge {
    // 静的メソッド
    public static function func() {
        echo __METHOD__ , "<br>";
    }
}
//
Hoge::func();

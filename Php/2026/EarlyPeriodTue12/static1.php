<?php  // static1.php
declare(strict_types=1);

class Hoge {
    public static function func() {
        echo __METHOD__;
    }
}

//
Hoge::func();

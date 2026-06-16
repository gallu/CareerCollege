<?php  // static2.php
declare(strict_types=1);

class Hoge {
    public static int $num;
}

Hoge::$num = 123;
var_dump( Hoge::$num );

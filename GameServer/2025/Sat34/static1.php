<?php  // static1.php
declare(strict_types=1); 

class Hoge {
    // 静的プロパティ
    public static int $num;
}
//
Hoge::$num = 123;
var_dump( Hoge::$num );


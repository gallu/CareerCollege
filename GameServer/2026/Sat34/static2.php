<?php  // static2.php

class Hoge {
    public static int $num;
}

// 静的プロパティ
Hoge::$num = 10;
var_dump(Hoge::$num);

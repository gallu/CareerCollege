<?php  // class7.php
declare(strict_types=1);

// 静的(static)なクラス
class Hoge {
    public static function test(int $num) {
        Hoge::$num = $num; // やめとけ
        self::$num = $num; // どっちかってぇとあんまり使わないほうがいい可能性が高い(プロパティだとselfでいいかも)
        static::$num = $num; // 割と使いやすい(特にメソッドを呼ぶ時)
        //
        echo "into static Hoge::test <br>";
    }
    public static function getNum() {
        return Hoge::$num;
    }

    private static int $num;
}
//
/*
$obj = new Hoge();
$obj->test(100);
var_dump($obj);
*/
Hoge::test(987);
var_dump(Hoge::getNum());


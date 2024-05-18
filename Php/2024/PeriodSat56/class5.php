<?php  // class5.php
declare(strict_types=1);

// クラス定義
class Hoge {
    // 定数
    public const STR = "str val";
    
    // 変数(プロパティ)
    public int $id;
    public string $name;

    // 関数(メソッド)
    public function foo() {
        echo __METHOD__ , "<br>";
    }
}
//
$obj = new Hoge();
// プロパティ
$obj->id = 1;
$obj->name = "TECH.C";
var_dump($obj);
echo "<br>";
// メソッド
$obj->foo();
// 定数
var_dump( Hoge::STR );
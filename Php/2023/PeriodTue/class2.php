<?php  // class2.php
declare(strict_types=1);
// クラスの定義
class Hoge {
    // 定数の定義
    const STR = "string";

    // 関数(メソッド)の定義
    public function foo() {
        var_dump(__METHOD__);
    }
    // 変数(プロパティ)の定義
    public int $num = 0;
}
// 定数の使用
var_dump( Hoge::STR );

// インスタンスの生成
$obj = new Hoge();
$obj->foo(); // メソッドの使用
$obj->num = 999; // プロパティへの代入
var_dump($obj->num); // プロパティの使用

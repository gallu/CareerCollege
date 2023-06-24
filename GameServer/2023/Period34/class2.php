<?php  // class2.php
declare(strict_types=1);
// クラス定義
class Hoge {
    // 定数
    const STR = "string";

    //　関数
    public function foo() {
        var_dump(__METHOD__);
    }
    
    // 変数
    public int $num = 0;
}
//
$obj = new Hoge();
var_dump($obj);
// 定数を使う
var_dump(Hoge::STR);
// 関数（メソッド）を使う
$obj->foo();
// 変数（プロパティ）を使う
$obj->num = 999;
var_dump($obj);

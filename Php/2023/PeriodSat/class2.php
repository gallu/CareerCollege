<?php  // class2.php
declare(strict_types=1);
// クラスの定義
class Hoge {
    // 定数
    const STR = "string";
    
    // 関数
    public function foo() {
        var_dump(__METHOD__);
    }
    
    // 変数
    public int $num = 0;
}
//　インスタンス(オブジェクト）の生成
$obj = new Hoge();

// 定数の使用
var_dump(Hoge::STR);
// 関数(メソッド）の使用
$obj->foo();
// 変数(プロパティ)の使用
$obj->num = 999;
var_dump($obj->num);

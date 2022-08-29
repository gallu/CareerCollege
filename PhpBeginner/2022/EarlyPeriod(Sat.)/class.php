<?php   // class.php

//
function 関数() {
    echo __FUNCTION__ , "<br>";
}
関数();

//
$変数 = "val";
var_dump($変数);
echo "<br>";

//
class クラス名 {
    // メソッド
    public function クラス関数() {
        echo __METHOD__ , "<br>";
    }

    // プロパティ
    public $クラス変数;
}
//
$インスタンス = new クラス名();
//
$インスタンス->クラス関数();
//
$インスタンス->クラス変数 = 123;
var_dump($インスタンス);
echo "<br>";

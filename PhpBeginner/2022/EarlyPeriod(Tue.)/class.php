<?php   // class.php

class クラス名 {
    // メソッド
    public function クラス関数() {
        echo __METHOD__ , "<br>";
    }

    // プロパティ
    public string $クラス変数 = "初期値";
}

//
$インスタンス = new クラス名();
//
$インスタンス->クラス関数();
//
var_dump($インスタンス);
echo "<br>";
//
$インスタンス->クラス変数 = "新しい値";
var_dump($インスタンス);
echo "<br>";

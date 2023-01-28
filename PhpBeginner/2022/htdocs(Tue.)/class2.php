<?php  // class2.php

class クラス名 {
    public function クラス内関数名() {
        echo "クラス内関数";
    }
    public function メソッド($引数) {
        return $引数 * 2;
    }
}

$オブジェクト = new クラス名();
$オブジェクト->クラス内関数名(); //  ->
$r = $オブジェクト->メソッド(10);
var_dump($r);

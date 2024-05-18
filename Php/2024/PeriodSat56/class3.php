<?php  // class3.php
declare(strict_types=1);

// クラス定義
class Hoge {
    // 関数(メソッド)が定義できる
    public function foo() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new Hoge();
$obj->foo();

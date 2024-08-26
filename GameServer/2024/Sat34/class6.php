<?php  // class6.php
declare(strict_types=1);

class Hoge {
    // コンストラクタ
    public function __construct() {
        echo __METHOD__ , "<br>";
    }
    // デストラクタ
    public function __destruct() {
        echo __METHOD__ , "<br>";
    }
}

echo "test <br>";
$obj = new Hoge();
echo "test 2<br>";

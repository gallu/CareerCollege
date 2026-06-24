<?php  // class2.php
declare(strict_types=1);

class Hoge {
    // 関数(メソッド)
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Hoge();
$obj->func();

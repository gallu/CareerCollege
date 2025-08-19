<?php  // class3.php

class Hoge {
    // 関数(メソッド)
    public function func() {
        echo __METHOD__ , "<br>";
    }
}
//
$obj = new Hoge();
$obj->func();


<?php  // class3.php

class Hoge {
    // クラス内関数( メソッド )
    public function foo() {
        echo "run foo <br>";
    }
}

//
$obj = new Hoge();
var_dump($obj);
//
//$obj の中にある foo();
$obj->foo();

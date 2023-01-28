<?php   // class3.php

class Hoge {
    // クラス内関数( メソッド )
    public function foo() {
        echo "call func <br>";
    }
}

//
$object = new Hoge();
//$object の中にある　foo();
$object->foo();

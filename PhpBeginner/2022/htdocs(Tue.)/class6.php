<?php // class6.php
// マルチプルインスタンスの確認
class Hoge {
    public function setNumber($v) {
        $this->number = $v;
    }
    
    private $number;
}
//
$obj = new Hoge();
$obj->setNumber(123);
//
$obj2 = new Hoge();
$obj2->setNumber(456);
//
var_dump($obj);
var_dump($obj2);


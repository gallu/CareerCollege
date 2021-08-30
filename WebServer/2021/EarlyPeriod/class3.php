<?php   // class3.php
declare(strict_types=1);

// XXX 呼び元の中身も変わってしまう
function f($o) {
    $o->setNum(999);
    $o->j = 123;
}
//
class Hoge {
    //
    public function setNum($v) {
        $this->i = $v;
    }
    public function getNum() {
        return $this->i;
    }
    //
    private $i;
}
//
$obj = new Hoge();
$obj->setNum(10);
var_dump($obj);
f($obj);
var_dump($obj);


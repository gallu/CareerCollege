<?php // class7.php
class Hoge {
    public $number;
}
function bar(Hoge $o) {
    $o->number = 123456; // XXX 呼び元も書き変わる
}

//
function foo($v) {
    $v = $v * 10; // 呼び元は書き変わらない
}
$num = 10;
foo($num);
var_dump($num);

//
$obj = new Hoge();
bar($obj);
var_dump($obj);


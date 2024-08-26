<?php  // ref.php

// 値渡しなので、引数の変数に変更を加えても大本は変更されない
function ref1(int $num) {
    $num *= 10;
}
$i = 10;
ref1($i);
var_dump($i);

// インスタンスは参照で渡るので、引数のインスタンスに変更を加えると大本も変更される
function ref2(Hoge $o) {
    $o->num *= 10;
}
class Hoge {
    public int $num;
}
$obj = new Hoge();
$obj->num = 10;
ref2($obj);
var_dump($obj);

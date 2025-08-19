<?php  // func17.php
//
class Hoge {
    public int $num;
}

//
function func1(array $arr) {
    $arr[] = 333;
}
$arr = [1, 2];
func1($arr);
var_dump($arr);

//
function func2(Hoge $o) {
    $o->num = 9876;
}
$obj = new Hoge();
$obj->num = 111;
func2($obj);
var_dump($obj);

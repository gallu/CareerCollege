<?php  // class2.php
declare(strict_types=1);

//
class Hoge {
    //
    public $i;
}
//
$obj = new Hoge();
$obj->i = 123;
var_dump($obj);
// インスタンスの代入
$obj2 = $obj;
var_dump($obj2);
// ???
$obj2->i = 999;
var_dump($obj);
//
$obj3 = new Hoge();
var_dump($obj3);
// インスタンスをcopy
$obj4 = clone $obj3;
var_dump($obj4);
// ok
$obj4->i = 987;
var_dump($obj3);











<?php  // func16.php
declare(strict_types=1);

function hoge(array $arr) {
    $arr[] = 999;
}
//
$arr = [1, 2];
hoge($arr);
print_r($arr);

//
class Foo {
    public int $num;
}
function bar(Foo $obj) {
    $obj->num = 999;
}
//
$obj = new Foo();
$obj->num = 111;
bar($obj);
var_dump($obj);



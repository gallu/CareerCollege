<?php  // func11.php

function hoge(int $i) {
    $i += 100;
    var_dump("local", $i);
}
$i = 100;
hoge($i);
var_dump("global", $i);

function foo(array $awk) {
    $awk[] = 10;
    var_dump("local", $awk);
}
$awk = [1, 2];
foo($awk);
var_dump("global", $awk);


class Item {
    public int $price;
}
function bar(Item $obj) {
    $obj->price = 9999;
}
$obj = new Item();
$obj->price = 123;
bar($obj);
var_dump($obj);

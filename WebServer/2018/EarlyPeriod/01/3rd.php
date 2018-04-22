<?php
// 3rd.php

$awk = ['aaa', 1, 'bbb', 2, 'ccc'];
//var_dump($awk);

foreach($awk  as  $k => $v) {
    echo "key:", $k, " data is ", $v, "<br>\n";
}

// 関数(足し算)
function add($a, $b) {
    $ret = $a + $b;
    return  $ret;
}
//
$i = add(10, 20); // 関数を使う
echo $i, "<br>\n";

//
function test1() {
    $i = 0;
    $i ++;
    echo "i(1) is ", $i, "<br>\n";
}
test1();
test1();
test1();
//
function test2() {
    static $i = 0;
    $i ++;
    echo "i(2) is ", $i, "<br>\n";
}
test2();
test2();
test2();

//
class  HogeClass  {
}
$obj = new HogeClass();
var_dump($obj);









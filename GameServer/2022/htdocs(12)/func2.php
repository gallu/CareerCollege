<?php  // func2.php

//
function 関数名($引数) {
    var_dump($引数);
    echo "<br>";
}
//
関数名(123);
関数名("string");
関数名(3.141592);

//
function hoge($val, $num) {
    var_dump($val);
    var_dump($num);
    echo "<br>";
}
//
hoge(123, 3.14);

$s = "str";
$num = 999;
hoge($s, $num);

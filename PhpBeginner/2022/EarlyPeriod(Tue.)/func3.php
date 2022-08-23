<?php   // func3.php

function 関数名($引数) {
    $戻り値 = $引数 * 999;
    return $戻り値;
}
//
$r = 関数名(10);
var_dump($r);
echo "<br>";

//
function func2(int $i) : int {
    var_dump($i);
    $k = $i * 888;
    return $k;
}
$r = func2(10);
var_dump($r);

echo "<br>";
$r = func2("2");
var_dump($r);

echo "<br>";
$r = func2("abc"); // XXX これはダメ
var_dump($r);








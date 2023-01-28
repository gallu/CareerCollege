<?php   // func5.php

function hoge(int $num) : void {
    echo "<br>into hoge<br>";
    var_dump($num);
    $num = $num * 999;
    var_dump($num);
    echo "<br>hoge out<br>";
}

//
$num = 10;
var_dump($num);
hoge($num);
var_dump($num);
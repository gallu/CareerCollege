<?php   // func4.php

function Hoge($num) {
    echo "in func before num is {$num} <br>";
    $num = $num * 10;
    echo "in func after num is {$num} <br>";
}
//
$num = 10;
echo "before num is {$num} <br>";
Hoge($num);
echo "after num is {$num} <br>";


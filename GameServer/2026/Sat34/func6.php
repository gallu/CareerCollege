<?php  // func6.php

function hoge($local_num) {
    $local_num *= 2;
    echo "local is {$local_num} <br>";
}

$global_num = 123;
hoge($global_num);
echo "global is {$global_num} <br>";

//
function foo($num) {
    $num *= 3;
    echo "local num is {$num} <br>";
}
$num = 123;
foo($num);
echo "global num is {$num} <br>";

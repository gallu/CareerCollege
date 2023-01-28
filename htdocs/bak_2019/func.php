<?php  // func.php

function hoge() {
    echo "into hoge\n";
}
hoge();
HOGE();

//
//error_reporting(E_ALL & ~E_NOTICE); // ‘‚­‚ÈII
$i = 10;
function foo() {
    echo "{$i}\n";
    echo "{$GLOBALS['i']}\n";
}
foo();

//
function bar($bar_i) {
     $bar_i ++;
     var_dump($bar_i);
}
$i = 10;
bar($i);
echo "i is {$i}\n";

//
function r_bar(&$bar_i) {
     $bar_i ++;
     var_dump($bar_i);
}
$i = 10;
r_bar($i);
echo "i is {$i}\n";







<?php  // static.php

function hoge() {
    $i = 0;
    $i ++;
    echo "hoge: count is {$i}<br>\n";
}
function foo() {
    static $i = 0;
    $i ++;
    echo "foo: count is {$i}<br>\n";
}
hoge(); hoge(); hoge();
;
foo(); foo(); foo();



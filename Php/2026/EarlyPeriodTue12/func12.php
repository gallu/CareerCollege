<?php  // func12.php
declare(strict_types=1);

function hoge() {
    $i = 0;
    ++ $i;
    
    echo "hoge i is {$i} <br>\n";
}
function foo() {
    static $i = 0;
    ++ $i;
    
    echo "foo i is {$i} <br>\n";
}
//
hoge();
hoge();
hoge();

foo();
foo();
foo();

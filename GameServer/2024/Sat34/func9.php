<?php  // func9.php
declare(strict_types=1);

function hoge() {
    $i = 0;
    ++$i;
    static $j = 0;
    ++$j;

    echo "i is {$i} , j is {$j} <br> \n";
}
//
hoge();
hoge();
hoge();

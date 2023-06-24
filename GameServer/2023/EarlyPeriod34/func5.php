<?php  // func5.php

function hoge() {
    $i = 0;
    static $j = 0;
    $i ++;
    $j ++;
    echo "i: {$i}, j: {$j} <br>\n";
}

hoge();
hoge();
hoge();

<?php  // func14.php
declare(strict_types=1);

function hoge() {
    $i = 0;
    static $j = 0;

    ++$i;
    ++$j;

    echo "i is {$i} <br>";
    echo "j is {$j} <br>";
}

//
hoge();
hoge();
hoge();

<?php  // func13.php
declare(strict_types=1);

function hoge() {
    $i = 0;
    ++ $i;
    echo "i is {$i} <br>";
}
hoge();
hoge();
hoge();

echo "<br>";

function foo() {
    static $i = 0;
    ++ $i;
    echo "i is {$i} <br>";
}
foo();
foo();
foo();
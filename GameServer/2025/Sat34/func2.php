<?php  // func2.php

function hoge($num) {
    $num += 100;
    echo "hoge: num {$num} <br>";
}

$num = 1;
hoge($num);
echo "global: num {$num} <br>";

// 基本「やらない」
function foo(&$num) {
    $num += 100;
    echo "foo: num {$num} <br>";
}

$num = 1;
foo($num);
echo "global: num {$num} <br>";

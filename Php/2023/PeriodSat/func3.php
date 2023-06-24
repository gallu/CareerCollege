<?php  // func3.php
declare(strict_types=1);

function hoge($num) {
    $num += 100;
    echo "local: num is {$num} <br>\n";
}
$num = 10;
hoge($num);
echo "global: num is {$num} <br>\n";

/*
function hoge($local_num) {
    $local_num += 100;
    echo "local: num is {$local_num} <br>\n";
}
$global_num = 10;
hoge($global_num);
echo "global: num is {$global_num} <br>\n";
*/
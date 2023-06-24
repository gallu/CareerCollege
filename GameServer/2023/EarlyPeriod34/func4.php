<?php   // func4.php

function hoge(int $num) {
    $num += 100;
    echo "num is {$num} <br> \n";
}
$num = 10;
hoge($num);
echo "num is {$num} <br> \n";

/*
function hoge(int $local_num) {
    $local_num += 100;
    echo "local_num is {$local_num} <br> \n";
}

$global_num = 10;
hoge($global_num);
echo "global_num is {$global_num} <br> \n";
*/

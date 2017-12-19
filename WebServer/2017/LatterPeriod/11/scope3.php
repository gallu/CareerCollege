<?php
// scope3.php
function hoge() {
    static $i = 0;
    $i ++;
    //
    $j = 0;
    $j ++;
    echo "i is {$i}, j is {$j}<br>\n";
}
//
hoge();
hoge();
hoge();

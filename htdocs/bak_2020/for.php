<?php   // for.php
//  http://dev2.m-fr.net/アカウント名/for.php

for($i = 0; $i < 10; ++$i) {
    echo $i , "<br>\n";
}

// 九九
for($i = 1; $i <= 9; ++$i) {
    for($j = 1; $j <= 9; ++$j) {
        echo "{$i}*{$j}=" , $i * $j , " / ";
    }
    echo "<br>\n";
}

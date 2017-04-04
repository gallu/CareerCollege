<?php

$awk = array();
for($i = 1; $i <= 6; $i ++) {
    for($j = 1; $j <= 6; $j ++) {
        for($k = 1; $k <= 6; $k ++) {
            $total = $i + $j + $k;
            @$awk[$total] ++;
        }
    }
}
//var_dump($awk);

foreach($awk as $k => $v) {
    $p = $v / (6*6*6) * 100;
    //echo "{$k} is {$p}%\n";
    printf("%2d is %.2f%%\n", $k, $p);
}

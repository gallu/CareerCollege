<?php  // rand.php

// 弱い疑似乱数
$i = mt_rand(1, 6);

// 強い疑似乱数
$j = random_int(1, 6);

echo "<pre>\n";
var_dump($i, $j);

if ( 0 === (($i + $j)%2)) {
    echo '丁';
} else {
    echo '半';
}


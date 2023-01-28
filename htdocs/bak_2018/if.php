<?php
// if.php

// 命中判定
$hit = mt_rand(1, 6) + mt_rand(1, 6) + mt_rand(1, 6);
//
echo "命中判定は..." , $hit , "<br>\n";

if (12 <= $hit) {
    echo "命中しました!!<br>\n";
} else {
    echo "外れました orz<br>\n";
}


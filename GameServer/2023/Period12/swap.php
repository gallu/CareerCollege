<?php  // swap.php

$i = 12;
$j = 56;
echo "i:{$i}, j:{$j}<br>\n";

// これは「ダメ」
/*
$i = $j;
$j = $i;
echo "i:{$i}, j:{$j}<br>\n";
*/

//
$wk = $i;
$i = $j;
$j = $wk;
echo "i:{$i}, j:{$j}<br>\n";

// 言語にもよるし書き方も違う
list($i, $j) = [$j, $i];
echo "i:{$i}, j:{$j}<br>\n";

// 数値限定
$i ^= $j;
$j ^= $i;
$i ^= $j;
echo "i:{$i}, j:{$j}<br>\n";

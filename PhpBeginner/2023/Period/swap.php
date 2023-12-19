<?php  // swap.php

$i = 12;
$j = 56;
echo "i:{$i}, j:{$j} <br>\n";

// $i = $j;
// $j = $i;
$wk = $i;
$i = $j;
$j = $wk;
echo "i:{$i}, j:{$j} <br>\n";

// 余技
list($i, $j) = [$j, $i];
echo "i:{$i}, j:{$j} <br>\n";

// 余技: 数値限定
$i = $i ^ $j;
$j = $i ^ $j;
$i = $i ^ $j;
echo "i:{$i}, j:{$j} <br>\n";

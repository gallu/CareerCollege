<?php  // grammar.php
//  http://dev2.m-fr.net/XXXX/grammar.php

//echo 'grammar';
//
$i = mt_rand(0, 999);
echo "{$i} は";
if (0 === $i % 2) {
    echo "偶数";
} else {
    echo "奇数";
}
echo "です<br>\n";

//
for($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
echo "<br>\n";
//
$i = 0;
while($i < 10) {
    echo "{$i}, ";
    ++$i;
}
echo "<br>\n";

//
for($i = 1; $i <= 9; ++$i) {
    for($j = 1; $j <= 9; ++$j) {
        printf("%2d*%2d=%2d, ", $i, $j, $i * $j);
    }
    echo "<br>\n";
}

// == で困ること
if (2 == '2') {
    echo "2 == '2' は等しい<br>\n";
} else {
    echo "2 == '2' は等しくない<br>\n";
}
if (2 == '2a') {
    echo "2 == '2a' は等しい<br>\n";
} else {
    echo "2 == '2a' は等しくない<br>\n";
}

// switchで困ること
$i = 2;
switch($i) {
    case '2a':
        echo "'2a' <br>\n";
        break;
    case '2':
        echo "'2' <br>\n";
        break;
    case 2:
        echo "2 <br>\n";
        break;
}











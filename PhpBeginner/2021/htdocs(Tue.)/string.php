<?php   // string.php

// 一重引用符と二重引用符の違い その１
$s = 'string';
$t = "ssstring";
echo $s , "<br>\n";
echo $t , "<br>\n";

// その２
$i = 10;
$s = '$i is val';
$t = "$i is val";
echo $s , "<br>\n";
echo $t , "<br>\n";
// その2.1
$ii = 99;
$t = "$ii is val";
echo $t , "<br>\n";
$t = "{$i}i is val";
echo $t , "<br>\n";

// その３
$s = 'st \t ri \n ng';
$t = "st \t ri \n ng";
echo $s , "<br>\n";
echo $t , "<br>\n";
// その3.1
$s = ' \' \\ \" ';
$t = " \' \\ \" ";
echo $s , "<br>\n";
echo $t , "<br>\n";


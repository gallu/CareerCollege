<?php  // op3.php

// 10進数
$i = 10;
echo "i is {$i} <br>";
echo decbin($i), "<br>";

// 0-9,abcdef
// 16進数
$i = 0xff;
echo "i is {$i} <br>";
echo decbin($i), "<br>";

// 100111001000111010
// ２進数
$i = 0b1010;
echo "i is {$i} <br>";
echo decbin($i), "<br>";

//
$i = 0b1010;
echo decbin($i), "<br>";
$i = $i << 2;
echo decbin($i), "<br>";
//
$i = 0b1010;
$i = $i >> 1;
echo decbin($i), "<br>";

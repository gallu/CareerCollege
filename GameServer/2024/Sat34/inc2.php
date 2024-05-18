<?php  // inc2.php

$num = 0;
$r = ++$num;
echo "r is {$r} <br>";

$num = 0;
$r = $num++;
echo "r is {$r} <br>";

$num = 0;
$r = $num  +  ++$num;
echo "r is {$r} <br>";

$num = 0;
$r = $num  +  $num++;
echo "r is {$r} <br>";

<?php   // inc_dec.php
//  https://dev2.m-fr.net/アカウント名/inc_dec.php

$num = 0;
echo "{$num}<br>";

$num = $num + 1;
echo "num = num + 1 : {$num}<br>";

$num += 1;
echo "num += 1 : {$num}<br>";

$num ++; // 後置
echo "num ++ : {$num}<br>";
++ $num; // 前置
echo "++ num : {$num}<br>";


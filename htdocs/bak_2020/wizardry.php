<?php  // wizardry.php
//   http://dev2.m-fr.net/アカウント名/wizardry.php

// まず [5, 9] の乱数を発生して一の位を決定。
$bonus = mt_rand(5, 9);

// その後、5%の確率で[1, 10]を加える処理を繰り返し行う
while (5 > mt_rand(0, 99)) {
    echo '+';
    //$bonus = $bonus + mt_rand(1, 10);
    $bonus += mt_rand(1, 10);
}

//
echo 'Bonus is ' , $bonus;

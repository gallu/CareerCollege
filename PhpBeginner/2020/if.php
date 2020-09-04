<?php   // if.php
//    http://dev2.m-fr.net/アカウント名/if.php

$age = mt_rand(10, 30);
//var_dump($age);

echo "{$age}歳は………";
if (20 <= $age) {
    echo '成人です';
} else {
    echo '未成年です';
}

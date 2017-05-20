<?php
// dice.php
// http://dev2.m-fr.net/XXX/dice.php

/*
$i = mt_rand(0, 99);
var_dump($i);
*/
//
$i = mt_rand(1, 6);
$j = mt_rand(1, 6);
echo "{$i}, {$j} の……";
if (1 === (($i + $j) % 2)){
    echo '半';
} else {
    echo '長';
}

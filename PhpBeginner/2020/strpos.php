<?php   // strpos.php
//  http://dev2.m-fr.net/アカウント名/strpos.php

$r = strpos('abcdefg', 'd');
var_dump($r);
$r = strpos('abcdefg', 'Z');
var_dump($r);
//
if (strpos('abcdefg', 'd')) {
    echo "dはありました<br>\n";
} else {
    echo "dはありませんした<br>\n";
}
//
var_dump(strpos('abcdefg', 'a'));
if (strpos('abcdefg', 'a')) {
    echo "aはありました<br>\n";
} else {
    echo "aはありませんした<br>\n";
}
//
var_dump(false != 0);
var_dump(false !== 0);
if (false !== strpos('abcdefg', 'a')) {
    echo "aはありました<br>\n";
} else {
    echo "aはありませんした<br>\n";
}





<?php   // while.php
// https://dev2.m-fr.net/アカウント名/while.php

// 10回ループ
/*
for($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
*/
$i = 0;
while($i < 10) {
    echo "{$i}, ";
    ++$i;
}
echo "<br>\n";

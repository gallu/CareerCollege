<?php   // while.php
//  http://dev2.m-fr.net/アカウント名/while.php

$i = 0;
while($i < 10) {
    echo $i , "<br>\n";
    ++$i;
}

//
while(0 != mt_rand(0, 50)) {
    echo '.';
}
echo "<br>\n";

//
while(false) {
    echo "???";
}
echo "<br>\n";

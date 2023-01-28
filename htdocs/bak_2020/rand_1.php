<?php  // rand_1.php
//   http://dev2.m-fr.net/アカウント名/rand_1.php

for($i = 0; $i < 10; ++$i) {
    //echo $i , ",";
    $r = mt_rand(0, 99);
    echo $r , ",";
}
echo "<br>\n";

mt_srand(20200530);
for($i = 0; $i < 10; ++$i) {
    //echo $i , ",";
    $r = mt_rand(0, 99);
    echo $r , ",";
}

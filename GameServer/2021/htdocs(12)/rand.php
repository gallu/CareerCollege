<?php  // rand.php

// 乱数を作る
$r = mt_rand(0, 99);
echo  $r  , '<br>';

// 暗号強度のある乱数を作る
$r = random_int(0, 99);
echo  $r  , '<br>';

//
$r1 = random_int(3, 18);
$r2 = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
echo $r1 , ' : ' , $r2 , '<br>';

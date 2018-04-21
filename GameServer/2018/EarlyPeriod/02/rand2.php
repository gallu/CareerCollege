<?php
// rand2.php
$i = mt_rand(3, 18);
var_dump($i);

// 3D6
$i = mt_rand(1, 6) + mt_rand(1, 6) + mt_rand(1, 6);
var_dump($i);

$i = mt_rand(1, 4) + mt_rand(1, 6) + mt_rand(1, 8);
var_dump($i);


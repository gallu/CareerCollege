<?php   // array3.php
declare(strict_types=1);

// sort
$awk = [];
for($i = 0; $i < 4; ++$i) {
    $awk[ random_int(0, 999) ] = random_int(0, 999);
}
var_dump($awk);
//sort($awk);
//var_dump($awk);
asort($awk);
var_dump($awk);
//
ksort($awk);
var_dump($awk);


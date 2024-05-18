<?php  // eo.php

$num = random_int(1, 10);
var_dump( $num );

$eo = $num % 2;

if ($eo === 0) {
    echo "偶数です";
} else {
    echo "奇数です";
}

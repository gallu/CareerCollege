<?php  // if2.php

$num = random_int(1, 10);
var_dump( $num );

if ($num > 5 ) {
    echo "5より大きいです";
}

if ($num <= 5) {
    echo "5以下です";
}

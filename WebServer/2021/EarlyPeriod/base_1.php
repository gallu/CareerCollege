<?php  // base_1.php
declare(strict_types=1);

$i = random_int('0', '999');
var_dump(0, '0');
var_dump( $i, (500 > $i) );
//
if (500 > $i) {
    echo '$i は ５００より小さいです';
} else {
    echo '$i は ５００より大きいです';
}

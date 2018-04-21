<?php
// rand.php
$t = microtime(true);
for($c = 0; $c < 100000; ++$c) {
    $i = rand(0, 99);
}
$t2 = microtime(true);
var_dump( $t2 - $t );

$t = microtime(true);
for($c = 0; $c < 100000; ++$c) {
    $i = mt_rand(0, 99);
}
$t2 = microtime(true);
var_dump( $t2 - $t );
//var_dump( $i );

$t = microtime(true);
for($c = 0; $c < 100000; ++$c) {
    $i = random_int(0, 99);
}
$t2 = microtime(true);
var_dump( $t2 - $t );
//var_dump( $i );

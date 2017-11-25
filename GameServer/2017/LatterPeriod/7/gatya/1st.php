<?php
// 1st.php
$t_start = microtime(true);
for($i = 0; $i < 10000; ++$i) {
    mt_rand(0, 99);
}
$t_end = microtime(true);
var_dump($t_end - $t_start);
//
$t_start = microtime(true);
for($i = 0; $i < 10000; ++$i) {
    random_int(0, 99);
}
$t_end = microtime(true);
var_dump($t_end - $t_start);

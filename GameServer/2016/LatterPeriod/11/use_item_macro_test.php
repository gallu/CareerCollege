<?php
// use_item_macro_test.php
$s = 'HP回復:100,MP回復:100';
$awk = explode(',', $s);
var_dump($awk);

$s = 'HP回復:500';
$awk = explode(',', $s);
var_dump($awk);

exit;





function use_item_macro_test($macro) {
    $ret = explode(':', $macro);
    return $ret;
}
//
$r = use_item_macro_test('HP回復:100');
var_dump($r);
//
$r = use_item_macro_test('HP回復:50');
var_dump($r);
//
$r = use_item_macro_test('MP回復:50');
var_dump($r);


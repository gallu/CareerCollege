<?php
// call_by.php
function hoge($i, $s, $arr, $o) {
    $i ++; $s .= 'add';
    $arr[] = 10; $o->data = 'data';
}
function foo(&$i, &$s, &$arr, &$o) {
    $i ++; $s .= 'add';
    $arr[] = 10; $o->data = 'data';
}
//
$i = 1; $s = ''; $array = []; $o = new StdClass();
hoge($i, $s, $array, $o);
//var_dump($i, $s, $array, $o);
foo($i, $s, $array, $o);
var_dump($i, $s, $array, $o);

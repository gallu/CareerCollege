<?php
// scope.php
function hoge() {
    $l_val = 'test_2'; // ローカル変数
    var_dump($l_val);
    var_dump('in hoge ', $g_val); // XXX
    //
    var_dump('in hoge(GLOBALS) ', $GLOBALS['g_val']);
    //
    global  $g_val;
    var_dump('in hoge(global) ', $g_val);
}
//
$g_val = 'test_1'; // グローバル変数
var_dump($g_val);
var_dump('out hoge ', $l_val); // XXX
//
hoge();


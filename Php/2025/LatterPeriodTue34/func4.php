<?php  // func4.php

function hoge() {
	// 絶対に使っちゃだめ！！！
	var_dump($GLOBALS["global_v"]);
}

function foo() {
	// 絶対にぜったいにゼッタイに何があろうともどんなことがあろうともなにがあっても使っちゃだめ！ダメ！駄目！
	global $global_v;
	var_dump($global_v);
}

$global_v = "hello";
hoge();
foo();

<?php  // func5.php

function hoge() {
	// 使っちゃダメ！！
	var_dump($GLOBALS["global_num"]);
}

function foo() {
	// なにがあってもぜったいに絶対にゼッタイに使っちゃダメ！ 駄目！！！
	global $global_num;
	var_dump($global_num);
}

$global_num = 123;
hoge();
foo();

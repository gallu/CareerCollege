<?php // box_reset.php

session_start();

$box = [
	//
	['name' => 'ゴブリン'],
	['name' => 'ゴブリン'],
	['name' => 'ゴブリン'],
	['name' => 'ゴブリン'],
	['name' => 'ゴブリン'],
	//
	['name' => 'スライム'],
	['name' => 'スライム'],
	['name' => 'スライム'],
	['name' => 'スライム'],
	//
	['name' => 'ドラゴン'],
];
//var_dump($box);

//
shuffle($box);
//var_dump($box);

//
$_SESSION['box_string'] = serialize($box);

//
echo 'リセット完了';






<?php  // box.php

session_start();

// box自体がなければ、リセットに移動
if (false === isset($_SESSION['box_string'])) {
	header('Location: ./box_reset.php');
	return ;
}

// boxの復元
$box = unserialize($_SESSION['box_string']);

// boxが空なら、リセットに移動
if ([] === $box) {
	header('Location: ./box_reset.php');
	return ;
}

// 1枚取り出す
$card = array_pop($box); // array_shift()でもOK

//
echo "残" . count($box) . "枚<br>";
echo "{$card['name']}をゲット!!";

// 取り出した後の情報を保存
$_SESSION['box_string'] = serialize($box);









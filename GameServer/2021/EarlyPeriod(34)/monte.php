<?php  // monte.php
require_once( __DIR__ . '/dice.php');

//
$data = [];
$loop_num = 10000; // 繰り返す回数
for($i = 0; $i < $loop_num; ++$i) {
	$r = dice('3d6');
	$data[$r] ??= 0; // Warning対策
	$data[$r] += 1;
}
ksort($data);
//var_dump($data);

// 確率の表示
foreach($data as $k => $v) {
	echo "{$k}の確率は " , ($v / $loop_num) * 100 , "% <br>";
}





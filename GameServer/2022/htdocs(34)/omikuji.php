<?php   // omikuji.php

// おみくじのセットを準備する
$omikuji_set = [
	"大吉",
	"中吉",
	"小吉",
	"吉",
	"末吉",
	"凶",
	"大凶",
];
//var_dump( $omikuji_set );

// おみくじの番号を取り出す
$omikuji_set_count = count($omikuji_set);
$omikuji_no_max = $omikuji_set_count - 1;
$omikuji_no = random_int(0, $omikuji_no_max);
//$omikuji_no = random_int(0, count($omikuji_set) - 1);
//var_dump( $omikuji_no );

// 取り出した番号の紙を取得する
$omikuji_string = $omikuji_set[$omikuji_no];
//var_dump( $omikuji_string );
?><!DOCTYPE html>
<head>
  <title>おみくじ</title>
</head>
<body>
  <h1>おみくじ</h1>
  今日のあなたの運勢は
  「<?php  echo  htmlspecialchars($omikuji_string, ENT_QUOTES);  ?>」
  です。
</body>

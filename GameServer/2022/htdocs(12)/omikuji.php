<?php   // omikuji.php
// おみくじセットの準備をする
$omikuji_set = [
    "大吉",
    "中吉",
    "吉",
    "小吉",
    "末吉",
    "凶",
    "大凶",
];
//var_dump( $omikuji_set );

// おみくじの番号を１つ、引く
$num = count( $omikuji_set );
$omikuji_no_max = $num - 1;
$omikuji_no = random_int(0, $omikuji_no_max);
// $omikuji_no = random_int(0, count( $omikuji_set ) - 1);
//var_dump( $omikuji_no );

// おみくじの番号にそった紙を取る
$omikuji_string = $omikuji_set[ $omikuji_no ];
//var_dump( $omikuji_string );

?><!DOCTYPE html>
<title>おみくじ</title>
<h1>おみくじ</h1>
今日のあなたの運勢は
「<?php  echo htmlspecialchars($omikuji_string, ENT_QUOTES) ;  ?>」
です。




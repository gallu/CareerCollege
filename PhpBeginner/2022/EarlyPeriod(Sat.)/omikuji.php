<?php   // omikuji.php
// おみくじのセットを用意する
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

// おみくじを振って、番号を１つ取り出す
$max = count($omikuji_set) - 1;
$omikuji_no = random_int(0, $max);
//var_dump( $omikuji_no );

// 取り出した番号の紙を取得する
$omikuji_string = $omikuji_set[$omikuji_no];
//var_dump( $omikuji_string );
?><!DOCTYPE html>
<html>
  <head>
    <title>おみくじ</title>
  </head>
  <body>
    <h1>おみくじ</h1>
    今日のあなたの運勢は
    「<?php  echo  htmlspecialchars($omikuji_string, ENT_QUOTES) ;  ?>」
    です。
  </body>
</html>











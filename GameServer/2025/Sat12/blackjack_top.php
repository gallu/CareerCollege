<?php  // blackjack_top.php
/*
https://dev2.m-fr.net/アカウント名/blackjack_top.php

blackjack_start.php
・カードをシャッフルする
・ディーラー、プレイヤーとも、２枚カードを引く

blackjack_player.php
・プレイヤー loop
    「引く」を選択したら１枚引く  blackjack_player_draw.php
    「ステイ」を選択したらloopから抜ける    blackjack_player_stand.php

blackjack_end.php
・ディーラー loop
    合計が[一定値: 16]以下なら１枚引く
    合計が[一定値]を超えたらloopから抜ける
・勝敗を判定する
*/
?><!doctype html>
<html>
  <head>
  </head>
  <body>
    <h1>ブラックジャック</h1>
    <a href="./blackjack_start.php">ゲームを開始する</a>
  </body>
</html>

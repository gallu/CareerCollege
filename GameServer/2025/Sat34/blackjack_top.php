<?php  // blackjack_top.php
// セッションの開始
session_start();

//
$score_win = $_SESSION["score_win"] ?? 0;
$score_lose = $_SESSION["score_lose"] ?? 0;
$score_draw  = $_SESSION["score_draw"] ?? 0;

/*
blackjack_start.php
・カードをシャッフルする
・ディーラとプレイヤーにカードを２枚づつ配る

blackjack_player.php
・手札の表示
・プレイヤー loop
    「カードが欲しい」なら、１枚カードを引く
        (合計が22以上ならここで「負け」て終了)
    「もういらない」なら、loopを抜ける

・ディーラー loop
    手札が[一定値: 16]以下なら、１枚カードを引く
    手札が[一定値]を超えていたら、loopを抜ける

・手札を計算して勝敗判定
*/
?><!doctype html>
<html>
  <head>
    <title>ブラックジャック</title>
  </head>

  <body>
    <h1>ブラックジャック</h1>
    勝: <?php echo $score_win; ?>
    負: <?php echo $score_lose; ?>
    引: <?php echo $score_draw; ?><br>
    <a href="./blackjack_start.php">プレイを始める</a>
  </body>
</html>

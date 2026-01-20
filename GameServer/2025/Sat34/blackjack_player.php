<?php  // blackjack_player.php
require_once __DIR__ . "/PlayingCard.php";
require_once __DIR__ . "/blackjackScore.php";

// セッションの開始
session_start();

// ディーラーの手札の表示
echo "ディーラ: ";
foreach ($_SESSION["dealer"] as $k => $c) {
    if (0 === $k) {
        echo "[{$c->toString()}] ";
    } else {
        echo "[■] ";
    }
}
echo "<br>";

// プレイヤーの手札の表示
$num = blackjackScore($_SESSION["player"]);
echo "プレイヤー: ";
foreach ($_SESSION["player"] as $c) {
    echo "[{$c->toString()}] ";
}
echo "({$num})";
echo "<br><br>";

if ($num > 21) {
    //
    $_SESSION["score_lose"] ??= 0;
    $_SESSION["score_lose"] ++;
    //
    echo "あんたの負け！！ <br>\n";
    echo '<a href="./blackjack_top.php">次のプレイ</a><br>';
    exit;
}

?>
<a href="./blackjack_player_hit.php">ヒット(もう一枚ひく)</a><br>
<a href="./blackjack_dealer_hit.php">スタンド(ここでやめる)</a><br><!-- そのまま「ディーラの処理」に移動させる -->

<?php  // blackjack_end.php
require_once __DIR__ . "/PlayingCard.php";
require_once __DIR__ . "/blackjackScore.php";

// セッションの開始
session_start();

//
$dealer_score = blackjackScore($_SESSION["dealer"]);
$player_score = blackjackScore($_SESSION["player"]);

echo "ディーラー: ";
foreach ($_SESSION["dealer"] as $c) {
    echo "[{$c->toString()}] ";
}
echo "({$dealer_score})";
echo "<br>";

echo "プレイヤー: ";
foreach ($_SESSION["player"] as $c) {
    echo "[{$c->toString()}] ";
}
echo "({$player_score})";
echo "<br><br>";

if ($dealer_score > 21) {
    $_SESSION["score_win"] ??= 0;
    $_SESSION["score_win"] ++;
    echo "プレイヤーの勝ち(ディーラーバスト)<br>";
} elseif ($player_score === $dealer_score) {
    $_SESSION["score_draw"] ??= 0;
    $_SESSION["score_draw"] ++;
    echo "引き分け<br>";
} elseif ($player_score > $dealer_score) {
    $_SESSION["score_win"] ??= 0;
    $_SESSION["score_win"] ++;
    echo "プレイヤーの勝ち<br>";
} else {
    $_SESSION["score_lose"] ??= 0;
    $_SESSION["score_lose"] ++;
    echo "プレイヤーの負け<br>";
}
?>
<a href="./blackjack_top.php">次のプレイ</a>
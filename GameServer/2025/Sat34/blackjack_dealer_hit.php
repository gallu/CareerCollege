<?php  // blackjack_dealer_hit.php
require_once __DIR__ . "/PlayingCard.php";
require_once __DIR__ . "/blackjackScore.php";

// セッションの開始
session_start();

// ディーラが「合計１６以上になる」までカードを引く
while( blackjackScore($_SESSION["dealer"]) < 16 ) {
    $_SESSION["dealer"][] = array_pop($_SESSION["cards_shuffled"]);
}

// // デバッグ用
// echo "ディーラ: ";
// foreach ($_SESSION["dealer"] as $k => $c) {
    // echo "[{$c->toString()}] ";
// }

// 勝敗判定に進む
header("Location: ./blackjack_end.php");


<?php  // blackjack_start.php
require_once __DIR__ . "/shuffle.php";
// セッションを開始する
session_start();

/* カードをシャッフルする */
// 1セットのトランプを用意する
// スート（絵柄）
$suits = ["♠", "♥", "♦", "♣"];
// ランク（数字・絵札）
$ranks = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
// トランプ1セットを作成
$cards_base = [];
foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
        $cards_base[] = ["suit" => $suit , "rank" => $rank];
    }
}
// var_dump($cards_base);

// シャッフル
$cards_shuffled = FYshuffle($cards_base);
// var_dump($cards_shuffled);

/* ディーラー、プレイヤーとも、２枚カードを引く */
$dealer = [];
$player = [];
// ディーラー
$dealer[] = array_pop($cards_shuffled);
$dealer[] = array_pop($cards_shuffled);
// プレイヤー
$player[] = array_pop($cards_shuffled);
$player[] = array_pop($cards_shuffled);
// var_dump($dealer, $player);

// データを持ちまわる
$_SESSION["cards_shuffled"] = $cards_shuffled;
$_SESSION["dealer"] = $dealer;
$_SESSION["player"] = $player;

// プレイヤーのページに移動させる
header("Location: ./blackjack_player.php");

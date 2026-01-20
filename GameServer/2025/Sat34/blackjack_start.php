<?php  // blackjack_start.php
require_once __DIR__ . "/shuffle.php";
require_once __DIR__ . "/PlayingCard.php";

// セッションの開始
session_start();

/* カードをシャッフルする */
// トランプを1デッキ作成する
$cards_base = [];
$rank_string = [
    1 => "A",
    11 => "J",
    12 => "Q",
    13 => "K",
];
foreach (["♠","♥","♦","♣"] as $suit) {
    for($i = 1; $i <= 13; ++$i) {
        $rank = $rank_string[$i] ?? "{$i}";
        $pc = new PlayingCard($suit, $rank);
        $cards_base[] = $pc;
    }
}
// var_dump($cards_base);

// シャッフルする
$cards_shuffled = FYShuffle($cards_base);
// var_dump($cards_shuffled);

/* ディーラとプレイヤーにカードを２枚づつ配る */
$dealer = [];
$player = [];
//
$dealer[] = array_pop($cards_shuffled);
$dealer[] = array_pop($cards_shuffled);
//
$player[] = array_pop($cards_shuffled);
$player[] = array_pop($cards_shuffled);
// var_dump($dealer, $player);

// セッションにデータを保存
$_SESSION["dealer"] = $dealer;
$_SESSION["player"] = $player;
$_SESSION["cards_shuffled"] = $cards_shuffled;

// 「手札の表示」へ遷移させる
header("Location: ./blackjack_player.php");

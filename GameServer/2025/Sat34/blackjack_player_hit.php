<?php  // blackjack_player_hit.php
require_once __DIR__ . "/PlayingCard.php";

// セッションの開始
session_start();

// カードを引く
$_SESSION["player"][] = array_pop($_SESSION["cards_shuffled"]);

// 「手札の表示」へ遷移させる
header("Location: ./blackjack_player.php");

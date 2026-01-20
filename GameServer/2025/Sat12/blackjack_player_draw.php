<?php  // blackjack_player_draw.php

// セッションを開始する
session_start();

// プレイヤーがカードを1枚追加で引く
$_SESSION["player"][] = array_pop($_SESSION["cards_shuffled"]);

// locationでblackjack_playerに移動させる
header("Location: ./blackjack_player.php");

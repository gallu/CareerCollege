<?php  // blackjack_player.php

// セッションを開始する
session_start();

// ディーラーのカードを表示
var_dump($_SESSION["dealer"]);

// プレイヤーのカードを表示
var_dump($_SESSION["player"]);




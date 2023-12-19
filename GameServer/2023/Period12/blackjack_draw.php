<?php // blackjack_draw.php
ob_start();
session_start();

require_once  __DIR__ . "/blackjack_function.php";

$card = drawCard();
// var_dump($card);
// var_dump($_SESSION['deck']);    

// 引いたカードを手札に入れる
$_SESSION['hand'] ??= []; // おまじない
$_SESSION['hand'][] = $card;

header("Location: ./blackjack.php");

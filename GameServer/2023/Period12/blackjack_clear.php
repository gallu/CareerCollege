<?php  // blackjack_clear.php
ob_start();
session_start();

require_once  __DIR__ . "/blackjack_function.php";

// 手札をきれいにする
unset($_SESSION['p_hand']);
unset($_SESSION['hand']);

// 親のドローをする
$_SESSION['p_hand'] = [];
$_SESSION['p_hand'][] = drawCard();
$_SESSION['p_hand'][] = drawCard();
// 合計が16以下ならもう一枚引く
while (16 >= totalCalculation($_SESSION['p_hand'])) {
    $_SESSION['p_hand'][] = drawCard();
}

// ２枚ドローする
$_SESSION['hand'] = [];
$_SESSION['hand'][] = drawCard();
$_SESSION['hand'][] = drawCard();


header("Location: ./blackjack.php");

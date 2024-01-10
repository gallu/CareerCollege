<?php // blackjack_clear.php
declare(strict_types=1);
require_once __DIR__ . "/blackjack_init.php";

$hand = new Hand();
$hand->clear();

// blackjack.php に遷移する
header("Location: ./blackjack.php");

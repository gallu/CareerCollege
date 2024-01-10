<?php  // blackjack_draw.php
declare(strict_types=1);
require_once __DIR__ . "/blackjack_init.php";

//　山札を作る
// 山札からカードを１枚引く
$deck = new Deck();
$card = $deck->draw();
var_dump($card);
var_dump( count($_SESSION[Deck::SKEY]) );

// 引いたカードを手札に入れる
$hand = new Hand();
$hand->insert($card);
var_dump( $_SESSION[Hand::SKEY] );

// blackjack.php に遷移する
header("Location: ./blackjack.php");

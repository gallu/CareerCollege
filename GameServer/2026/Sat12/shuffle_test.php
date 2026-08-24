<?php  // shuffle_test.php

require_once __DIR__ . "/shuffle.php";

//
$cards = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
// シャッフルする
$cardsShuffled = FYshuffle($cards);
print_r($cardsShuffled);

//
$cards = [];
$suit = ["♠", "♥", "♦", "♣"];
foreach ($suit as $s) {
	for ($i = 1; $i <= 13; ++$i) {
		$cards[] = [$s, $i];
	}
}
// print_r($cards);

// シャッフルする
$cardsShuffled = FYshuffle($cards);
print_r($cardsShuffled);

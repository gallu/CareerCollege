<?php  // blackjackScore_test.php
require_once __DIR__ . "/PlayingCard.php";
require_once __DIR__ . "/blackjackScore.php";

// テスト用データ
$tests = [
    [
        "ranks" => ["J", "A"],
        "want" => 21,
    ],
    [
        "ranks" => ["A", "A", "J"],
        "want" => 12,
    ],
];

// テスト
foreach ($tests as $k => $t) {
    $cards = [];
    foreach ($t["ranks"] as $r) {
        $cards[] = new PlayingCard("♠", $r);
    }
    $num = blackjackScore($cards);
    if ($num === $t["want"]) {
        echo "ok <br>\n";
    } else {
        echo "NG <br>\n";
    }
}

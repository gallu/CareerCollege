<?php  // blackjackHandValue_test.php
require_once __DIR__ . "/blackjackHandValue.php";
$tests = [
    [
        "ranks" => ["J"],
        "want" => 10,
    ],
    [
        "ranks" => ["J", "A"],
        "want" => 21,
    ],
    [
        "ranks" => ["A", "A", "J"],
        "want" => 12,
    ],
];

foreach ($tests as $t) {
    $hands = [];
    foreach ($t["ranks"] as $r) {
        $hands[] = ["rank" => $r];
    }
    $num = blackjackHandValue($hands);
    var_dump($num);
    if ($num === $t["want"]) {
        echo "ok<br>\n";
    } else {
        echo "NG<br>\n";
    }
}

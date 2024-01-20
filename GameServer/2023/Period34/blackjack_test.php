<?php  // blackjack_test.php

require_once __DIR__ . "/blackjack_class.php";

$obj = new Hand();
// var_dump($obj);

$tests = [
    "Jのテスト" => [
        "argv" => [
            new Card("♠", 11),
        ],
        "want" => 10,
    ],
    "Qのテスト" => [
        "argv" => [
            new Card("♠", 12),
        ],
        "want" => 10,
    ],
    "Kのテスト" => [
        "argv" => [
            new Card("♠", 13),
        ],
        "want" => 10,
    ],
    "JQKのテスト" => [
        "argv" => [
            new Card("♠", 11),
            new Card("♠", 12),
            new Card("♠", 13),
        ],
        "want" => 30,
    ],
    "AJのテスト" => [
        "argv" => [
            new Card("♠", 1),
            new Card("♠", 11),
        ],
        "want" => 21,
    ],
    "AJQのテスト" => [
        "argv" => [
            new Card("♠", 1),
            new Card("♠", 11),
            new Card("♠", 12),
        ],
        "want" => 21,
    ],
    "AAのテスト" => [
        "argv" => [
            new Card("♠", 1),
            new Card("♠", 1),
        ],
        "want" => 12,
    ],
    "A29のテスト" => [
        "argv" => [
            new Card("♠", 2),
            new Card("♠", 9),
            new Card("♠", 1),
        ],
        "want" => 12,
    ],
];
//
$success_count = 0;
$error_count = 0;
foreach ($tests as $name => $t) {
    $r = $obj->calculationMain($t["argv"]);
    // var_dump($r);
    if ($r === $t["want"]) {
        $success_count ++;
    } else {
        echo "NG!! {$name} want:{$t['want']} , got:{$r} \n<br>";
        $error_count ++;
    }
}
echo "SUCCESS: {$success_count}<br>\n";
echo "ERROR: {$error_count}<br>\n";




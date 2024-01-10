<?php // blackjack_test.php

require_once  __DIR__ . "/blackjack_function.php";

// totalCalculation のテスト
$success_cont = 0;
$error_cont = 0;

$tests = [
    [
        "name" => "Jなら10になるテスト",
        "hand" => [
            ["number" => 11],
        ],
        "want" => 10,
    ],
    [
        "name" => "JとQとKがそれぞれ10になるテスト",
        "hand" => [
            ["number" => 11],
            ["number" => 12],
            ["number" => 13],
        ],
        "want" => 30,
    ],
    // A系のテストをいくつか積む
    [
        "name" => "A一枚",
        "hand" => [
            ["number" => 1],
        ],
        "want" => 11,
    ],
    [
        "name" => "A+Jのブラックジャック",
        "hand" => [
            ["number" => 1], // A
            ["number" => 11], // J
        ],
        "want" => 21,
    ],
    [
        "name" => "Aが11になれるケース",
        "hand" => [
            ["number" => 1], // A
            ["number" => 5],
            ["number" => 5],
        ],
        "want" => 21,
    ],
    [
        "name" => "Aが11になれないケース",
        "hand" => [
            ["number" => 1], // A
            ["number" => 5],
            ["number" => 6],
        ],
        "want" => 12,
    ],
];

foreach($tests as $test) {
    // 対象関数のテスト
    $t = totalCalculation($test["hand"]);

    // 得られた値が期待通りか？ を確認
    if ($test["want"] !== $t) {
        echo "ERROR!!: {$test["name"]}<br>\n";
        ++ $error_cont;
    } else {
        ++ $success_cont;
    }
}

echo "<br>\n";
echo "success: {$success_cont}<br>\n";
echo "error: {$error_cont}<br>\n";
